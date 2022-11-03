<?php

namespace App\Services\Admin\Region;

use App\Models\Region;

class Service
{
    public function store($data){
        Region::create($data);
    }


    public function update($region, $data){
        $region->update($data);
    }
}
