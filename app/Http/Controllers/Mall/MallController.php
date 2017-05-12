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
        $user->password = $password;

        if ($user->save()) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 2]);
        }
    }
}
