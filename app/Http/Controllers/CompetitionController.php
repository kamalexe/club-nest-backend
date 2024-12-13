<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Event;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{

    public function index()
    {
        $competitions = Competition::paginate(10);
        return view('competition.competition-index', compact('competitions'));
    }

    public function event_index(Event $event)
    {
        $events = Event::paginate(2);
        return view('competition.competition-index', compact('events'));
    }

    public function competitions(Event $event)
    {
        $competitions = $event->competitions()->paginate(10);
        return view('competition.competition-index', compact('competitions'));
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
