<?php

use App\Http\Controllers\contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserActionController;

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

Route::get('/home', function () {
    if (Auth::user()->is_admin == 1) {
        return redirect()->route('admin');
    } else {
        return redirect()->route('profile');
    }
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/terms', function () {
    return view('terms');
})->name('terms');

Route::resource('contact', contact::class);

Route::resource('reizen', TripController::class);

// User Functies
Route::get('profile', [UserActionController::class, 'dashboard'])->name('profile');
Route::get('profile/bookings', [UserActionController::class, 'bookings'])->name('profile.bookings');
Route::get('profile/bookings/{id}', [UserActionController::class, 'booking'])->name('profile.bookings.show');
Route::delete('profile/bookings/{id}', [UserActionController::class, 'deleteBooking'])->name('profile.bookings.delete');
Route::get('profile/edit', [UserActionController::class, 'edit'])->name('profile.edit');
Route::post('profile/update', [UserActionController::class, 'update'])->name('profile.update');


// Boekingen
Route::get('reizen/{trip_id}/boek', [BookingController::class, 'store'])->name('reizen.boek');
Route::resource('boeking', BookingController::class);

// Reviews
Route::get('reizen/{trip_id}/recensie', [ReviewController::class, 'create'])->name('reizen.review');
Route::post('reizen/{trip_id}/recensie', [ReviewController::class, 'store'])->name('reizen.review.store');


// ADMIN FUNCTIONALITEIT

// Reizen
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
Route::get('/admin/reizen', [AdminController::class, 'reizen'])->name('admin.reizen');
Route::get('/admin/reizen/{id}', [AdminController::class, 'reizen_show'])->name('admin.reizen.show');

// TODO : Add users in AdminController
// Gebruikers
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');

// Bookings  
Route::get('/admin/boekingen', [AdminController::class, 'boekingen'])->name('admin.boekingen');
Route::get('/admin/boekingen/{id}', [AdminController::class, 'boekingen_show'])->name('admin.boekingen.show');
Route::delete('/admin/boekingen/{id}/verwijder', [AdminController::class, 'boekingen_delete'])->name('admin.boekingen.delete');

// Reviews
Route::get('/admin/reviews', [AdminController::class, 'reviews'])->name('admin.reviews');
Route::get('admin.reviews/{id}', [AdminController::class, 'reviews_show'])->name('admin.reviews.show');
Route::put('admin.reviews/{id}', [AdminController::class, 'reviews_update'])->name('admin.reviews.update');
Route::delete('admin.reviews/{id}', [AdminController::class, 'reviews_delete'])->name('admin.reviews.delete');

// Users
Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/users/{id}', [AdminController::class, 'users_show'])->name('admin.users.show');
Route::get('/admin/users/{id}/edit', [AdminController::class, 'users_edit'])->name('admin.users.edit');
Route::put('/admin/users/{id}', [AdminController::class, 'users_update'])->name('admin.users.update');
Route::delete('/admin/users/{id}', [AdminController::class, 'users_delete'])->name('admin.users.delete');

// Contact Messages
Route::get('/admin/messages', [AdminController::class, 'messages'])->name('admin.messages');
Route::get('/admin/messages/{id}', [AdminController::class, 'messages_show'])->name('admin.messages.show');
Route::delete('/admin/messages/{id}', [AdminController::class, 'messages_delete'])->name('admin.messages.delete');


require __DIR__ . '/auth.php';
