<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Mail;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactmessages=ContactMessage::all();
        return view('admin.views.mails.index',compact('contactmessages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message=ContactMessage::findOrFail($id);
        return view('admin.views.mails.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $message=ContactMessage::findOrFail($id);
        return view('admin.views.mails.insert',compact('message'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $message=ContactMessage::findOrFail($id);
        $mailData = [
            'title' => 'Travel Destination',
            'body' => $request->message,
            'subject' =>$message->subject.':Replied',
        ];

        Mail::to($message->email)->send(new TestMail($mailData));
        return redirect()->route('contactmessage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
