<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Admin;

class AccountController extends Controller
{
    protected $admin;

    public function __construct(Request $request) {
        $this->admin = $request->session()->get('admin');
    }
    /**
     * 展示首页
     *
     * @return void
     */
    public function index(Request $request)
    {
        return view('admin.index')->with('admin', $request->session()->get('admin'));
    }

    /**
     * 登录页
     *
     * @return void
     */
    public function getLogin() {
        return view('admin.login');
    }

    /**
     * 登录
     *
     * @param Request $request
     * @return void
     */
    public function postLogin(Request $request) {
        $account = $request->input('account');
        $password = md5($request->input('password'));

        $admin = Admin::where('account', $account)->where('password', $password)->first();

        if ($admin) {
            session(['admin' => $admin]);
            return redirect('/admin');
        }
        else {
            return redirect('/admin/login')->with('message', '账号或密码错误');
        }
    }

    public function getInfo() {
        return view('admin.info')->with('admin', $this->admin);
    }

    /**
     * 登出
     *
     * @param Request $request
     * @return void
     */
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect('/admin/login');
    }
}
