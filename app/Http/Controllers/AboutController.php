<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;

use App\Http\Requests\creatRequest;


class AboutController extends Controller
{

    public function __invoke()
    {

        $about = About::first();
        $address = Contact::first();
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();

        return view('about', compact('about', 'repairs', 'address', 'contacts', 'ourServises'));

    }
}
