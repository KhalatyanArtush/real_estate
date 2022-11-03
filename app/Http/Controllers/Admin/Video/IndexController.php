<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\Video;
use App\Models\Post;
use App\Models\Region;
use App\Models\Street;
use App\Models\Type;

class IndexController extends Controller
{
   public function __invoke(FileRequest $request)
   {

       $posts = Post::all();

       return view('video',compact('posts'));

   }
}
