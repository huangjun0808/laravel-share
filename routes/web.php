<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes();
//$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
//$this->post('login', 'Auth\LoginController@login');
//$this->post('logout', 'Auth\LoginController@logout')->name('logout');
//
//// Registration Routes...
//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');
//
//// Password Reset Routes...
//$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
//$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
//$this->post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index');

/**
 * 命名空间为Home路由组
 */
Route::group(['namespace'=>'Home'],function(){

    Route::get('/', 'IndexController@index');

    //Auth相关路由
    Route::get('login','Auth\LoginController@showLoginForm');
    Route::post('login','Auth\LoginController@login');
    Route::post('logout','Auth\LoginController@logout');

    Route::post('register','Auth\RegisterController@register');
    Route::any('register/send','Auth\RegisterController@send');


});