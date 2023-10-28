<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class EmailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Test Email From AllPHPTricks.com',
            'body' => 'This is the body of test email.'
        ];

        Mail::to('msantoaubedi12@gmail.com')->send(new TestMail($mailData));

        return response([$status=200]);
    }
}
