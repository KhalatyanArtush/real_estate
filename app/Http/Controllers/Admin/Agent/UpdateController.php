<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Agent\UpdateRequest;
use App\Models\Agent;
use Illuminate\Http\Request;


use App\Http\Requests\creatRequest;


class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Agent $agent)
    {
        $data = $request->validated();


        $this->service->update($agent, $data);
        return redirect()->route('admin.agent.show',$agent->id);

    }
}

