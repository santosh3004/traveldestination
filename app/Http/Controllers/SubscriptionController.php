<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions=Subscription::all();
        $destinations=Destination::all();
        return view('admin.views.subscriptions.index',compact('subscriptions','destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {$destinations=Destination::all();
        return view('admin.views.subscriptions.insert',compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'required|email|unique:subscriptions',
        ]);
        $subscription = new \App\Models\Subscription();
        if($request['name']){
            $subscription->name = $request->name;
        }
        $subscription->email = $request->email;
        if($request['destination']){
            $subscription->destination = $request->destination;

        }
        $mailData = [
            'title' => 'Travel Destination',
            'body' => 'Thanks for your subscription. You will get updates from now on',
            'subject' =>'Newletter Subscription - Travel Destination',
        ];
        Mail::to($request->email)->send(new TestMail($mailData));

        $subscription->save();
        return redirect()->route('subscription.index')->with('status','subscription-added')->with('message','Subscription Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subscription=Subscription::findOrFail($id);
        $destinations=Destination::all();
        return view('admin.views.subscriptions.edit',compact('subscription','destinations'));
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
        $subscription=Subscription::findOrFail($id);
        if($request['name']){$subscription->name=$request->name;}

        if($request['destination']){
        $subscription->destination=$request->destination;
        }

        $mailData = [
            'title' => 'Travel Destination',
            'body' => 'There an update on your subscription.',
            'subject' =>'Newletter Subscription Update - Travel Destination',
        ];
        Mail::to($subscription->email)->send(new TestMail($mailData));

        $subscription->save();
        return redirect()->route('subscription.index')->with('status','subscription-updated')->with('message','Subscription Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect()->route('subscription.index');
    }
}
