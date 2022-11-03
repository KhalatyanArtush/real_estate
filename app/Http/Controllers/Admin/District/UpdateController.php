<?php

namespace App\Http\Controllers\Admin\District;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\District\UpdateRequest;
use App\Models\District;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, District $district)
   {
       $data= $request->validated();
       $this->service->update($district, $data);

       return redirect()->route('admin.district.show',$district->id);

   }
}
