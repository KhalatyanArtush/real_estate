<?php

namespace App\Http\Controllers\Admin\BuyRent;

use App\Http\Controllers\Controller;
use App\Services\Admin\BuyRent\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
