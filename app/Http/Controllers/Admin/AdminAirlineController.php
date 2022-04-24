<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Airline;
use Illuminate\Http\Request;

class AdminAirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $airlines=Airline::all();
        return view('admin.airline.index', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.airline.create');
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
            'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $airline=Airline::create([
            'name'=>$validated['name']

        ]);
        if($logo=$request->file('logo')) {
            $airline->addMedia($logo)->toMediaCollection('logo');

        }
        return  redirect('admin/airline')
            ->with('status','Airline added successfully');

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
        $airline=Airline::findOrFail($id);
        return view('admin.airline.edit',compact('airline'));
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
            'name'=>'nullable|string|max:255',
            'logo'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        $airline=Airline::findOrFail($id);
        $airline->update([
            'name'=>$validated['name'],
        ]);
        if($files=$request->file('logo')) {
            if ( $airline->getMedia('logo')->count()>0){
                $airline->clearMediaCollection('logo');
                $airline->addMedia($files)->toMediaCollection('logo');
            }else{
                $airline->addMedia($files)->toMediaCollection('logo');
            }

        }
        return  redirect('admin/airline')
            ->with('status','Airline updated successfully');


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
        $airline=Airline::findOrFail($id);
        $airline->delete();
        return redirect()->back()
        ->with('status','Airline Successfully deleted');
    }
}
