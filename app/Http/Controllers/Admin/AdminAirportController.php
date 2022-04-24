<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Airport;
use Illuminate\Http\Request;

class AdminAirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $airports=Airport::all();
        return view('admin.airports.index',compact('airports'));
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
        $validated=$request->validate([
            'name'=>'required|string|max:255',
            'abbreviation'=>'required|string|max:55',
            'location'=>'required|string|max:55',

        ]);
        $aiport=Airport::create([
            'name'=>$validated['name'],
            'abbreviation'=>$validated['abbreviation'],
            'location'=>$validated['location'],

        ]);
        return redirect()->back()
        ->with('status','Airport Successfully Created');
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
        $validated=$request->validate([
            'name'=>'required|string|max:255',
            'abbreviation'=>'required|string|max:55',
            'location'=>'required|string|max:55',

        ]);
        $airport=Airport::findOrFail($id);
        $airport->update([
            'name'=>$validated['name'],
            'abbreviation'=>$validated['abbreviation'],
            'location'=>$validated['location'],

        ]);
        return redirect()->back()
        ->with('status','Airport Successfully Updated');

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
        $airport=Airport::findOrFail($id);
        $airport->delete();
        return redirect()->back()
        ->with('status','Airport Successfully Deleted');

    }
}
