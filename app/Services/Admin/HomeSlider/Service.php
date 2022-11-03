<?php

namespace App\Services\Admin\HomeSlider;


use App\Models\HomeSlider;
use function public_path;

class Service
{
    public function store($data)
    {
        $newImageName = time() . '.' . $data['img']->extension();
        $data['img']->move(public_path('HomeSlider/images'), $newImageName);

        HomeSlider::create([
            'image_path' => $newImageName,
            'text' => $data['text'],
        ]);
    }


    public function update($homeSlider, $data)
    {

        if (isset($data['img'])) {

            $newImageName = time() . '.' . $data['img']->extension();
            $data['img']->move(public_path('HomeSlider/images'), $newImageName);
            $homeSlider->update([
                'image_path' => $newImageName,
                'text' => $data['text'],

            ]);
        } else {
            $homeSlider->update($data);
        }
    }
}
