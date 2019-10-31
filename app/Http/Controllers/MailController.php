<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function email(Request $data) {
    
        $to_name = 'adi';
        $to_email = 'tanvi.shinde46@gmail.com';
        
        echo var_dump($data['lor']);
        $d = array('id'=> $data['lor']);
        
 
        Mail::send('emails.mail', $d, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('Shintan');
                $message->from('atsrpd@gmail.com','Shintan777');
                });
        return "sent mail";
    }
   
}   