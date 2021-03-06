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
    public function index(Request $request)
    {
        $name = $request->name;
        $start = $request->startDate;
        $end = $request->endDate;

        // Bepaal op basis van datums welke query word ingevoerd.
        if ($start && $end) {
            // Als er ook een naam is meegegeven zoek dat op, anders alleen datum
            if ($name) {
                $trips = Trip::whereBetween('startDate', [$start, $end])->whereBetween('endDate', [$start, $end])->where('trip_name', 'like', '%' . $name . '%')->get();
            } else {
                $trips = Trip::whereBetween('startDate', [$start, $end])->whereBetween('endDate', [$start, $end])->get();
            }
        } else {
            // Als er geen datum is opgegeven, zoek dan alleen op naam
            $trips = Trip::where([
                ['trip_name', 'like', '%' . $name . '%'],
            ])->get();
        }

        return view('reizen.index')->with('trips', $trips);
    }

    public function ajaxSearch(Request $request)
    {
        $trips = Trip::where('trip_name', 'like', '%' . $request->get('name') . '%')->get();
        return json_encode($trips);


        // // $request->get('name');
        // if ($request->has('ajax')) {
        //     $trips = Trip::where('trip_name', 'like', '%' . $request->get('name') . '%')->get();
        //     return json_encode($trips);
        // } else {
        //     $trips = Trip::all();
        // }
        // // $trips = Trip::where('trip_name', 'like', '%' . $request->get('name') . '%')->get();
        // // return json_encode($trips);
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
            'trip_name' => 'required|string|max:255',
            'start_location' => 'required|string|max:255',
            'type_of_trip' => 'required|integer',
            'destination' => 'required|string|max:255',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'price' => 'required|numeric',
            'small_description' => 'required|string|max:255',
            'full_description' => 'required|string|max:255',
            'hotel' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $image = '/storage/' . $path;
        } else {
            $image = null;
        }



        DB::table('trips')->insert([
            'trip_name' => $request->trip_name,
            'start_location' => $request->start_location,
            'type_of_trip' => $request->type_of_trip,
            'destination' => $request->destination,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'price' => $request->price,
            'small_description' => $request->small_description,
            'full_description' => $request->full_description,
            'hotel' => $request->hotel,
            'image' => $image,
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
        $reviews = DB::table('reviews')->where([
            ['trip_id', $id],
            ['validation', 1],
        ])->get();

        return view('reizen.show')->with('trip', $trip)->with('reviews', $reviews);
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
            'trip_name' => 'required|string|max:255',
            'start_location' => 'required|string|max:255',
            'type_of_trip' => 'required|integer',
            'destination' => 'required|string|max:255',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'price' => 'required|numeric',
            'small_description' => 'required|string|max:255',
            'full_description' => 'required|string|max:255',
            'hotel' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        if ($request->image) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('images', $fileName, 'public');
            $image = '/storage/' . $path;
        } else {
            $oldImage = Trip::where('trip_id', $id)->first()->image;
            $image = $oldImage;
        }

        DB::table('trips')->where('trip_id', $id)->update([
            'trip_name' => $request->trip_name,
            'start_location' => $request->start_location,
            'type_of_trip' => $request->type_of_trip,
            'destination' => $request->destination,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'price' => $request->price,
            'small_description' => $request->small_description,
            'full_description' => $request->full_description,
            'hotel' => $request->hotel,
            'image' => $image,
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
