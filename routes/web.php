<?php

use App\Http\Controllers\ClubController;
use App\Http\Controllers\CompetitionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::resource('events', EventController::class);
Route::resource('club', ClubController::class);

use App\Http\Controllers\RegistrationController;

Route::get('/competition', [CompetitionController::class, 'index'])->name('competition.index');
Route::get('events/{event}/competitions', [CompetitionController::class, 'competitions'])->name('events.competition');


Route::get('/register-individual', [RegistrationController::class, 'registerIndividual'])->name('register.individual');
Route::get('/register-team', [RegistrationController::class, 'registerTeam'])->name('register.team');

Route::post('/register-individual', [RegistrationController::class, 'registerIndividualStore'])->name('register.individual');
Route::post('/register-team', [RegistrationController::class, 'registerTeamStore'])->name('register.team');
