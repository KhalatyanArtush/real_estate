<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\File;
use App\Models\Post;
use App\Models\Video;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, Post $post)
    {
dd(111111111);
        $data = $request->validated();

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $key => $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('Post/img/'), $name);
                $post_id = $request->post_id;

                $insert[$key]['name'] = $name;
                $insert[$key]['post_id'] = $post_id;

            }
            File::insert($insert);
        }

        if ($request->hasfile('video')) {
            foreach ($request->file('video') as $key => $video) {

                $name_video = $video->getClientOriginalName();
                $video->move(public_path('Post/video/'), $name_video);
                $post_id = $request->post_id;

                $insert_video[$key]['name'] = $name_video;
                $insert_video[$key]['post_id'] = $post_id;
            }

            Video::insert($insert_video);
        }
        $this->service->update($post, $data);

        return redirect()->route('admin.post.edit', $post->id);

    }
}
