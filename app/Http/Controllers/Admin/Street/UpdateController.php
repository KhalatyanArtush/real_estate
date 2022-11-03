<?php

namespace App\Http\Controllers\Admin\Street;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Street\UpdateRequest;
use App\Models\Street;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Street $street)
   {
       $data= $request->validated();
       $this->service->update($street, $data);

       return redirect()->route('admin.street.show',$street->id);

   }
}
