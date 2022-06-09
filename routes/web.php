<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    if (Auth::user()->is_admin == 1) {
        return redirect()->route('admin');
    } else {
        return redirect()->route('dashboard');
    }
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
Route::get('/admin/reizen', [AdminController::class, 'reizen'])->name('admin.reizen');

// TODO : Add users in AdminController
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');

// TODO : Add UserController
// TODO : Add ReviewController

Route::resource('reizen', TripController::class);
Route::resource('boeking', BookingController::class);

require __DIR__ . '/auth.php';
