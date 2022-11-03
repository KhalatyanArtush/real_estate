<?php

namespace App\Http\Controllers\Admin\BuyRent;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\BuyRent;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;

class EditController extends BaseController
{
   public function __invoke(BuyRent $buyRent)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();

       return view('admin.buyRent.edit',compact('buyRent', 'contacts', 'ourServises', 'repairs'));

   }
}
