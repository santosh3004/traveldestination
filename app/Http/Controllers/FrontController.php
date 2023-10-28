<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $destinations = \App\Models\Destination::all();
        $packages = \App\Models\Package::all();
        $guides = \App\Models\Guide::all();
        $testimonials = \App\Models\Testimonial::all();
        return view('front/views/home', compact('destinations', 'packages', 'guides', 'testimonials'));
    }
    public function about()
    {
        $guides = \App\Models\Guide::all();
        return view('front/views/about', compact('guides'));
    }
    public function services()
    {
        $testimonials = \App\Models\Testimonial::all();
        return view('front/views/services',compact('testimonials'));
    }
    public function packages()
    {

        $destinations = \App\Models\Destination::all();
        $packages = \App\Models\Package::all();
        return view('front/views/packages',compact('destinations','packages'));
    }
    public function contact()
    {
        return view('front/views/contact');
    }

    public function subscription(Request $request){
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
        $subscription->save();
        return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter');
    }
}
