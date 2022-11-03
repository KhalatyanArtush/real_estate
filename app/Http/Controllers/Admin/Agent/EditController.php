<?php

namespace App\Http\Controllers\Admin\Agent;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Agent;
use App\Models\Contact;
use App\Models\OurServise;
use App\Models\Repair;
use Illuminate\Http\Request;




class EditController extends BaseController
{
    public function __invoke(Agent $agent)
    {
        $contacts = Contact::all();
        $ourServises = OurServise::all();
        $repairs = Repair::all();


        return view('admin.agent.edit',compact('agent', 'contacts', 'ourServises' ,'repairs'));
    }
}

