<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use App\Models\Street;

class EditController extends BaseController
{
   public function __invoke(Street $street)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('admin.street.edit',compact('street', 'repairs', 'contacts', 'ourServises'));

   }
}
