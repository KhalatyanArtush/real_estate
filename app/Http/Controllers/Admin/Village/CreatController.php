<?php

namespace App\Http\Controllers\Admin\Village;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use App\Models\Village;

class CreatController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.village.create', compact('contacts', 'repairs', 'ourServises'));
    }
}

