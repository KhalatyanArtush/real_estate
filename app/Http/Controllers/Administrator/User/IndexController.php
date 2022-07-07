<?php

namespace App\Http\Controllers\Administrator\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\creatRequest;
use App\Models\User;
use function view;


class IndexController extends BaseController
{
    public function __invoke()
    {
    $users = User::all();
        return view('administrator.user.index',compact('users'));

    }
//
}

