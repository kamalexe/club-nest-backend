<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Club;
use App\Models\Faculty;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('start_date', 'desc')->take(10)->get();
        $clubs = Club::take(3)->get();
        $discoverMores = Event::orderBy('guests')->take(3)->get();
        $mostRecentEventUpcoming = Event::where('start_date', '>', now())
            ->orderBy('start_date', 'asc')
            ->first();
        $mostRecentEventPrevious = Event::where('start_date', '<', now())
            ->orderBy('start_date', 'desc')
            ->first();
        $recentEvent = $mostRecentEventUpcoming ? $mostRecentEventUpcoming : $mostRecentEventPrevious;
        $isRecentEventEnded = $recentEvent->isEventEnded();
        return view('home.home', compact('clubs', 'events', 'recentEvent', 'discoverMores', 'isRecentEventEnded'));
    }

    public function about()
    {
        $faculties = Faculty::all();
        $events = Event::orderBy('start_date', 'desc')->take(5)->get();
        $mostRecentEventUpcoming = Event::where('start_date', '>', now())
            ->orderBy('start_date', 'asc')
            ->first();
        $mostRecentEventPrevious = Event::where('start_date', '<', now())
            ->orderBy('start_date', 'desc')
            ->first();
        $recentEvent = $mostRecentEventUpcoming ? $mostRecentEventUpcoming : $mostRecentEventPrevious;

        return view('about.about', compact('faculties', 'events', 'recentEvent'));
    }
    public function contact()
    {
        return view('contact.contact');
    }
}
