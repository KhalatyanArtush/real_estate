<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Video;


class VideoUploadController extends Controller
{
    public function index()
    {
        return view('video-upload');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'video' => 'required',
            'video.*' => 'mimes:mp4,mov'
        ]);


        if($request->hasfile('video'))
        {
            foreach($request->file('video') as $key => $video)
            {
                $path_video = $video->store('public/post/video');
                $name_video = $video->getClientOriginalName();

                $insert_video[$key]['name'] = $name_video;
                $insert_video[$key]['path'] = $path_video;

            }
        }

        Video::insert($insert_video);

        return redirect('video-upload')->with('status', 'Multiple File has been uploaded Successfully');

    }
}
