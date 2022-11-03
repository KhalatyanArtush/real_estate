<?php

namespace App\Http\Controllers\Admin\HomeSlider;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\HomeSlider;
use App\Models\OurServise;
use App\Models\Repair;

class EditController extends BaseController
{
   public function __invoke(HomeSlider $homeSlider)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('admin.homeSlider.edit',compact('homeSlider', 'repairs', 'contacts', 'ourServises'));

   }
}
