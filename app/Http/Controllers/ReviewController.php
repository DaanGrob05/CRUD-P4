<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Booking;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('isAdmin', ['only' => 'index']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($trip_id)
    {
        // Boeking zoeken op basis van de user
        $boeking = DB::table('bookings')->where('trip_id', $trip_id)->where('user_id', Auth::user()->id)->first();

        if ($boeking == null) {
            return to_route('reizen.show', $trip_id);
        }

        return view('reviews.create', ['trip_id' => $trip_id]);
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
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        DB::table('reviews')->insert([
            'title' => $request->title,
            'content' => $request->content,
            'trip_id' => $request->trip_id,
            'user_id' => Auth::user()->id,
            'validation' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return to_route('reizen.show', $request->trip_id)->with('success', 'Recensie toegevoegd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recension  $recension
     * @return \Illuminate\Http\Response
     */
    public function show(Recension $recension)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recension  $recension
     * @return \Illuminate\Http\Response
     */
    public function edit(Recension $recension)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recension  $recension
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recension $recension)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recension  $recension
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recension $recension)
    {
        //
    }
}
