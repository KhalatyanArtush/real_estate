<?php

namespace App\Http\Controllers\Admin\Village;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Village\UpdateRequest;
use App\Models\Village;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Village $village)
   {

       $data= $request->validated();
       $this->service->update($village, $data);


       return redirect()->route('admin.village.show',$village->id);

   }
}
