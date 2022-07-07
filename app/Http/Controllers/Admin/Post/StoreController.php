<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\StoreRequest;
use App\Models\File;
use App\Models\Post;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {
       dd(111111);

//       dd($request->image);
//       $newimageName = $request->key . '.' . $request->image->extension();

//       public_path('Home/images')
       $data = $request->validated();
       if($request->hasfile('files'))
       {
           foreach($request->file('files') as $key => $file)
           {
               $path = $file->move( public_path('Post/img'));
               $name = $data['key'];

               $insert[$key]['name'] = $name;
               $insert[$key]['path'] = $path;

           }
           File::insert($insert);

       }


   $this->service->store($data);

       return redirect()->route('admin.post.index');
   }
}
