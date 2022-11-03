<?php

namespace App\Http\Controllers\Admin\Village;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use App\Models\Village;

class ShowController extends BaseController
{
    public function __invoke(Village $village)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.village.show',compact('village', 'repairs', 'contacts', 'ourServises'));

    }
}

