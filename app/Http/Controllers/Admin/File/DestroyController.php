<?php

namespace App\Http\Controllers\Admin\File;

use App\Http\Controllers\Controller;
use App\Http\Requests\File\FileRequest;
use App\Models\File;
use http\Env\Request;

class DestroyController extends Controller
{
   public function __invoke(File $file, FileRequest $request)
   {
//       $filename = public_path('Post/img/'.$file->dir.'/'.$file->name);
//       File::deleting($filename);

//       $file->remove( public_path('Post/img/'.$file->dir.'/'.$file->name));
       $file = File::find($request->image_id);
       $file->delete();
       return redirect()->route('admin.post.edit',$file->post_id);

   }
}
