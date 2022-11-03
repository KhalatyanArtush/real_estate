<?php

namespace App\Http\Controllers\Admin\District;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\District;
use App\Models\OurServise;
use App\Models\Repair;

class ShowController extends BaseController
{
    public function __invoke(District $district)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('admin.district.show',compact('district', 'repairs', 'contacts', 'ourServises'));

    }
}

