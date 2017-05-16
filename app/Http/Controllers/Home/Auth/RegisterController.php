<?php

namespace App\Http\Controllers\Home\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    use RegistersUsers;

    //短信验证码是否发送缓存key 有效期1分钟
    protected $registerSendKey = 'register_send_code';
    //短信验证码缓存key 有效期5分钟
    protected  $registerKey = 'register_code';

    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * 注册方法
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(Request $request)
    {
        if($request->ajax()){
            $this->validateRegister($request);
            $mobile = $request->input('mobile');
            //短信验证码缓存key 有效期5分钟
            $registerKey = $this->registerKey . $mobile;
            $oldCode = Cache::get($registerKey);
            if($request->input('code') != $oldCode){
                return response()->json(['status'=>1,'message'=>'注册失败','data'=>['code'=>['验证码错误']]]);
            }
            event(new Registered($user = $this->createUser($request)));
            $this->guard()->login($user);
            return response()->json(['status'=>200,'message'=>'注册成功']);
        }
        abort(406);
    }

    protected function validateRegister(Request $request)
    {
        $this->validate($request,[
            'nickname' => 'required|alpha_dash|between_op:4,16',
            'mobile'=>'required_if:register_type,mobile|unique:user',
            'code'=>'required_with:mobile',
            'email' => 'bail|required_if:register_type,email|max:60|email|unique:user',
            'password' => 'required|min:6|max:32',
        ],[
            'nickname.between_op'=>'名字应为 :mn/2-:mx/2 个汉字 或 :min-:max 字母。',
            'mobile.required_if'=>'手机号 不能为空。',
            'code.required_with'=>'验证码 不能为空。',
            'password.min'=>'请至少输入:min个字符作为密码。',
            'password.max'=>'为了方便您的记忆, 密码请不要超过:max个字符。',
        ],[
            'nickname'=>'名字'
        ]);
    }

    protected function createUser(Request $request)
    {
        //注册的账号类型
        $registerType = $request->input('register_type');
        $data['nickname'] = $request->input('nickname');
        $data['password'] = bcrypt($request->input('password'));
        if($registerType == 'mobile'){
            $data['mobile'] = $request->input('mobile');
            $data['is_active'] = 1;
        }else{
            $data['email'] = $request->input('email');
            $data['is_active'] = 0;
        }
        return User::create($data);
    }

    protected function guard()
    {
        return Auth::guard('web');
    }

    /**
     * 发送手机验证码
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function send(Request $request){
        if($request->ajax()){
            $this->validate($request,[
                'mobile'=>'required|regex:/^1[34578][0-9]{9}$/|unique:user'
            ],[
                'mobile.regex'=>'手机号格式有误',
            ],[
                'mobile'=>'手机号'
            ]);
            $mobile = $request->input('mobile');
            //短信验证码是否发送缓存key 有效期1分钟
            $registerSendKey = $this->registerSendKey . $mobile;
            //短信验证码缓存key 有效期5分钟
            $registerKey = $this->registerKey . $mobile;
            if(Cache::has($registerSendKey)){
                $seconds = Cache::get($registerSendKey) - Carbon::now()->getTimestamp();
                $message = '请'.$seconds.'秒后再次尝试获取';
                return response()->json(['status'=>2,'message'=>'发送失败','seconds'=>$seconds,'data'=>['code'=>[$message]]]);
            }
            //随机验证码
            $code = $this->code_random(6);
            $appkey = '23631801';
            $secret = '079391f5eceba57deec450e4a5f4adcc';
            $alidayuPath = app_path('Libraries/alidayu/TopSdk.php');
            include $alidayuPath;
            $c = new \TopClient();
            $c->appkey = $appkey;
            $c->secretKey = $secret;
            $c->format = 'json';
            $req = new \AlibabaAliqinFcSmsNumSendRequest;
            $req->setExtend("123456");
            $req->setSmsType("normal");
            $req->setSmsFreeSignName("消消气");
            $req->setSmsParam("{\"code\":\"$code\"}");
            $req->setRecNum($mobile);
            $req->setSmsTemplateCode("SMS_45950020");
            $resp = $c->execute($req);
            if(isset($resp->result->err_code) && $resp->result->err_code == 0){
                Log::info('注册短信验证码',json_decode(json_encode($resp),true));
                Cache::put($registerKey, $code, 5);
                Cache::put($registerSendKey, Carbon::now()->getTimestamp() + 60, 1);
                return response()->json(['status'=>200,'message'=>'发送成功','seconds'=>60]);
            }
            if($resp->sub_code != 'isv.MOBILE_NUMBER_ILLEGAL'){
                Log::warning('注册短信验证码',json_decode(json_encode($resp),true));
            }
            return response()->json(['status'=>1,'message'=>'发送失败']);
        }
        abort(406);
    }

    /**
     * 随机数字字符串
     * @param int $length
     * @return string
     */
    protected function code_random($length = 4){
        $pool = '0123456789';
        return substr(str_shuffle(str_repeat($pool,$length)),0,$length);
    }
}
