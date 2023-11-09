<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Destination;
use App\Models\Guide;
use App\Models\Package;
use Illuminate\Http\Request;
use App\Models\SiteConfig;
use App\Models\Subscription;
use App\Models\Testimonial;

class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteconfigs=SiteConfig::all();
        return view('admin.views.siteconfigs.index',compact('siteconfigs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $siteconfig=SiteCOnfig::findOrFail($id);
        return view('admin.views.siteconfigs.edit',compact('siteconfig'));
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
        $siteconfig=SiteCOnfig::findOrFail($id);
        $siteconfig->sitekey=$request->sitekey;
        $siteconfig->sitevalue=$request->sitevalue;
        $siteconfig->save();
        return redirect()->route('siteconfig.index')->with('status','siteconfig-updated')->with('message','Company Information Updated');
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

    public function adminindex(){
        $subscriptions=count(Subscription::all());
        $messages=count(ContactMessage::all());
        $destinations=count(Destination::all());
        $packages=count(Package::all());
        $teams=count(Guide::all());
        $testimonials=count(Testimonial::all());
        return view('admin.views.index',compact('subscriptions','messages','destinations','packages','teams','testimonials'));
    }
}
