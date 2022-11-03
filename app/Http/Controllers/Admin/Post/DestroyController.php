<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\File;
use App\Models\Post;
use App\Models\UserPost;

class DestroyController extends BaseController
{
    public function __invoke(Post $post)
    {
        $userPost = UserPost::where('user_id', $post->id)->first();
        if (isset($userPost)) {
            $connection = $userPost[0];
            $connection->delete();
        }
        if (isset($post->files)) {
            foreach ($post->files as $file)
                $file->delete();
        }
        if (isset($post->videos)) {
            foreach ($post->videos as $video)
                $video->delete();
        }

        $post->delete();
        return redirect()->route('admin.post.index');

    }
}
