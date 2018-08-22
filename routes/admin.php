<?php

Route::group(['prefix' => 'admin'], function() {

    Route::get('/', '\App\Http\Controllers\Admin\LoginController@index');
    Route::get('/login', '\App\Http\Controllers\Admin\LoginController@index');
    Route::post('/login', '\App\Http\Controllers\Admin\LoginController@login');
    Route::get('/logout', '\App\Http\Controllers\Admin\LoginController@logout');

    // 需要登陆的
    Route::group(['middleware' => 'auth:admin'], function(){
        Route::get('/home', '\App\Http\Controllers\Admin\HomeController@index');

        //信息发布
        Route::get('/messages','\App\Http\Controllers\Admin\MessageController@index');
        Route::post('/messages/store','\App\Http\Controllers\Admin\MessageController@store');
        //信息列表
        Route::get('/messages/add','\App\Http\Controllers\Admin\MessageController@add');
        //发布截止日期
        Route::get('/matches','\App\Http\Controllers\Admin\MatchController@index');
        Route::post('/matches/store','\App\Http\Controllers\Admin\MatchController@store');
        //信息修改
        Route::get('messages/edit','\App\Http\Controllers\Admin\MessageController@edit');
        Route::post('messages/update','\App\Http\Controllers\Admin\MessageController@update');
        //信息删除
        Route::get('/messages/delete','\App\Http\Controllers\Admin\MessageController@delete');
       

        //作品管理
        Route::get('/posts ','\App\Http\Controllers\Admin\PostController@index');
        Route::get('/posts/delete','\App\Http\Controllers\Admin\PostController@delete');
        });
    });