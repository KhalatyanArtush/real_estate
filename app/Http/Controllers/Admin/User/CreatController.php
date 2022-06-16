<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;

use App\Models\User;

use App\Http\Requests\creatRequest;


class CreatController extends Controller
{
    public function __invoke()
    {
        return view('admin.user.create');

}
}

