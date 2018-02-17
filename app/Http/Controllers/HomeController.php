<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\MessagePostRequest;

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

    public function getProjects(){
        return view('pages.projects');
    }

    public function getBlog(){
        return view('pages.blog');
    }

    public function getWebDevelopment(){
        return view('pages.web_development');
    }

    public function emailMessage($message){

    	$data = [
    		'name' => $message->fname.' '.$message->lname, 
    		'email' => $message->email, 
    		'subject' => $message->subject, 
    		'text'=>$message->message
    		];

        try {
            Mail::send('email.message_email',$data, function ($m) use ($message) {
                
                $m->from($message->email, \URL::to(''));
                $m->to("sagautam5@gmail.com", "Sagar Gautam")->subject($message->fname.' '.$message->lname.' sent you message');   
            });
        } catch (Exception $e) {
            Mail::pretend($e); 
        }
    }

    public function postMessage(MessagePostRequest $request){

        $success = true;

        \DB::beginTransaction();
        
        try{
            $message = Message::create($request->except('_token'));
            $sent = $this->emailMessage($message);
            \DB::commit();
        }catch(Exception $e){
            $success = false;
            \DB::rollback();
        }
        
        if($success){
            return redirect()->to('/contact')->with('alert-success','Message sent Successfully');
        }else{
            return redirect()->to('/contact')->with('alert-danger','Message sending failed, Please try again');
        }
    }
}
