<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function email(Request $data) {
    
        $to_name = 'atsrpd';
        $to_email = 'adityasrivastava301199@gmail.com';
        
        echo var_dump($id['lor']);
        $data = array('id'=> $id['lor']);
        

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from('atsrpd@gmail.com','Test Mail');
        });
        return "sent mail";
    }
   
}   