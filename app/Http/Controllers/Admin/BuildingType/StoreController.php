<?php

namespace App\Http\Controllers\Admin\BuildingType;

use App\Http\Requests\Admin\BuildingType\StoreRequest;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {
//       $newImageName = time() . '.' . $request->img->extension();
//
//       $request->img->move(public_path('Home/images'), $newImageName);

       $data = $request->validated();
   $this->service->store($data);


       return redirect()->route('admin.buildingType.index');
   }
}
