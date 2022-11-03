<?php

namespace App\Services\Admin\Village;

use App\Models\Village;

class Service
{
    public function store($data){
        Village::create($data);
    }


    public function update($village, $data){
        $village->update($data);

    }
}
