<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\City\StoreRequest;
use App\Models\City;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {

        $data = $request->validated();
        $this->service->store($data);

       return redirect()->route('admin.city.index');
   }
}
