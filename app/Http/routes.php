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
Route::get('/', 'Mall\IndexController@indexPage');

// 账户中心
Route::group(['prefix' => 'account', 'namespace' => 'Mall'], function() {
    // 登录
    Route::get('login', 'MallController@loginPage');

    // 登录接口
    Route::post('login', 'MallController@postLogin');

    // 注册
    Route::get('register', 'MallController@registerPage');

    // 提交注册接口
    Route::post('register', 'MallController@postRegister');
});

// 商品
Route::group(['prefix' => 'goods', 'namespace' => 'Mall'], function() {
    // 商品详情
    Route::get('detail', 'GoodsController@detailPage');

    // 商品列表
    Route::get('list', 'GoodsController@listPage');

    // 发布商品
    Route::get('release', function() {
        return view('mall.goods.release');
    });
});

// 个人中心
Route::group(['prefix' => 'mine', 'namespace' => 'User'], function() {
    // 修改个人资料
    Route::get('change', function() {
        return view('mall.mine.change');
    });

    // 个人信息
    Route::get('info', 'UserController@userInfoPage');

    // 修改个人资料
    Route::post('update/info', 'UserController@updateUserInfo');

    // 发布的商品
    Route::get('goods', 'UserController@releaseGoodsPage');

    // 删除发布的商品
    Route::post('delete/goods', 'UserController@deleteGoods');

    // 交易成功
    Route::post('success/goods', 'UserController@successGoods');
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

        // 用户详情
        Route::get('user/detail', 'AccountController@getUserDetail');

        // 修改用户资料页
        Route::get('user/update', 'AccountController@updateUser');

        // 修改用户资料
        Route::post('user/update', 'AccountController@putUpdateuser');

        // 商品分类列表页
        Route::get('goods-types', 'AccountController@goodsTypesPage');

        // 商品分类列表
        Route::get('goods-types/list', 'AccountController@goodsTypes');

        // 商品列表
        Route::get('goods', 'AccountController@goodsPage');

        // 商品详情
        Route::get('goods/detail', 'AccountController@goodsDetail');

        // 禁用 / 启用商品
        Route::post('goods/disable', 'AccountController@disableGoods');

        // 修改商品页
        Route::get('goods/update', 'AccountController@goodsUpdate');

        // 修改商品
        Route::post('goods/update', 'AccountController@postGoodsUpdate');

        // 获取商品列表
        Route::get('goods/list', 'AccountController@getGoodsList');

        // 首页 banner 图管理
        Route::get('banner', 'AccountController@bannerPage');

        // 获取 banner 列表
        Route::get('banner/list', 'AccountController@getBannerList');

        // 添加 banner 页
        Route::get('banner/add', 'AccountController@addBannerPage');

        // 添加 banner
        Route::post('banner/add', 'AccountController@addBanner');

        // 删除 banner
        Route::post('banner/delete', 'AccountController@deleteBanner');

        // banner 详情页
        Route::get('banner/detail', 'AccountController@getBannerDetail');

        // banner 编辑页
        Route::get('banner/update', 'AccountController@updateBannerPage');

        // 修改 banner
        Route::post('banner/update', 'AccountController@updateBanner');

        // 登出
        Route::get('logout', 'AccountController@logout');
    });
});