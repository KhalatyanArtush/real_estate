<?php

namespace App\Http\Controllers\Admin\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\FileRequest;
use App\Models\Video;
use http\Env\Request;

class DestroyController extends Controller
{
   public function __invoke(Video $video, FileRequest $request)
   {

       $video = Video::find($request->video_id);
       $video->delete();
       return redirect()->route('admin.post.edit',$video->post_id);

   }
}
