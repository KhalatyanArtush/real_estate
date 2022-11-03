<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Models\Type;

class DestroyController extends BaseController
{
   public function __invoke(Type $type)
   {
       $type->delete();
       return redirect()->route('admin.type.index');

   }
}
