<?php

namespace App\Http\Controllers\Administrator\User;

use App\Http\Controllers\Controller;
use App\Services\Administrator\User\Service;

class BaseController extends Controller
{

    public $service;

    public function __construct(Service $service)
    {

        $this->service = $service;
    }

}
