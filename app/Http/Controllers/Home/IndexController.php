<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;

use App\Models\Home;
use App\Models\HomeSlider;


class IndexController extends Controller
{
    public function __invoke()
    {
        $homes = Home::all();
        $homeSliders = HomeSlider::all();
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('index', compact('homes', 'repairs', 'homeSliders', 'contacts', 'ourServises'));

    }
}

