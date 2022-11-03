<?php

namespace App\Http\Controllers\Admin\OurServise;

use App\Http\Controllers\Controller;
use App\Models\OurServise;

class DestroyController extends BaseController
{
   public function __invoke(OurServise $ourServise)
   {
       $ourServise->delete();
       return redirect()->route('admin.ourServise.index');

   }
}
