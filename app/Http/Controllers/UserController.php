<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Index
    public function Index()
    {
        return view('frontend.index');
    }
    //
    public function About(){
        return view('frontend.about.about_us');
    }
}
