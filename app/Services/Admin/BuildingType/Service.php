<?php

namespace App\Services\Admin\BuildingType;

use App\Models\BuildingType;

class Service
{
    public function store($data)
    {
        BuildingType::create($data);
    }


    public function update($buildingType, $data)
    {
        $buildingType->update($data);
    }
}
