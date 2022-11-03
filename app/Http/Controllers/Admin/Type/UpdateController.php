<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Type\UpdateRequest;
use App\Models\Type;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Type $type)
   {
       $data= $request->validated();
       $this->service->update($type, $data);

       return redirect()->route('admin.type.show',$type->id);

   }
}
