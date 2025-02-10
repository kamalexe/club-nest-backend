<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Team;

class RegistrationController extends Controller
{
    public function registerIndividual(Competition $competition)
    {
        $participants = Participant::where('competition_id', $competition->id)->get();
        return view('event_details.register-individual', ['competition' => $competition, 'participants' => $participants]);
    }
    public function registerIndividualStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:participants,email',
            'phone' => 'required|string|max:20',
            'course' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'competition_id' => 'required|exists:competitions,id', // Validate event_id exists in competitions table
        ]);

        Participant::create($validated + ['participants_type' => 'individual']);
        return redirect()->back()->with('success', 'Individual registration successful!');
    }
    public function registerTeam(Competition $competition)
    {
        return view('event_details.register-team', ['competition' => $competition]);
    }

    public function registerTeamStore(Request $request)
    {
        $validated = $request->validate([
            'team_name' => 'required|string|max:255',
            'leader_name' => 'required|string|max:255',
            'leader_email' => 'required|email:teams,leader_email',
            'leader_phone' => 'required|string|max:20',
            'leader_semester' => 'required|string|max:255',
            'leader_branch' => 'required|string|max:255',
            'event_id' => 'required|exists:events,id',
        ]);


        $team = Team::create([
            'name' => $validated['team_name'],
            'leader_name' => $validated['leader_name'],
            'leader_email' => $validated['leader_email'],
            'leader_phone' => $validated['leader_phone'],
            'leader_semester' => $validated['leader_semester'],
            'leader_branch' => $validated['leader_branch'],
            'event_id' => $validated['event_id'],
        ]);

        return back()->with('success', 'Team registration successful!');
    }

    public function registerIndividualWordShop(Event $event)
    {
        dd("make Form for workshop Registration", $event->name);
        // !! TODO
        return view('event_details.register-individual', ['event' => $event]);
    }

    public function showCompetition(Event $event)
    {
        $competitions = Competition::where('event_id', $event->id)->paginate(10);
        return view('competition.competition-index', compact('competitions'));
    }
}
