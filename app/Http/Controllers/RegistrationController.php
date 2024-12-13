<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Team;

class RegistrationController extends Controller
{
    public function registerIndividual(Request $request)
    {

        return view('event_details.register-individual');
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
    public function registerTeam(Request $request)
    {
        return view('event_details.register-team');
    }

    public function registerTeamStore(Request $request)
    {
        $validated = $request->validate([
            'team_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teams,email',
            'phone' => 'required|string|max:20',
            'course' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        $team = Team::create([
            'name' => $validated['team_name'],
        ]);

        // Add additional logic for linking participants to teams, if required.

        return redirect()->back()->with('success', 'Team registration successful!');
    }
}
