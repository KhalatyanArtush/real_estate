<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;

class ContactController extends Controller
{

public function __invoke(){
    $contacts = Contact::all();
    $address = Contact::first();
    $ourServises = OurServise::all();
    $repairs = Repair::all();

    return view('contacts',compact('contacts', 'repairs', 'address', 'ourServises'));

    }
}
