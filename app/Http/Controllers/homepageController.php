<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    
    public function index(){
        return view('welcome');
    }
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




    public function gallery(){
        abort(404);
    }
    public function job_order(){
        abort(404);
    }
    public function advertising(){
        abort(404);
    }
    public function strategic_branding(){
        abort(404);
    }
    public function exclusive_gift_pack(){
        abort(404);
    }
    public function distintive_award(){
        abort(404);
    }
    public function prints(){
        abort(404);
    }
    public function digital_offset_machine(){
        abort(404);
    }
    public function website_developmen(){
        abort(404);
    }
    public function mobile_app_development(){
        abort(404);
    }



}
