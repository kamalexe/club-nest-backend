<?php

use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\TicketController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::view('/about', 'about.about')->name('about');
Route::view('/contactus', 'contactus.contactus')->name('contactus');
Route::resource('events', EventController::class);
Route::resource('club', ClubController::class);
