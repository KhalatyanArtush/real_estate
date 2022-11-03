<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\Agent;
use App\Models\BuildingType;
use App\Models\BuyRent;
use App\Models\City;
use App\Models\File;
use App\Models\Post;
use App\Models\Region;
use App\Models\Street;
use App\Models\Type;

class fileController extends Controller
{
   public function __invoke(FileRequest $request)
   {

//       $files = File::all();
       $posts = Post::find(2);
       dd($posts->files);
       $posts = $files->post;
       dd($posts);

       return view('file',compact('files','posts'));
   }
}
