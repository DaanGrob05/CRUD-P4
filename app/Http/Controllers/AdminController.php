<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function reizen()
    {
        $trips = Trip::all();
        return view('admin.reizen')->with('trips', $trips);
    }

    public function reizen_show($id)
    {
        $trip = Trip::where('trip_id', $id)->first();
        return view('admin.show_reis')->with('trip', $trip);
    }

    public function users()
    {
        return view('admin.users');
    }

    // Bookings
    public function boekingen()
    {
        $boekingen = Booking::all();
        return view('admin.boekingen')->with('boekingen', $boekingen);
    }

    public function boekingen_show($id)
    {
        $boeking = Booking::where('booking_id', $id)->first();
        return view('admin.show_boeking')->with('boeking', $boeking);
    }

    public function boekingen_delete($id)
    {
        DB::table('bookings')->where('booking_id', $id)->delete();
        return redirect()->route('admin.boekingen')->with('success', 'Boeking is verwijderd');
    }

    // Einde Bookings


    // Reviews
    public function reviews()
    {
        $reviews = DB::table('reviews')->get();
        return view('admin.reviews')->with('reviews', $reviews);
    }

    public function reviews_show($id)
    {
        $review = DB::table('reviews')->where('id', $id)->first();
        return view('admin.show_review')->with('review', $review);
    }

    public function reviews_update(Request $request, $id)
    {
        DB::table('reviews')->where('id', $id)->update([
            'validation' => $request->validation,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.reviews')->with('success', 'Recensie is aangepast');
    }

    public function reviews_delete($id)
    {
        DB::table('reviews')->where('id', $id)->delete();
        return redirect()->route('admin.reviews')->with('success', 'Recensie is verwijderd');
    }
}
