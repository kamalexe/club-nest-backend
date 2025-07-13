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
        try {
            $validated = $request->validate([
                'name'            => 'required|string|max:255',
                'email'           => 'required|email|unique:participants,email',
                'phone'           => 'required|string|max:20',
                'course'          => 'required|string|max:255',
                'subject'         => 'required|string|max:255',
                'competition_id'  => 'required|exists:competitions,id',
            ]);

            $participantData = [
                'name'              => $validated['name'],
                'email'             => $validated['email'],
                'phone'             => $validated['phone'],
                'course'            => $validated['course'],
                'branch'            => $validated['subject'], // Using subject as branch
                'subject'           => $validated['subject'],
                'competition_id'    => $validated['competition_id'],
                'participants_type' => 'individual',
            ];


            Participant::create($participantData);

            return redirect()->back()->with('success', 'Individual registration successful!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Registration failed! Please check the form and try again.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Registration failed! An unexpected error occurred. Please try again later.');
        }
    }

    public function registerTeam(Competition $competition)
    {
        return view('event_details.register-team', ['competition' => $competition]);
    }

    public function registerTeamStore(Request $request)
    {
        try {
            $validated = $request->validate([
                'team_name'       => 'required|string|max:255',
                'leader_name'     => 'required|string|max:255',
                'leader_email'    => 'required|email|unique:teams,leader_email',
                'leader_phone'    => 'required|string|max:20',
                'leader_semester' => 'required|string|max:255',
                'leader_branch'   => 'required|string|max:255',
                'event_id'        => 'required|exists:events,id',
            ]);

            $teamData = [
                'name'            => $validated['team_name'],
                'leader_name'     => $validated['leader_name'],
                'leader_email'    => $validated['leader_email'],
                'leader_phone'    => $validated['leader_phone'],
                'leader_semester' => $validated['leader_semester'],
                'leader_branch'   => $validated['leader_branch'],
                'event_id'        => $validated['event_id'],
            ];

            Team::create($teamData);

            return back()->with('success', 'Team registration successful!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput()
                ->with('error', 'Team registration failed! Please check the form and try again.');
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Team registration failed! An unexpected error occurred. Please try again later.');
        }
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
