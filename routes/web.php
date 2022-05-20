<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
});

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

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin');
// TODO : Add reizen in AdminController
Route::get('/admin/reizen', [AdminController::class, 'reizen'])->name('admin.reizen');
Route::get('/admin/reizen/{id}', [AdminController::class, 'reizen_detail'])->name('admin.reizen.detail');
Route::get('/admin/reizen/{id}/edit', [AdminController::class, 'reizen_edit'])->name('admin.reizen.edit');
Route::post('/admin/reizen/{id}/edit', [AdminController::class, 'reizen_update'])->name('admin.reizen.update');
Route::get('/admin/reizen/{id}/delete', [AdminController::class, 'reizen_delete'])->name('admin.reizen.delete');

// TODO : Add ReisController 
// TODO : Add ReviewController

require __DIR__ . '/auth.php';
