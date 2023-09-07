<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Reservation\StepOne;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/stepOne', StepOne::class)->name('stepOne');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/rooms', function () {
    return view('rooms');
});
Route::get('/info', function () {
    return view('your-info');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/complete', function () {
    return view('complete');
});
