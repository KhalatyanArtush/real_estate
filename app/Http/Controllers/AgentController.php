<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use App\Http\Requests\creatRequest;


class AgentController extends Controller
{

public function __invoke(){

    $agents = Agent::get();

    return view('agents',compact('agents'));
//        return view('/agents');

    }
}
