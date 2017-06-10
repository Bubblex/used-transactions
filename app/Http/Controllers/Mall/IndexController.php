<?php

namespace App\Http\Controllers\Mall;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Banner;
use App\Models\Good;

class IndexController extends Controller
{
    public function indexPage() {
        $banners = Banner::all();
        $goods = Good::orderBy('id', 'desc')->where('status',1)->take(12)->get();

        return view('mall.home.index')->with([
            'banners' => $banners,
            'goods' => $goods
        ]);
    }
}
