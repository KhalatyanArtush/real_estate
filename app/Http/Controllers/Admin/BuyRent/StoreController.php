<?php

namespace App\Http\Controllers\Admin\BuyRent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BuyRent\StoreRequest;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {
        $data = $request->validated();
        $this->service->store($data);

       return redirect()->route('admin.buyRent.index');
   }
}
