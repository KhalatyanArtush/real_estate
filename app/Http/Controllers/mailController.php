<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function __invoke(){
        Mail::send(['text' => 'mail'], ['name' => 'Web Dev Blog'], function ($message){
           $message->to('khalatyan.artush@gmail.com', 'Web Dev Blog')->subject('test email');
           $message->from('khalatyan.artush@gmail.com', 'Web Dev Blog');
        });
    }
}
