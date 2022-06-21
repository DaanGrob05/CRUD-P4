<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Booking;
use App\Models\Recension;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RecensionController extends Controller
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
            return redirect('/');
        }

        return ('success');
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
