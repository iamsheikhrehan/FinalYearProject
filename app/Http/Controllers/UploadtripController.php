<?php

namespace App\Http\Controllers;

use App\Models\Uploadtrips;
use Illuminate\Http\Request;

class UploadtripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploadtrips = Uploadtrips::all();

        return view('Admin.manage_trips', compact('uploadtrips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uploadtrips = new Uploadtrips();

        $uploadtrips->trip_name = request('tripname');
        $uploadtrips->pick_up_locations = request('pickuplocation');
        $uploadtrips->starting_date = request('startingdate');
        $uploadtrips->ending_date = request('endingdate');
        $uploadtrips->budget = request('budget');
        // $uploadtrips->image = request('image');
        $imageName = time() . '.' . $request->image->extension();

        $request->image->move(public_path('images'), $imageName);
        $uploadtrips->image = $imageName;
        $uploadtrips->save();

        return redirect('/manage_trips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($trip_id)
    {
        $edittrips = Uploadtrips::find($trip_id);
        return view('Admin.edit_manage_trips', compact('edittrips'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $trip_id)
    {
        $uploadtrips = Uploadtrips::find($trip_id);
        $uploadtrips->trip_name = request('tripname');
        $uploadtrips->pick_up_locations = request('pickuplocation');
        $uploadtrips->starting_date = request('startingdate');
        $uploadtrips->ending_date = request('endingdate');
        $uploadtrips->budget = request('budget');
        $uploadtrips->update();
        return redirect()->back()->with('status', 'Student Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($trip_id)
    {
        $uploadtrips = new Uploadtrips();
        $uploadtrips->where('trip_id', '=', $trip_id)->delete();
        return redirect('/manage_trips');
    }
}
