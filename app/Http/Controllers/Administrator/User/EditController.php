<?php

namespace App\Http\Controllers\Administrator\User;

use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use App\Models\User;
use function view;

class EditController extends BaseController
{
   public function __invoke(User $user)
   {
       $contacts = Contact::all();
       $ourServises = OurServise::all();
       $repairs = Repair::all();


       return view('administrator.user.edit',compact('user', 'repairs', 'contacts', 'ourServises'));

   }
}
