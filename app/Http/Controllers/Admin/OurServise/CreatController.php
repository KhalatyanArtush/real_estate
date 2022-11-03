<?php

namespace App\Http\Controllers\Admin\OurServise;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;


class CreatController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.ourServise.create', compact('contacts','ourServises', 'repairs'));
    }
}

