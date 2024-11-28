<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ticket;
use App\Models\Event;

class TicketSeeder extends Seeder
{

    public function run(): void
    {
        $events = Event::all();

        foreach ($events as $event) {
            Ticket::factory(10)->create([
                'event_id' => $event->id
            ]);
        }
    }
}
