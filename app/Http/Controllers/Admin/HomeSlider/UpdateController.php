<?php

namespace App\Http\Controllers\Admin\HomeSlider;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeSlider\UpdateRequest;
use App\Models\HomeSlider;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, HomeSlider $homeSlider)
   {
       $data= $request->validated();
       $this->service->update($homeSlider, $data);

       return redirect()->route('admin.homeSlider.show',$homeSlider->id);

   }
}
