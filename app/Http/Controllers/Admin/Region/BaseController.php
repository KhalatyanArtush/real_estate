<?php

namespace App\Http\Controllers\Admin\Region;

use App\Http\Controllers\Controller;
use App\Services\Admin\Region\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
