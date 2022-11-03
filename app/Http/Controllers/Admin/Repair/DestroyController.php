<?php

namespace App\Http\Controllers\Admin\Repair;

use App\Http\Controllers\Controller;
use App\Models\Repair;

class DestroyController extends BaseController
{
   public function __invoke(Repair $repair)
   {
       $repair->delete();
       return redirect()->route('admin.repair.index');

   }
}
