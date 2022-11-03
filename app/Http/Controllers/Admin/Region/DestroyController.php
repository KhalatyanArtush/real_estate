<?php

namespace App\Http\Controllers\Admin\Region;

use App\Http\Controllers\Controller;
use App\Models\Region;

class DestroyController extends BaseController
{
   public function __invoke(Region $region)
   {
       $region->delete();
       return redirect()->route('admin.region.index');

   }
}
