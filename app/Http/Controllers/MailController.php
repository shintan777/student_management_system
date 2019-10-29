<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function email() {
    
        $to_name = 'atsrpd@gmail.com';
        $to_email = 'atsrpd@gmail.com';
        
        $data = array('name'=>"Ogbonna Vitalis(sender_name)");
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Laravel Test Mail');
        $message->from('atsrpd@gmail.com','Test Mail');
        });
    }

   
}   