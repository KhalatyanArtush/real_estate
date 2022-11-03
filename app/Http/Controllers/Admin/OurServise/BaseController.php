<?php

namespace App\Http\Controllers\Admin\OurServise;

use App\Http\Controllers\Controller;
use App\Services\Admin\OurServise\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

}
