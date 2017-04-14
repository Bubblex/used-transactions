<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Yajra\Datatables\Facades\Datatables;

use App\Models\Admin;
use App\Models\User;

class AccountController extends Controller
{
    private $defaultOptions = [
        'page' => '1',
        'pageSize' => '10'
    ];

    protected $admin;

    /**
     * 初始化管理员信息
     */
    public function __construct() {
        $this->admin = session('admin');
    }

    private function handleInfoUpdateFlash($flash) {
        return redirect('/admin/info/update')->with($flash);
    }

    /**
     * 展示首页
     *
     * @return void
     */
    public function index(Request $request)
    {
        return view('admin.index')->with('admin', $this->admin);
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

    public function updateInfo() {
        return view('admin.info-update')->with('admin', $this->admin);
    }

    /**
     * 修改用户信息
     *
     * TODO: 表单验证
     * TODO: 修改密码后重新登录
     * @param Request $request
     * @return void
     */
    public function postUpdateInfo(Request $request) {
        $account = session('admin')->account;
        $password = md5($request->input('password'));
        $new_password = $request->input('new_password');
        $confirm_password = $request->input('confirm_password');
        $nickname = $request->input('nickname');

        $admin = Admin::where('account', $account)->where('password', $password)->first();

        if (!$admin) {
            return $this->handleInfoUpdateFlash(['error_password' => '密码错误']);
        }

        if ($confirm_password != $new_password) {
            return $this->handleInfoUpdateFLash(['error_inconsistent' => '两次密码不一致']);
        }

        $admin->nickname = $nickname;

        if ($new_password && $confirm_password) {
            $admin->password = md5($new_password);
        }

        $admin->save();

        $this->admin = $admin;
        session(['admin' => $admin]);

        return redirect('/admin/info')->with('success', true);
    }

    /**
     * 用户信息页
     *
     * @return void
     */
    public function userPage(Request $request) {
        return view('admin.user')->with(['admin' => $this->admin]);
    }

    public function getUserList() {
        return Datatables::eloquent(User::query())->make(true);
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
