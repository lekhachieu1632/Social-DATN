<?php

namespace App\Http\Controllers\admin\banner;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }

    public function index(){
        return view('admin.banner.index');
    }

}
