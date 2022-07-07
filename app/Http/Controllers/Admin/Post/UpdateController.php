<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\File;
use App\Models\Post;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Post $post)
   {
       $data= $request->validated();

       if($request->hasfile('files'))
       {
           foreach($request->file('files') as $key => $file)
           {
               $path = $file->store('public/post/img');
               $name = $data['key'];

               $insert[$key]['name'] = $name;
               $insert[$key]['path'] = $path;

           }
           File::insert($insert);

       }


       $this->service->update($post, $data);

       return redirect()->route('admin.post.edit',$post->id);

   }
}
