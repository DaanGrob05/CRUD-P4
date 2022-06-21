<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RecensionController;

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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


// TODO : Add UserController
// TODO : Add ReviewController

Route::resource('reizen', TripController::class);


// Boekingen
Route::get('reizen/{trip_id}/boek', [BookingController::class, 'store'])->name('reizen.boek');
Route::resource('boeking', BookingController::class);

// Recensies
Route::get('reizen/{trip_id}/recensie', [RecensionController::class, 'create'])->name('reizen.recension');

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
Route::get('/admin/reizen', [AdminController::class, 'reizen'])->name('admin.reizen');
Route::get('/admin/reizen/{id}', [AdminController::class, 'reizen_show'])->name('admin.reizen.show');

// TODO : Add users in AdminController
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');

Route::get('/admin/boekingen', [AdminController::class, 'boekingen'])->name('admin.boekingen');
Route::get('/admin/boekingen/{id}', [AdminController::class, 'boekingen_show'])->name('admin.boekingen.show');
Route::delete('/admin/boekingen/{id}/verwijder', [AdminController::class, 'boekingen_delete'])->name('admin.boekingen.delete');


require __DIR__ . '/auth.php';
