<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

use App\Models\User;

class UserController extends Controller
{
    /**
     * 用户信息页
     *
     * @return void
     */
    public function userInfoPage() {
        $id = session('user')->id;

        $user = User::find($id);

        return view('mall.mine.info')->with([
            'user' => $user
        ]);
    }

    public function updateUserInfo(Request $request) {
        $id = session('user')->id;
        $nickname = $request->nickname;
        $telephone = $request->telephone;
        $avatar = $request->file('avatar');

        $user = User::find($id);

        $user->nickname = $nickname;
        $user->telephone = $telephone;

        if ($request->hasFile('avatar')) {
            $filePath = 'uploads/'.time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->save($filePath);
            $user->avatar = '/'.$filePath;
        }

        session(['user' => $user]);

        if ($user->save()) {
            return response()->json([
                'status' => 1,
                'message' => '修改成功'
            ]);
        }
        else {
            return response()->json([
                'status' => 2,
                'message' => '修改失败，请稍后再试'
            ]);
        }
    }
}
