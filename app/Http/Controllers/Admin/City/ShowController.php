<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\City;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class ShowController extends BaseController
{
    public function __invoke(City $city)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('admin.city.show',compact('city', 'repairs', 'contacts', 'ourServises'));

    }
}

