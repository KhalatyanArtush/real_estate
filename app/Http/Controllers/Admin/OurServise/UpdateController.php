<?php

namespace App\Http\Controllers\Admin\OurServise;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\City\UpdateRequest;
use App\Models\OurServise;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, OurServise $ourServise)
   {
       $data= $request->validated();
       $this->service->update($ourServise, $data);

       return redirect()->route('admin.ourServise.show',$ourServise->id);

   }
}
