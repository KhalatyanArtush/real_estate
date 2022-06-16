<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;


use App\Http\Requests\creatRequest;


class CreatController extends BaseController
{
    public function __invoke()
    {
    $agents = Agent::all();
        return view('admin.agent.create',compact('agents'));

    }
}

