<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;
use App\Models\ContactMessage;

class EmailController extends Controller
{
    public function index(Request $request)
    {

        $mailData = [
            'title' => 'Travel Destination',
            'body' => 'Thanks for your message. We will look forward to it.',
            'subject' =>$request->subject,
        ];

        Mail::to($request->email)->send(new TestMail($mailData));
        $contactmessage=new ContactMessage();
        $contactmessage->name=$request->name;
        $contactmessage->email=$request->email;
        $contactmessage->subject=$request->subject;
        $contactmessage->message=$request->message;
        $contactmessage->save();

        return response([$status=200]);
    }
}
