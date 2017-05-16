<?php

namespace App\Http\Controllers\Home\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * 登录方法
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if($request->ajax()){
            //判断账号类型
            $userType = filter_var($request->input('username'),FILTER_VALIDATE_EMAIL)?'email':'mobile';
            //效验数据
            $this->validateLogin($request, $userType);
            //验证1分钟内登录次数
            if ($this->hasTooManyLoginAttempts($request)) {
                $this->fireLockoutEvent($request);
                $seconds = $this->limiter()->availableIn(
                    $this->throttleKey($request)
                );
                $message = Lang::get('auth.throttle', ['seconds' => '<span id="seconds">'.$seconds.'</span>']);
                //登录次数过多返回错误信息
                return response()->json(['status'=>1,'message'=>'登录失败','seconds' => $seconds,'data'=>['password'=>[$message]]]);
            }
            if ($this->attemptLogin($request, $userType)) {
                //登录成功返回数据
                return response()->json(['status'=>200,'message'=>'登录成功']);
            }
            $this->incrementLoginAttempts($request);
            return response()->json(['status'=>2,'message'=>'登录失败','data'=>['username'=>[],'password'=>['用户名或密码错误']]]);
        }
        abort(406);
    }

    /**
     * 验证输入数据
     * @param Request $request
     * @param string $userType
     */
    protected function validateLogin(Request $request, $userType)
    {
//        $username = filter_var($request->input('username'),FILTER_VALIDATE_EMAIL)?'email':'mobile';
        $this->validate($request, [
            $this->username() => 'required|exists:user,'.$userType,
            'password' => 'required',
        ]);
    }

    /**
     * 用户登录
     * @param Request $request
     * @param string $userType
     * @return bool
     */
    protected function attemptLogin(Request $request, $userType)
    {
        return $this->guard()->attempt([
            $userType => $request->input('username'),
            'password'=>$request->input('password')
        ], $request->has('remember'));

    }

    public function username()
    {
        return 'username';
    }

    protected function guard()
    {
        return Auth::guard('web');
    }

    /**
     * 用户退出
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }
}
