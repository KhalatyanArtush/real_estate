<?php

namespace App\Services\Admin\Agent;

use App\Models\Agent;

class Service
{
    public function store($data){

        $newImageName = time() . '.' . $data['img']->extension();
        $data['img']->move(public_path('Agent/images'), $newImageName);

        Agent::create([
            'image_path' => $newImageName,
            'name' => $data['name'],
            'profession' => $data['profession'],
        ]);
    }


    public function update($agent, $data){
        $agent->update($data);

    }
}
