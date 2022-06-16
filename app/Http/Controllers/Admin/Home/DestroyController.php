<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use App\Models\Home;

class DestroyController extends BaseController
{
   public function __invoke(Home $homes)
   {
       $homes->delete();
       return redirect()->route('admin.home.index');

   }
}
