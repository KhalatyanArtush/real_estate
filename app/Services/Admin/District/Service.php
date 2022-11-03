<?php

namespace App\Services\Admin\District;

use App\Models\District;

class Service
{
    public function store($data){
        District::create($data);
    }


    public function update($district, $data){
        $district->update($data);
    }
}
