<?php

namespace App\Http\Controllers\Administrator\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\creatRequest;
use function view;


class CreatController extends BaseController
{
    public function __invoke()
    {
        return view('administrator.user.create');

}
}

