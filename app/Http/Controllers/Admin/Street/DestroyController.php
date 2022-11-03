<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use App\Models\Street;

class DestroyController extends BaseController
{
   public function __invoke(Street $street)
   {
       $street->delete();
       return redirect()->route('admin.street.index');

   }
}
