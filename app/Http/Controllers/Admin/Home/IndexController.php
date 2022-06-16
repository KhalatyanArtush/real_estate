<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\Home;

use App\Http\Requests\creatRequest;


class IndexController extends Controller
{
    public function __invoke()
    {
    $homes = Home::all();
        return view('admin.home.index',compact('homes'));

    }
}

