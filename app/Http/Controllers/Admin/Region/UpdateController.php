<?php

namespace App\Http\Controllers\Admin\Region;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Region\UpdateRequest;
use App\Models\Region;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Region $region)
   {
       $data= $request->validated();
       $this->service->update($region, $data);

       return redirect()->route('admin.region.show',$region->id);

   }
}
