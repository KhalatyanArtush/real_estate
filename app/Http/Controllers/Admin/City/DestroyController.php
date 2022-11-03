<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use App\Models\City;

class DestroyController extends BaseController
{
   public function __invoke(City $city)
   {
       $city->delete();
       return redirect()->route('admin.city.index');

   }
}
