<?php

namespace App\Http\Middleware;

use App\Models\AdminPermission as Permission;
use App\Models\Label;
use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

class GetSystemMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //ajax请求不需要获取菜单
        if(!$request->ajax()){
            if($guard == 'home'){
                $request->attributes->set('labelMenus',$this->getHomeLabelMenu());
            }else{
                $request->attributes->set('leftMenus', $this->getLeftMenu());
            }
        }
        return $next($request);
    }

    /**
     * 获取左侧菜单
     */
    protected function getLeftMenu(){

        $routeName = Route::currentRouteName();
        $url = URL::getRequest()->path();

        $table = Cache::store('file')->rememberForever('leftMenus', function(){
            //查找所有菜单
            return Permission::where('cid', 0)->orWhere(function($query){
                    $query->where('type', 1)->where('cid', 0);
                })->with(['children' => function($query){
                    $query->where('type', 1);
                }])->get()->toArray();
        });
        foreach ($table as $key => &$item) {
            if($item['type'] == 1){
                if(!Gate::forUser(auth('admin')->user())->check('pv',$item['name'])){
                    unset($table[$key]);
                }
                //为了保险起见去除一级权限为菜单的子菜单
                unset($table[$key]['children']);
            }else{
                foreach (isset($item['children']) ? $item['children'] : [] as $keyChild => &$child) {
                    if(!Gate::forUser(auth('admin')->user())->check('pv',$child['name'])){
                        unset($item['children'][$keyChild]);
                        continue;
                    }
                    if($child['name'] == $routeName){
                        $item['children'][$keyChild]['active'] = 1;
                        $item['active'] = 1;
                    }
                }
                if($item['name'] == $routeName){
                    $item['active'] = 1;
                }
                //一级菜单的子权限里没有作为菜单的权限去除
                if(!$item['children']){
                    unset($table[$key]);
                    continue;
                }
            }
        }
        return $table;

    }

    /**
     * 获取页面标签
     * @return mixed
     */
    protected function getHomeLabelMenu(){
        if(Auth::guard('web')->check()){
            $user_id = Auth::guard('web')->user()->id;
            $labels = User::find($user_id)->labels()->get();
            if(!$labels){
                $labels = Label::where('type',1)->where('enabled',1)
                    ->orderBy('follower_num','desc')->skip(0)->take(20)->get();
            }
        }else{
            $labels = Label::where('type',1)->where('enabled',1)
                ->orderBy('follower_num','desc')->skip(0)->take(20)->get();
        }
        return $labels;
    }
}
