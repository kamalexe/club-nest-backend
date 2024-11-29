<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Venue;
use App\Models\Club;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('date', 'desc')->take(10)->get();
        $clubs = Club::take(3)->get();
        $discoverMore = Event::orderBy('guests')->take(3)->get();
        $mostrecentEventUpcoming = Event::where('date', '>', now()) // Filter upcoming events
            ->orderBy('date', 'asc') // Order by nearest date first
            ->first();

        $mostrecentEventPrevious = Event::where('date', '<', now()) // Filter past events
            ->orderBy('date', 'desc') // Order by latest past event
            ->first();
        // dd($mostrecentEventPrevious);
        return view('home.home', ['mostRecentEvent' => $mostrecentEventPrevious ? $mostrecentEventPrevious : $mostrecentEventUpcoming, 'mostrecentEventUpcoming' => $mostrecentEventUpcoming, 'mostrecentEventPrevious' => $mostrecentEventPrevious, 'events' => $events, 'clubs' => $clubs, 'discoverMores' => $discoverMore]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
