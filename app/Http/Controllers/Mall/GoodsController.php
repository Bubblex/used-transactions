<?php

namespace App\Http\Controllers\Mall;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Good;
use App\Models\GoodType;

class GoodsController extends Controller
{
    public function listPage(Request $request) {
        $id = $request->id;
        $search = $request->search;
        $goods = null;
        $type = null;

        if ($id) {
            $type = GoodType::find($id);
            $goods = Good::where('goods_type_id', $id);
        }

        if ($search) {
            $goods = Good::where('name', 'like', '%'.$search.'%');
        }

        if ($goods) {
            $goods = $goods->paginate(6);
        }
        else {
            $goods = Good::paginate(6);
        }

        return view('mall.goods.list')->with([
            'id' => $id,
            'type' => $type,
            'search' => $search,
            'goods' => $goods
        ]);
    }

    /**
     * 商品详情页
     *
     * @param Request $request
     * @return void
     */
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

    public function releaseGoodsPage(Request $request) {
        return view('mall.goods.release');
    }
}
