<?php

namespace App\Http\Controllers;

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

class VideoController extends Controller
{
   public function __invoke(FileRequest $request)
   {

//       $files = File::all();
       $posts = Post::find(2);
       dd($posts->videos);
       $posts = $videos->post;
       dd($posts);

       return view('file',compact('videos','posts'));
   }
}
