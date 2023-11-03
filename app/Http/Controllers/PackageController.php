<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages=Package::all();
        return view('admin.views.packages.index',compact('packages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations=Destination::all();
        return view('admin.views.packages.insert',compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package=new Package();
        $package->destination_id=$request->destination;
        $package->persons=$request->person;
        $package->duration=$request->duration;
        $package->price=$request->price;
        $package->description=$request->description;

        $filename = str_replace(' ','',request('destination_id'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('admin/packages/'),$finalname);

        $package->img = $finalname;

        $package->save();
        return redirect()->route('package.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $package=Package::findOrfail($id)->first();
        $oldFile=public_path('admin/packages/'.$package->img);
        File::delete($oldFile);
        $package->delete();
        return redirect()->route('package.index');
    }
}
