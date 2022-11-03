<?php

namespace App\Http\Controllers\Admin\Village;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Village\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);


        return redirect()->route('admin.village.index');
    }
}
