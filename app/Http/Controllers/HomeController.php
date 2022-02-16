<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function contact(Request $request){
        mail('info@rrylord.com','New Mail Request from '.$request->input('your-name'),$request->input('message'),'From: '.$request->input('email'));
        return view('contact');
    }
}
