<?php

namespace App\Http\Controllers\Admin\HomeSlider;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\HomeSlider;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\Home;

use App\Http\Requests\creatRequest;


class IndexController extends Controller
{
    public function __invoke()
    {
        $homeSliders = HomeSlider::all();

        return view('admin.home.index',compact('homeSliders'));

    }
}

