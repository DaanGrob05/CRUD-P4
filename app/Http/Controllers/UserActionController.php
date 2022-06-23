<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
}
