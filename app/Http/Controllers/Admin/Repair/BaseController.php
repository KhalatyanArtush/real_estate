<?php

namespace App\Http\Controllers\Admin\Repair;

use App\Http\Controllers\Controller;
use App\Services\Admin\Repair\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
