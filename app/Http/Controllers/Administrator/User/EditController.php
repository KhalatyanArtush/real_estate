<?php

namespace App\Http\Controllers\Administrator\User;

use App\Models\User;
use function view;

class EditController extends BaseController
{
   public function __invoke(User $user)
   {
       return view('administrator.user.edit',compact('user'));

   }
}
