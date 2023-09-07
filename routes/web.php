<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;

 use App\Livewire\Reservation\StepOne;
 use App\Livewire\Reservation\StepTwo;
 use App\Livewire\Reservation\StepThree;
 use App\Livewire\Reservation\StepFour;
 use App\Livewire\Home;

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


 
Route::get('/counter', Counter::class);

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/step-one', StepOne::class)->name('stepOne');
Route::get('/step-two', StepTwo::class)->name('stepTwo');
Route::get('/step-three', StepThree::class)->name('stepThree');
Route::get('/step-four', StepFour::class)->name('stepFour');
Route::get('/', Home::class)->name('home');
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
