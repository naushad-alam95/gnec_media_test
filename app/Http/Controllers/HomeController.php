<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Page;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public $user_name;
    public $user_email;
    public $user_mobile;
    public $user_msg;


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about(Request $request)
    {
        
            $data = Page::where('slug',request()->path())->first();
            
            return view('pages')->with('data',$data);
        
    
    }

    public function contact(Request $request)
    {
        
            $data = Page::where('slug',request()->path())->first();
            
            return view('pages')->with('data',$data);
        
    
    }

    public function contactUs(Request $request)
    {
        $input = $request->all();
        $name = $request->get('name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $msg = $request->get('message');

        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->mobile = $mobile;
        $contact->message = $msg;
        $contact->save();

        if($contact){
            $this->user_name = $name;
            $this->user_email = $email;
            $this->user_mobile = $mobile;
            $this->user_msg = $msg;

            $subject = 'Contact Us Mail';

            Mail::send('emails.contactAdmin',
            array(

                'user_name' => $name,
                'user_email' => $email,
                'user_mobile' => $mobile,
                'user_msg' => $msg,
            ), function($message) use($subject)
            {
                $message->to('naushadalamn4@gmail.com',$this->user_name)->subject($subject);
            });

            $subject = 'Thank you for Contacting Us ';
            Mail::send('emails.contactUser',
                array(

                    'user_name' => $name,                
                ), function($message) use($subject)
                {
                    $message->from('naushadalamn4@gmail.com', 'Contact Us | GNEC Media');
                    $message->to($this->user_email, $this->user_name)->subject($subject);
                });
            return back()->with('success','Mail send successfully!');
        }else{
            return back()->with('error','Something went wrong!');
            
        }        
    }
}
