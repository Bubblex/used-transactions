<?php

namespace App\Http\Controllers\Mall;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Banner;

class IndexController extends Controller
{
    public function indexPage() {
        $banners = Banner::all();
        return view('mall.home.index')->with([
            'banners' => $banners
        ]);
    }
}
