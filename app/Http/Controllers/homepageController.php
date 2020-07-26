<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_history;
use Mail;
class homepageController extends Controller
{
    
    public function index(){
        return view('welcome');
    }
    public function faq(){
        $datas = \App\Repositories\Pick::getFaq();
        return view("faq")->with('datas',$datas);
    }


    public function contactUs(){
        return view("contact-us");
    }

    public function contactUsConfirm(){


         /* Validate the input */
         $this->validate(request(), array(
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:9',
            'subject' => 'required',
            'message' => 'required',
        
        ));

        // return request()->all();

      
        //submit to the database
        $tola = new contact_history();
        $tola->fullname = request()->fullname;
        $tola->email = request()->email;
        $tola->phone = request()->phone;
        $tola->subject = request()->subject;
        $tola->message = request()->message;
        $tola->save();
      
        
          //save all request into data
        $data = array (
            'fullname' => request()->fullname,
            'email' => request()->email,
            'phone' => request()->phone,
            'subject' => request()->subject,
            'description' => request()->message,
            'admin_email' => 'support@mcnas.com.ng',
            'created_at' => $tola->created_at,
            'id' => $tola->id,

        );

        //return $data;

        //send mail to admin
        Mail::send('emails.contact_notification',$data, function($m) use($data){
            $m->to($data['admin_email'])->subject('Contact us Notification #'.$data['id']);
            // $m->replyTo($data['admin_email'], 'Support Team')
        });

        //return back
        session()->flash('success_report','Contact Form submitted successfully!!');
        return back();
    }

    public function aboutUs(){
        return view("about-us");
    }

    public function ourServices(){
        return view("services");
    }




    public function gallery(){
        $datas = \App\Repositories\Pick::getGallery();

        return view('gallery')->with('datas',$datas);
    }
    public function job_order(){
        abort(404);
    }
    public function advertising(){
        return view('advertising');
    }
    public function strategic_branding(){
        return view('strategic_branding');
    }
    public function exclusive_gift_pack(){
        return view('exclusive_gift_pack');
    }
    public function distinctive_award(){
        return view('distinctive_award');
    }
    public function prints(){
        return view('prints');
    }
    public function digital_offset_machine(){
        return view('digital_offset_machine');
    }
    public function website_development(){
        return view('website_development');
    }
    public function mobile_app_development(){
       return view('mobile_app_development');
    }



}
