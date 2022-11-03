<?php

namespace App\Http\Controllers\Admin\District;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\District\StoreRequest;
use App\Models\City;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {

        $data = $request->validated();
        $this->service->store($data);

       return redirect()->route('admin.district.index');
   }
}
