<?php

namespace App\Http\Controllers\Admin\Village;

use App\Http\Controllers\Controller;
use App\Models\Village;

class DestroyController extends BaseController
{
   public function __invoke(Village $village)
   {
       $village->delete();
       return redirect()->route('admin.village.index');

   }
}
