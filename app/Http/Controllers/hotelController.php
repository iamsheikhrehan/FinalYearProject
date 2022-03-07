<?php

namespace App\Http\Controllers;

use App\Models\hotelbooking;
use Illuminate\Http\Request;

class hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotelbooking = hotelbooking::all();

        return view('Admin.manage_hotels', compact('hotelbooking'));
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
        $hotelbooking = new hotelbooking();

        $hotelbooking->hotel_name = request('Hotelname');
        $hotelbooking->rooms = request('Rooms');
        $hotelbooking->room_type = request('RoomType');
        $hotelbooking->location = request('Location');
        $hotelbooking->budget = request('Budget');
        $hotelbooking->no_of_rooms = request('no of rooms');
        $hotelbooking->status = request('Status');
        $hotelbooking->role = request('role');
        $hotelbooking->description = request('Description');
        // $uploadtrips->image = request('image');
        // $imageName = time() . '.' . $request->image->extension();

        // $request->image->move(public_path('images'), $imageName);
        // $hotelbooking->image = $imageName;
        $hotelbooking->save();

        return redirect('/manage_hotels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hotelbooking  $hotelbooking
     * @return \Illuminate\Http\Response
     */
    public function show(hotelbooking $hotelbooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotelbooking  $hotelbooking
     * @return \Illuminate\Http\Response
     */
    public function edit($hotel_id)
    {
        $edithotels = hotelbooking::find($hotel_id);
        return view('Admin.edit_manage_hotels', compact('edithotels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotelbooking  $hotelbooking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hotel_id)
    {
        $hotelbooking = hotelbooking::find($hotel_id);
        $hotelbooking->hotel_name = request('Hotelname');
        $hotelbooking->rooms = request('Rooms');
        $hotelbooking->room_type = request('RoomType');
        $hotelbooking->location = request('Location');
        $hotelbooking->budget = request('Budget');
        $hotelbooking->no_of_rooms = request('no of rooms');
        $hotelbooking->status = request('Status');
        $hotelbooking->role = request('role');
        $hotelbooking->description = request('Description');
        $hotelbooking->update();
        return redirect()->back()->with('status', 'Hotel Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotelbooking  $hotelbooking
     * @return \Illuminate\Http\Response
     */
    public function destroy($hotel_id)
    {
        $hotelbooking = new hotelbooking();
        $hotelbooking->where('hotel_id', '=', $hotel_id)->delete();
        return redirect('/manage_hotels');
    }
}
