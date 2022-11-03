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
            'profession' =>  $data['profession'],
            'twitter' =>  $data['twitter'],
            'facebook' =>  $data['facebook'],
            'instagram' =>  $data['instagram'],
        ]);

    }


    public function update($agent, $data){

        if (isset($data['img'])){
        $newImageName = time() . '.' . $data['img']->extension();
        $data['img']->move(public_path('Agent/images'), $newImageName);
        $agent->update([
            'image_path' => $newImageName,
            'name' => $data['name'],
            'profession' =>  $data['profession'],
            'twitter' =>  $data['twitter'],
            'facebook' =>  $data['facebook'],
            'instagram' =>  $data['instagram'],
        ]);
        } else {
            $agent->update($data);
        }
    }
}
