<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\Club;
use Carbon\Carbon;

class VenueController extends Controller
{
    public function index()
    {
        return view('shows_events.shows-events');
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

    // public function showVenueTicket(string $id)
    // {

    //     $club = Club::find($id);
    //     $events = $club->events;
    //     $upCommingEvents = $events->where('date', '>', Carbon::now()->toDateString());
    //     $pastEvents = $events->where('date', '<=', Carbon::now()->toDateString());
    //     return view('shows_events.shows-events', compact('club', 'pastEvents', 'upCommingEvents'));
    // }
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
