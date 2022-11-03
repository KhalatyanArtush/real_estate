<?php

namespace App\Http\Controllers\Administrator\User;

use App\Http\Requests\Administrator\User\UpdateRequest;
use App\Models\User;
use function redirect;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, User $user)
   {

       $data= $request->validated();
       $this->service->update($user, $data);

       return redirect()->route('administrator.user.edit',$user->id);

   }
}
