<?php

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

Route::get('/event-details', [EventController::class, 'index'])->name('event-details');
Route::resource('events', EventController::class);
Route::get('/shows-events', [VenueController::class, 'index'])->name('shows-events');
Route::get('/venue/{id}/events', [VenueController::class, 'showVenueTicket'])->name('showVenueTicket');
Route::get('/ticket-details/{id}', [TicketController::class, 'show'])->name('ticket-details');
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');
Route::view('/rent-venue', 'rent_venue.rent-venue')->name('rent-venue');
