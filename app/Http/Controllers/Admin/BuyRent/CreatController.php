<?php

namespace App\Http\Controllers\Admin\BuyRent;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FileRequest;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Post;
use App\Models\Repair;
use Illuminate\Http\Request;

use App\Models\BuildingType;

use App\Http\Requests\creatRequest;


class CreatController extends Controller
{
    public function __invoke()
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('admin.buyRent.create', compact('contacts', 'repairs', 'ourServises'));
    }
}

