<?php

namespace App\Http\Controllers\Admin\BuyRent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BuyRent\UpdateRequest;
use App\Models\BuyRent;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, BuyRent $buyRent)
   {
       $data= $request->validated();
       $this->service->update($buyRent, $data);

       return redirect()->route('admin.buyRent.show',$buyRent->id);

   }
}
