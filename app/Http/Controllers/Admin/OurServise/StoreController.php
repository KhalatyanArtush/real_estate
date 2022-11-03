<?php

namespace App\Http\Controllers\Admin\OurServise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\City\StoreRequest;
use App\Models\OurServise;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {

        $data = $request->validated();
        $this->service->store($data);

       return redirect()->route('admin.ourServise.index');
   }
}
