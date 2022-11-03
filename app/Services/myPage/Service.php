<?php

namespace App\Services\myPage;

use App\Models\UserPost;
use function public_path;

class Service
{
    public function store($data)
    {
        UserPost::create([
            'user_id' => $data['user_id'],
            'post_id' => $data['post_id'],
        ]);
    }

}
