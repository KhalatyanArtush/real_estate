<?php

namespace App\Http\Controllers\Admin\BuildingType;

use App\Models\BuildingType;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class EditController extends BaseController
{
   public function __invoke(BuildingType $buildingType)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('admin.buildingType.edit',compact('buildingType', 'contacts', 'repairs', 'ourServises'));

   }
}
