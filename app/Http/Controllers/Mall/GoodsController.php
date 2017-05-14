<?php

namespace App\Http\Controllers\Mall;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Good;

class GoodsController extends Controller
{
    public function detailPage(Request $request) {
        $id = $request->id;
        $goods = Good::find($id);
        $newGoods = Good::where('id', '<>', $id)->orderBy('id', 'desc')->take(12)->get();
        $likeGoods = Good::where('id', '<>', $id)->where('goods_type_id', $goods->goods_type_id)->orderBy('id', 'desc')->take(12)->get();

        return view('mall.goods.detail')->with([
            'goods' => $goods,
            'newGoods' => $newGoods,
            'likeGoods' => $likeGoods
        ]);
    }
}
