<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

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
}
