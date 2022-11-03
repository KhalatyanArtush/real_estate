<?php

namespace App\Services\Admin\City;

use App\Models\City;

class Service
{
    public function store($data)
    {
        City::create($data);
    }


    public function update($city, $data)
    {
        $city->update($data);
    }
}
