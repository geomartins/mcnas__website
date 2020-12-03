<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact_history;
use Mail;
use Artesaos\SEOTools\Facades\SEOTools;

class homepageController extends Controller
{
    
    public function index(){

        SEOTools::setTitle('Incomparable Signature');
        SEOTools::setDescription('McNas is a creative branding agency in Lagos State, Nigeria, Africa. Our wide range of services covers advertisement, distinctive award, mobile application development, exclusive gift packaging and many more');

        return view('welcome');
    }
    public function faq(){
        
        SEOTools::setTitle('Frequently Asked Questions');
        SEOTools::setDescription('We have put together a list of our frequently asked questions by our customers about our service, payment and many more for you. Can\'t find an answer to your question? Feel free to contact us and we are also working on updating the list just to make sure we have an answer to your questions.');

        $datas = \App\Repositories\Pick::getFaq();
        return view("faq")->with('datas',$datas);
    }


    public function contactUs(){
        
        SEOTools::setTitle('Contact US');
        SEOTools::setDescription('Have any doubt or would like to know more about our wide range of services? You can visit us at our office or contact our phone number and you can make use of our contact form on the website.');

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
            'g-recaptcha-response' => 'required|captcha'
        
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

        SEOTools::setTitle('About US');
        SEOTools::setDescription('We are a branding company located in Lagos State, Nigeria. Our wide range of services include: Prints (Screen, Offset And Digital), web application design, exclusive gift packaging and many more.');

        return view("about-us");
    }

    public function ourServices(){

        SEOTools::setTitle('Our Services');
        SEOTools::setDescription('Our services include: Prints (Screen, Offset And Digital), web application development, exclusive gift packaging, mobile application design, Strategic Branding Products, Distinctive Award and advertisement.');

        return view("services");
    }

    public function book_appointment(){

        SEOTools::setTitle('Book An Appointment');
        SEOTools::setDescription('Would you like to book an appointment for any of our services? Kindly fill the form and submit your data on our book an appointment page. We will get in touch with you shortly.');

        return view('book_appointment');
    }


    public function gallery(){

        SEOTools::setTitle('Gallery');
        SEOTools::setDescription('We have put together some of our rendered services in a pictorial form to entertain you. Sit back, relax your mind as we take you on a tour through our galleries.');

        $datas = \App\Repositories\Pick::getGallery();

        return view('gallery')->with('datas',$datas);
    }

    public function job_order(){

        SEOTools::setTitle('Job Order');
        SEOTools::setDescription('Are you interested in enjoying any of our services and would like to make an order ahead of time? Kindly fill the form and submit your data on our job order page. We will get in touch with you shortly.');

        return view('job_order');
    }

    public function advertising(){

        SEOTools::setTitle('Advertising');
        SEOTools::setDescription('Have you been looking for how to communicate your idea, product or services to the public? Worry less, we are here to help you communicate, promote your commercial products or services or idea to the world.');

        return view('advertising');
    }

    public function strategic_branding(){

        SEOTools::setTitle('Strategic Branding');
        SEOTools::setDescription('Have you been wondering on how to create an identity that is unique and easily recognized in the public for your products or services? Let us help in distinguishing you from your competitors, build a loyal customer base for you and increase your brand awareness.');

        return view('strategic_branding');
    }
    public function exclusive_gift_pack(){

        SEOTools::setTitle('Exclusive Gift Pack');
        SEOTools::setDescription('Have you been looking for a way to surprise your loved ones in an affordable way? Let us make your wish come through with our affordable and exclusive gift packing package.');

        return view('exclusive_gift_pack');
    }

    public function distinctive_award(){

        SEOTools::setTitle('Distinctive Award');
        SEOTools::setDescription('This is my page description');

        return view('distinctive_award');
    }

    public function prints(){

        SEOTools::setTitle('Prints');
        SEOTools::setDescription('This is my page description');

        return view('prints');
    }

    public function digital_offset_machine(){

        SEOTools::setTitle('Digital Offset Machine');
        SEOTools::setDescription('This is my page description');

        return view('digital_offset_machine');
    }

    public function website_development(){

        SEOTools::setTitle('Website Development');
        SEOTools::setDescription('This is my page description');

        return view('website_development');
    }

    public function mobile_app_development(){

        SEOTools::setTitle('Mobile App Development');
        SEOTools::setDescription('This is my page description');

       return view('mobile_app_development');
    }



}
