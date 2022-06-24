<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserActionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function bookings()
    {
        $bookings = DB::table('bookings')
            ->where('user_id', Auth::user()->id)
            ->get();
        // dd($bookings);
        return view('user.bookings')->with('bookings', $bookings);
    }

    public function booking($id)
    {
        $booking = DB::table('bookings')
            ->where('booking_id', $id)
            ->first();

        $trip = DB::table('trips')
            ->where('trip_id', $booking->trip_id)
            ->first();

        return view('user.booking')->with('booking', $booking)->with('trip', $trip);
    }

    public function booking_delete($id)
    {
        DB::table('bookings')
            ->where('booking_id', $id)
            ->delete();
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function update(Request $request)
    {
        DB::table('users')->where('id', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return to_route('profile');
    }
}
