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

        return view('event_details.register-individual', ['competition' => $competition]);
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
            'message' => 'nullable|string',
        ]);

        Participant::create(array_merge($validated, ['participants_type' => 'individual']));

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
            'event_id' => 'required|exists:events,id',  // Corrected column name here
        ]);


        $team = Team::create([
            'name' => $validated['team_name'],
            'leader_name' => $validated['leader_name'],
            'leader_email' => $validated['leader_email'],
            'leader_phone' => $validated['leader_phone'],
            'leader_semester' => $validated['leader_semester'],
            'leader_branch' => $validated['leader_branch'],
            'event_id' => $validated['event_id'],  // Link team to event
        ]);

        return redirect()->back()->with('success', 'Team registration successful!');
    }
}
