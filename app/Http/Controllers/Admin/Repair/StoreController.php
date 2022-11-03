<?php

namespace App\Http\Controllers\Admin\Repair;

use App\Http\Requests\Admin\Region\StoreRequest;
use App\Models\Repair;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
//       $newImageName = time() . '.' . $request->img->extension();
//
//       $request->img->move(public_path('Home/images'), $newImageName);

        $data = $request->validated();
        $this->service->store($data);


        return redirect()->route('admin.repair.index');
    }
}
