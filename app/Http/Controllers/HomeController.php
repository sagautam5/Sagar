<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


use App\Message;

class HomeController extends Controller
{
    //

    public function getHome(){
    	return view('pages.home');
    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getServices(){
        return view('pages.services');
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function getWebDevelopment(){
        return view('pages.web_development');
    }

    public function emailMessage($message){

    	$data = [
    		'name' => $message->name, 
    		'email' => $message->email, 
    		'subject' => $message->subject, 
    		'text'=>$message->text
    		];
        try {
            Mail::send('email.message_email',$data, function ($m) use ($message) {
                
                $m->from($message->email, \URL::to(''));
                $m->to("sagautam5@gmail.com", "Sagar Gautam")->subject($message->name.' sent you message');   
            });
        } catch (Exception $e) {
            Mail::pretend($e); 
        }
    }

    public function postMessage(Request $request){

    	$message = new Message();
    	$message->name = $request->name;
    	$message->email =  $request->email;
    	$message->subject = $request->subject;
    	$message->text = $request->message;
    	$saved = $message->save();
   		$sent = $this->emailMessage($message);

    	return response()->json(array('success' => $saved));
    }
}
