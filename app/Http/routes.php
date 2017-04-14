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
    return view('mall.home.index');
});

// 账户中心
Route::group(['prefix' => 'account'], function() {
    // 登录
    Route::get('login', function() {
        return view('mall.account.login');
    });

    // 注册
    Route::get('register', function() {
        return view('mall.account.register');
    });
});

// 商品
Route::group(['prefix' => 'goods'], function() {
    // 商品详情
    Route::get('detail', function() {
        return view('mall.goods.detail');
    });

    // 商品列表
    Route::get('list', function() {
        return view('mall.goods.list');
    });
});

// 个人中心
Route::group(['prefix' => 'mine'], function() {
    // 修改个人资料
    Route::get('change', function() {
        return view('mall.mine.change');
    });

    // 个人信息
    Route::get('info', function() {
        return view('mall.mine.info');
    });

    // 发布的商品
    Route::get('goods', function() {
        return view('mall.mine.goods');
    });
});

// 后台
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
    // 登录页
    Route::get('login', 'AccountController@getLogin');

    // 登录
    Route::post('login', 'AccountController@postLogin');

    Route::group(['middleware' => 'auth'], function() {
        // 首页
        Route::get('', 'AccountController@index');

        // 个人资料页
        Route::get('info', 'AccountController@getInfo');

        // 修改个人资料页
        Route::get('info/update', 'AccountController@updateInfo');

        // 修改个人资料
        Route::post('info/update', 'AccountController@postUpdateInfo');

        // 用户列表页
        Route::get('user', 'AccountController@userPage');

        // 获取用户列表
        Route::get('user/list', 'AccountController@getUserList');

        // 修改用户状态
        Route::post('user/status', 'AccountController@updateUserStatus');

        // 登出
        Route::get('logout', 'AccountController@logout');
    });
});