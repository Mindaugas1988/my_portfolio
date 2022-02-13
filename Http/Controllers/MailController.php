<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function mail(MailRequest $request){
    	 if($request->ajax())
        {
          $mail = $request->email;
          $name = $request->name;
          $message1 =$request->message;

           Mail::send('emails.send', ['title' => $name, 'content' => $message1,'sender' =>$mail], function ($message) use($mail,$name)
           {

            $message->from($mail,$name);

            $message->to('m.virbickis88@gmail.com')->subject('Uzsakymas');

            $message->sender($mail, $name);

            $message->replyTo($mail, $name = null);

            $message->cc($mail, $name = null);
            $message->bcc($mail, $name = null);

            });


                  
          return response()->json(true) ;
        }
    }
}
