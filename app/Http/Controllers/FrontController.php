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
        return view('front/views/about');
    }
    public function services()
    {
        return view('front/views/services');
    }
    public function packages()
    {
        return view('front/views/packages');
    }
    public function contact()
    {
        return view('front/views/contact');
    }
}
