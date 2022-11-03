<?php

namespace App\Http\Controllers\Admin\District;

use App\Http\Controllers\Controller;
use App\Models\District;

class DestroyController extends BaseController
{
   public function __invoke(District $district)
   {
       $district->delete();
       return redirect()->route('admin.district.index');

   }
}
