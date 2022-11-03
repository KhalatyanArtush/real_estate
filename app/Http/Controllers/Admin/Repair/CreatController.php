<?php

namespace App\Http\Controllers\Admin\Repair;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use App\Http\Requests\creatRequest;


class CreatController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.repair.create', compact('contacts', 'ourServises', 'repairs'));
    }
}

