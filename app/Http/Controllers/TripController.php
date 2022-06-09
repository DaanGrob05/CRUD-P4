<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::all();
        return view('reizen.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_trip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'price' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        DB::table('trips')->insert([
            'description' => $request->description,
            'startDate' => $request->start_date,
            'endDate' => $request->end_date,
            'hotel' => $request->hotel,
            'price' => $request->price,
            'image' => $request->image,
            'updated_at' => now(),
        ]);

        return to_route('admin.reizen');
    }

    /**
     * Display the specified resource.
     *
     * @param  Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip = Trip::where('trip_id', $id)->first();
        return view('reizen.show')->with('trip', $trip);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::where('trip_id', $id)->first();
        return view('admin.edit_trip')->with('trip', $trip);
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
        $request->validate([
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'price' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // TODO Update
        DB::table('trips')->where('trip_id', $id)->update([
            'description' => $request->description,
            'startDate' => $request->start_date,
            'endDate' => $request->end_date,
            'hotel' => $request->hotel,
            'price' => $request->price,
            'image' => $request->image,
            'updated_at' => now(),
        ]);

        return to_route('admin.reizen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('trips')->where('trip_id', $id)->delete();

        return to_route('admin.reizen');
    }
}
