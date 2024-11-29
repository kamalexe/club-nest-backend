<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ClubController extends Controller
{
    public function index()
    {
        $club = Club::paginate(10);
        return view('club.club-index', ['clubs' => $club]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function show(String $id)
    {
        $club = Club::find($id);
        $events = $club->events;
        $upCommingEvents = $events->where('date', '>', Carbon::now()->toDateString());
        $pastEvents = $events->where('date', '<=', Carbon::now()->toDateString());
        return view('shows_events.shows-events', compact('club', 'pastEvents', 'upCommingEvents'));
    }

    public function edit(Club $club)
    {
        //
    }
    public function update(Request $request, Club $club)
    {
        //
    }

    public function destroy(Club $club)
    {
        //
    }
}
