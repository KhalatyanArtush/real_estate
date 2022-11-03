<?php

namespace App\Http\Controllers\Admin\BuildingType;

use App\Http\Controllers\Controller;
use App\Services\Admin\BuildingType\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
