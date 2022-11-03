<?php

namespace App\Http\Controllers\Admin\BuyRent;

use App\Http\Controllers\Controller;
use App\Models\BuyRent;

class DestroyController extends BaseController
{
   public function __invoke(BuyRent $buyRent)
   {
       $buyRent->delete();
       return redirect()->route('admin.buyRent.index');

   }
}
