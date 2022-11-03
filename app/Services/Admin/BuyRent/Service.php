<?php

namespace App\Services\Admin\BuyRent;

use App\Models\BuyRent;

class Service
{
    public function store($data)
    {
        BuyRent::create($data);
    }


    public function update($buyRent, $data)
    {
        $buyRent->update($data);
    }
}
