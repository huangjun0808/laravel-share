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

Route::get('/home', 'HomeController@index');

/**
 * 命名空间为Home路由组
 */
Route::group(['namespace'=>'Home','middleware'=>['menu:home']],function(){

    Route::get('/', 'IndexController@index');

    //Auth相关路由
    Route::get('login','Auth\LoginController@showLoginForm');
    Route::post('login','Auth\LoginController@login');
    Route::post('logout','Auth\LoginController@logout');

    Route::post('register','Auth\RegisterController@register');
    Route::any('register/send','Auth\RegisterController@send');

    //问答路由
    Route::get('questions','QuestionController@index');
    Route::get('questions/unanswered','QuestionController@unanswered');
    Route::get('questions/hottest','QuestionController@hottest');
    Route::resource('question','QuestionController');

    //标签路由
    Route::any('t/{label}','LabelController@show');

    //上传文件路由
    Route::any('upload/image','UploadController@image');

});