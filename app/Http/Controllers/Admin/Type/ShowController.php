<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use App\Models\Type;

class ShowController extends BaseController
{
    public function __invoke(Type $type)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('admin.type.show',compact('type', 'repairs', 'contacts', 'ourServises'));

    }
}

