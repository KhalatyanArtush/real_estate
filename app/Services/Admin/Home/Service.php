<?php

namespace App\Services\Admin\Home;

use App\Models\Home;

class Service
{
    public function store($data){

        $newImageName = time() . '.' . $data['img']->extension();
        $data['img']->move(public_path('Home/images'), $newImageName);

        Home::create([
            'image_path' => $newImageName,
            'text' => $data['text'],
        ]);
    }


    public function update($home, $data){
        $home->update($data);

    }
}
