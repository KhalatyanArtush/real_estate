<?php

namespace App\Services\Admin\Agent;

use App\Models\Agent;

class Service
{
    public function store($data){
        Agent::create($data);
    }


    public function update($agent, $data){
        $agent->update($data);

    }
}
