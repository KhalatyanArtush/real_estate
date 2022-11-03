<?php

namespace App\Services\Admin\Repair;

use App\Models\Repair;

class Service
{
    public function store($data){
        Repair::create($data);
    }


    public function update($repair, $data){
        $repair->update($data);
    }
}
