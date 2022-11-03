<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Agent;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;
use App\Http\Requests\creatRequest;


class AgentController extends Controller
{

public function __invoke(){

    $agents = Agent::get();
    $contacts = Contact::all();
    $ourServises = OurServise::all();
    $repairs = Repair::all();

    return view('agents',compact('agents', 'repairs', 'contacts', 'ourServises'));
//        return view('/agents');

    }
}
