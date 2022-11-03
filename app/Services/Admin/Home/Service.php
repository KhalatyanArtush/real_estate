<?php

namespace App\Services\Admin\Home;

use App\Models\Home;
use function public_path;

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

        if (isset($data['img'])){
        $newImageName = time() . '.' . $data['img']->extension();
        $data['img']->move(public_path('Home/images'), $newImageName);

        $home->update([
            'image_path' => $newImageName,
            'text' => $data['text'],

        ]);
        } else {
            $home->update($data);
        }
    }
}
