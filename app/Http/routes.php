<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// 首页
Route::get('/', function () {
    return view('mail.home.index');
});

// 账户中心
Route::group(['prefix' => 'account'], function() {
    // 登录
    Route::get('login', function() {
        return view('mall.account.login');
    });

    // 注册
    Route::get('register', function() {
        return view('mail.account.register');
    });
});

// 商品
Route::group(['prefix' => 'goods'], function() {
    // 商品详情
    Route::get('detail', function() {
        return view('mail.goods.detail');
    });

    // 商品列表
    Route::get('list', function() {
        return view('mail.goods.list');
    });
});

// 个人中心
Route::group(['prefix' => 'mine'], function() {
    // 修改个人资料
    Route::get('change', function() {
        return view('mail.mine.change');
    });

    // 个人信息
    Route::get('info', function() {
        return view('mail.mine.info');
    });

    // 发布的商品
    Route::get('goods', function() {
        return view('mail.mine.goods');
    });
});

// 后台
Route::group(['prefix' => 'admin'], function() {
    // 首页
    Route::get('', function() {
        return view('admin.index');
    });
});