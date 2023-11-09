<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::all();
        return view('admin.views.testimonials.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views.testimonials.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial=new Testimonial();
        $testimonial->name=$request->name;
        $testimonial->profession=$request->profession;
        $testimonial->commment=$request->comment;

        $filename = str_replace(' ','',request('name'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('admin/testimonials/'),$finalname);

        $testimonial->img=$finalname;
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('status','testimonial-added')->with('message','Testimonial Added');
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
        $testimonial=Testimonial::findOrFail($id);
        return view('admin.views.testimonials.edit',compact('testimonial'));
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
        $oldTestimonial=Testimonial::findOrFail($id);

        $oldTestimonial->name=$request->name;
        $oldTestimonial->profession=$request->profession;
        $oldTestimonial->comment=$request->comment;


        $oldfile=public_path('admin/testimonials/'.$oldTestimonial->img);
        File::delete($oldfile);
        $filename = str_replace(' ','',request('name'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('admin/testimonials/'),$finalname);
        $oldTestimonial->img = $finalname;

        $oldTestimonial->save();
        return redirect()->route('testimonial.index')->with('status','testimonial-updated')->with('message','Testimonial Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $oldTestimonial=Testimonial::findOrFail($id);
        $oldfile=public_path('admin/destinations/'.$oldTestimonial->img);
        File::delete($oldfile);
        $oldTestimonial->delete();
        return redirect()->route('testimonial.index')->with('message','Testimonial Deleted');
    }
}
