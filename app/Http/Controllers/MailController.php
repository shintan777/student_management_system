<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function email(request $id) {
    
        // echo var_dump($id['id']);
        
        $to_name = 'shintu';
        $to_email = 'tanvi.shinde46@gmail.com';
        
        $d = array('id'=> $id['id']);
        
        Mail::send('emails.mail', $d, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('Shintan');
                $message->from('atsrpd@gmail.com','Shintan777');
                });
                $id = \Auth::user()->email;
                $res = \DB::select('select * from student where email = ?', [$id]);
                $notification = array(
                    'message' => 'I am a successful message!', 
                    'alert-type' => 'success'
                );
                Toastr::success('Leave successfully requested !','Success');
                //return Redirect::to('/home')->with($notification);
                return view('home',['res' => $res]);
                //return redirect()->route('home',['res' => $res])->wih($notification);
         
    }
   
}   