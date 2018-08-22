<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/info','\App\Http\Controllers\Home\InfoController@index');
Route::group(['middleware' => 'wechat.oauth:default,snsapi_userinfo'], function(){
    //主页
    Route::get('/', "\App\Http\Controllers\Home\HomeController@index");
    Route::get('/posts/{post}/show',"\App\Http\Controllers\Home\HomeController@show");
    //投票
    Route::get('/posts/{post}/vote', '\App\Http\Controllers\Home\HomeController@vote');

    //参赛
    Route::get('/posts','\App\Http\Controllers\Home\PostController@index');
        //作品添加
        Route::post('/posts/store','\App\Http\Controllers\Home\PostController@store');
        //插画
        Route::get('posts/addc','\App\Http\Controllers\Home\PostController@addc');
        //多格漫画
        Route::get('posts/addd','\App\Http\Controllers\Home\PostController@addd');
        //游戏原画
        Route::get('posts/addy','\App\Http\Controllers\Home\PostController@addy');
        //动画短片
        Route::get('posts/addv','\App\Http\Controllers\Home\PostController@addv');

    //排名
    Route::get('/rankings','\App\Http\Controllers\Home\RankingController@index');

    //我的
    Route::get('/mine','\App\Http\Controllers\Home\MineController@index');

    
    
    
});
//菜单
Route::get('/menu','\App\Http\Controllers\Home\MenuController@menu');
//素材管理
Route::get('/img','\App\Http\Controllers\Home\MaterialController@image');
Route::get('/article','\App\Http\Controllers\Home\MaterialController@article');
Route::any('/wechat', '\App\Http\Controllers\Home\WeChatController@serve');
Route::get('share','\App\Http\Controllers\Home\ShareController@share');
include_once("admin.php");