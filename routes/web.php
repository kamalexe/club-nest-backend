<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::view('/about', 'about.about')->name('about');
Route::view('/event-details', 'event_details.event-details')->name('event-details');
Route::view('/ticket-details', 'ticket_details.ticket-details')->name('ticket-details');
Route::view('/shows-events', 'shows_events.shows-events')->name('shows-events');
Route::view('/tickets', 'tickets.tickets')->name('tickets');
Route::view('/rent-venue', 'rent_venue.rent-venue')->name('rent-venue');

