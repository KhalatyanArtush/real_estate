<?php

namespace App\Services\Admin\Type;

use App\Models\Type;

class Service
{
    public function store($data){
        Type::create($data);
    }


    public function update($type, $data){
        $type->update($data);
    }
}
