<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations= new Destination;
        $destinations=$destinations->get();
        return view('admin.views.destinations.index',compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views.destinations.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destination=new Destination();
        $destination->name=$request->name;
        $destination->cities=$request->cities;

        $filename = str_replace(' ','',request('name'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('admin/destinations/'),$finalname);

        $destination->img = $finalname;

        $destination->save();
        return redirect()->route('destination.index')->with('status','destination-added')->with('message','Destination Added');
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
        $destination=new Destination;
        $destination=$destination->where('id',$id)->first();
        return view('admin.views.destinations.edit',compact('destination'));
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
        $oldDestination=Destination::find($id);
        $oldfile=public_path('admin/destinations/'.$oldDestination->img);
        File::delete($oldfile);
        $filename = str_replace(' ','',request('name'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('admin/destinations/'),$finalname);
        $oldDestination->img = $finalname;
        $oldDestination->name=$request->name;
        $oldDestination->cities=$request->cities;
        $oldDestination->save();
        return redirect()->route('destination.index')->with('status','destination-updated')->with('message','Destination Updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destination=new Destination;
        $destination=$destination->where('id',$id)->first();
        $oldfile=public_path('admin/destinations/'.$destination->img);
        File::delete($oldfile);
        $destination->delete();
        return redirect()->route('destination.index')->with('status','destination-deleted')->with('message','Destination Deleted');
    }
}
