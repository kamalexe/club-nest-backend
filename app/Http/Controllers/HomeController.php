<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $events = Event::orderBy('date', 'desc')->take(10)->get();
        $venues = Venue::orderBy('max_capacity')->take(3)->get();
        $discoverMore = Event::orderBy('guests')->take(3)->get();
        return view('home.home', ['events' => $events,'venues'=>$venues,'discoverMores'=>$discoverMore]);
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
