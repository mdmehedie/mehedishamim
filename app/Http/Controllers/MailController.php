<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    

    public function sendmail(Request $request){


        $request->validate([
        'from'=>'required',
        'name'=>'required' ,
        'body'    =>'required'       
        ]);

$message = "Name : {$request->name} \nEmail : {$request->from} \nBody :  {$request->body}";

        Mail::raw($message, function ($message) use ($request) {
            $message->from("contact@mehedishamim.com", "WebSite");
            $message->to("mehedishamim@gmail.com");
            // $message->to("shuvo.punam@gmail.com");
            $message->subject('Mail from Website');
        });

        return redirect()->back();
    }
}
