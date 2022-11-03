<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\File;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Repair;
use App\Models\Video;


class ShowController extends BaseController
{
   public function __invoke(Post $post)
   {
       $files = File::all();
       $videos = Video::all();
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('admin.post.show',compact('post', 'repairs', 'videos', 'files', 'contacts', 'ourServises'));

   }
}
