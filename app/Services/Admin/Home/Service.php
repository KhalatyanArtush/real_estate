<?php

namespace App\Services\Admin\Home;

use App\Models\Home;

class Service
{
    public function store($data){
        Home::create($data);
    }


    public function update($home, $data){
        $home->update($data);

    }
}
