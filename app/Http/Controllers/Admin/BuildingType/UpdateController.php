<?php

namespace App\Http\Controllers\Admin\BuildingType;

use App\Http\Requests\Admin\BuildingType\UpdateRequest;
use App\Models\BuildingType;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, BuildingType $buildingType)
   {
       $data= $request->validated();
       $this->service->update($buildingType, $data);
       return redirect()->route('admin.buildingType.show',$buildingType->id);

   }
}
