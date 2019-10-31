<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function email(request $id) {
    
        echo var_dump($id['id']);
        
        $to_name = 'adi';
        $to_email = 'adityasrivastava301199@gmail.com';
        
        $d = array('id'=> $id['id']);
        
        Mail::send('emails.mail', $d, function($message) use ($to_name, $to_email) {
                $message->to($to_email, $to_name)
                ->subject('Shintan');
                $message->from('atsrpd@gmail.com','Shintan777');
                });
        return "sent mail";
    }
   
}   