<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agent;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;


use App\Http\Requests\creatRequest;


class CreatController extends BaseController
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('admin.agent.create', compact('contacts', 'repairs', 'ourServises'));

    }
}

