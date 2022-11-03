<?php

namespace App\Http\Controllers\Admin\Region;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Region;
use App\Models\Repair;

class ShowController extends BaseController
{
    public function __invoke(Region $region)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('admin.region.show',compact('region', 'repairs', 'contacts', 'ourServises'));

    }
}

