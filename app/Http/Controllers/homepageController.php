<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    
    public function faq(){
        return view("faq");
    }

    public function contactUs(){
        return view("contact-us");
    }

    public function aboutUs(){
        return view("about-us");
    }

    public function ourServices(){
        return view("services");
    }
}
