<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;




class EditController extends BaseController
{
    public function __invoke(Agent $agent)
    {
 return view('admin.agent.edit',compact('agent'));
    }
}

