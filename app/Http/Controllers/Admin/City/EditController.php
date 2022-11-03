<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\City;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class EditController extends BaseController
{
   public function __invoke(City $city)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('admin.city.edit',compact('city', 'contacts', 'repairs', 'ourServises'));

   }
}
