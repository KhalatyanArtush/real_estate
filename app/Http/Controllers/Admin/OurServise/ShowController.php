<?php

namespace App\Http\Controllers\Admin\OurServise;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class ShowController extends BaseController
{
    public function __invoke(OurServise $ourServise)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.ourServise.show',compact('ourServise',  'repairs', 'ourServises', 'contacts'));

    }
}

