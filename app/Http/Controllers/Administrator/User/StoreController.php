<?php

namespace App\Http\Controllers\Administrator\User;

use App\Http\Requests\Administrator\User\StoreRequest;
use function redirect;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        $this->service->store($data);


        return redirect()->route('administrator.user.index');
    }
}
