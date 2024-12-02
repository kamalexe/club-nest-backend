<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Venue;
use App\Models\Club;
use App\Models\Faculty;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('date', 'desc')->take(10)->get();
        $clubs = Club::take(3)->get();
        $discoverMores = Event::orderBy('guests')->take(3)->get();
        $mostRecentEventUpcoming = Event::where('date', '>', now())
            ->orderBy('date', 'asc')
            ->first();
        $mostRecentEventPrevious = Event::where('date', '<', now())
            ->orderBy('date', 'desc')
            ->first();
        $recentEvent = $mostRecentEventUpcoming ? $mostRecentEventUpcoming : $mostRecentEventPrevious;
        return view('home.home', compact('clubs', 'events', 'recentEvent', 'discoverMores'));
    }

    public function about()
    {
        $faculties = Faculty::all();
        $events = Event::orderBy('date', 'desc')->take(5)->get();

        return view('about.about', compact('faculties', 'events'));
    }
    public function contact()
    {
        return view('contact.contact');
    }
}
