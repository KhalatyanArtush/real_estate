<?php

namespace App\Http\Controllers\Admin\OurServise;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class EditController extends BaseController
{
   public function __invoke(OurServise $ourServise)
   {
       $contacts = Contact::all();
       $repairs = Repair::all();

       return view('admin.ourServise.edit',compact('ourServise', 'repairs', 'contacts'));

   }
}
