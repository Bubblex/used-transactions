<?php

namespace App\Http\Controllers\Mall;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User;

class MallController extends Controller
{
    /**
     * 处理表单验证信息返回
     *
     * @param [type] $message
     * @return void
     */
    private function handleBack($message) {
        return back()->with($message)->withInput();
    }

    /**
     * 注册页面
     *
     * @return void
     */
    public function registerPage() {
        return view('mall.account.register');
    }

    /**
     * 登录页面
     *
     * @return void
     */
    public function loginPage() {
        return view('mall.account.login');
    }

    /**
     * 注册接口
     *
     * @param Request $request
     * @return void
     */
    public function postRegister(Request $request) {
        $account = $request->account;
        $password = $request->password;
        $nickname = $request->nickname;
        $confirm_password = $request->confirm_password;
        $message = [];

        if (User::where('account', $account)->first()) {
            return response()->json(['status' => 3]);
        }

        $user = new User;
        $user->account = $account;
        $user->nickname = $nickname;
        $user->password = md5($password);

        if ($user->save()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 2]);
        }
    }

    public function postLogin(Request $request) {
        $account = $request->account;
        $password = md5($request->password);

        $user = User::where('account', $account)->first();

        if (!$user) {
            return response()->json(['status' => 2, 'message' => '该用户不存在']);
        }

        if ($user->password != $password) {
            return response()->json(['status' => 3, 'message' => '用户名或密码错误']);
        }

        if ($user->status != 1) {
            return response()->json(['status' => 4, 'message' => '该用户已或删除，无法正常登录']);
        }

        session(['user' => $user]);
        return response()->json(['status' => 1, 'message' => '登录成功']);
    }
}
