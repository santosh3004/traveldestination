<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guide;
use Illuminate\Support\Facades\File;
class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Guide::all();
        return view('admin.views.guides.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.views.guides.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team=new Guide();
        $team->name=$request->name;
        $team->designation=$request->designation;

        $filename = str_replace(' ','',request('name'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('admin/teams/'),$finalname);

        $team->img=$finalname;
        $team->save();
        return redirect()->route('team.index');
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
        $team=Guide::findOrFail($id);
        return view('admin.views.guides.edit',compact('team'));
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
        $guide = Guide::findOrFail($id);

        $oldfile=public_path('admin/teams/'.$guide->img);
        File::delete($oldfile);

        $guide->name=$request->name;
        $guide->designation=$request->designation;

        $filename = str_replace(' ','',request('name'));
        $ext = $request->file->extension();
        $finalname = $filename.'_'.time().'.'.$ext;
        $request->file->move(public_path('admin/teams/'),$finalname);

        $guide->img=$finalname;
        $guide->save();
        return redirect()->route('team.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guide = Guide::findOrFail($id);

        $oldfile=public_path('admin/teams/'.$guide->img);
        File::delete($oldfile);

        $guide->delete();
        return redirect()->route('team.index');

    }
}
