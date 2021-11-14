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


        Mail::raw($request->body, function ($message) use ($request) {
            $message->from($request->from, $request->name);
            $message->to("shuvo.punam@gmail.com");
            $message->subject('Mail from Website');
        });

        return redirect()->back();
    }
}
