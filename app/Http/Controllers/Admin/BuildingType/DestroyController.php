<?php

namespace App\Http\Controllers\Admin\BuildingType;

use App\Http\Controllers\Controller;
use App\Models\BuildingType;

class DestroyController extends BaseController
{
   public function __invoke(BuildingType $buildingType)
   {
       $buildingType->delete();
       return redirect()->route('admin.buildingType.index');

   }
}
