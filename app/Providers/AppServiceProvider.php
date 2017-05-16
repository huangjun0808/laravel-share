<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //2-8 个汉字 或 4-16 字母
        Validator::extend('between_op', function($attribute, $value, $parameters, $validator) {
            $size = mb_strlen($value,'gb2312');
            return $size >= $parameters[0] && $size <= $parameters[1];
        });
        Validator::replacer('between_op', function($message, $attribute, $rule, $parameters) {
            return str_replace([':min', ':max', ':mn/2', ':mx/2'], [$parameters[0],$parameters[1],$parameters[0]/2,$parameters[1]/2], $message);
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
