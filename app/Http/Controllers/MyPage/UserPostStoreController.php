<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Controllers\Controller;

use App\Http\Requests\myPage\StoreRequest;
use App\Models\UserPost;
use App\Services\myPage\Service;
use Illuminate\Http\Request;


class UserPostStoreController extends Controller
{
    public $service;
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function __invoke(StoreRequest $request, UserPost $myPage)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('post.index');
    }
}


