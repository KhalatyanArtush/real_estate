<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Http\Requests\creatRequest;


class AgentController extends Controller
{

public function __invoke(){

        return view('/agents');

    }
}
