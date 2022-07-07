<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

use App\Http\Requests\creatRequest;


class AboutController extends Controller
{

public function __invoke(){

       $abouts = About::get();

       return view('about',compact('abouts'));

    }
}
