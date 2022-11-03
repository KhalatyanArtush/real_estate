<?php

namespace App\Http\Controllers\Admin\City;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\City\UpdateRequest;
use App\Models\City;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, City $city)
   {
       $data= $request->validated();
       $this->service->update($city, $data);

       return redirect()->route('admin.city.show',$city->id);

   }
}
