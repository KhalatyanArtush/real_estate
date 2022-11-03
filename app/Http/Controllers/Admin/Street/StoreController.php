<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Street\StoreRequest;
use App\Models\BuildingType;
use App\Models\Street;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {
//       $newImageName = time() . '.' . $request->img->extension();
//
//       $request->img->move(public_path('Home/images'), $newImageName);

       $data = $request->validated();
   $this->service->store($data);


       return redirect()->route('admin.street.index');
   }
}
