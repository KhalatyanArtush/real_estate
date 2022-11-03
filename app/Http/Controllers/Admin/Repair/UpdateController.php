<?php

namespace App\Http\Controllers\Admin\Repair;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Region\UpdateRequest;
use App\Models\Repair;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Repair $repair)
   {
       $data= $request->validated();
       $this->service->update($repair, $data);

       return redirect()->route('admin.repair.show',$repair->id);

   }
}
