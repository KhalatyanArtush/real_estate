<?php

namespace App\Services\Admin\Street;

use App\Models\Street;

class Service
{
    public function store($data){
        Street::create($data);
    }


    public function update($street, $data){
        $street->update($data);
    }
}
