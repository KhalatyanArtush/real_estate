<?php

namespace App\Http\Controllers\Admin\HomeSlider;

use App\Http\Controllers\Controller;
use App\Models\HomeSlider;

class DestroyController extends BaseController
{
   public function __invoke(HomeSlider $homeSlider)
   {
       $homeSlider->delete();
       return redirect()->route('admin.home.index');

   }
}
