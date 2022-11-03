<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;
use App\Models\UserPost;
use function view;

class UserPostDeleteController extends Controller
{

    public function __invoke($myPage)
    {
        $userPost=UserPost::where('post_id',$myPage);
        $userPost->delete();
        return redirect()->route('post.index');

    }

}
