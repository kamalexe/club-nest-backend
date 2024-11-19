<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;



class TicketFactory extends Factory
{
    protected $model = Ticket::class;
    public function definition(): array
    {
        $ticketsAvailable = $this->faker->numberBetween(50, 500);
        $ticketsSold = $this->faker->numberBetween(0, $ticketsAvailable);

        return [
            'event_id' => Event::factory(),
            'price' => $this->faker->randomFloat(2, 10, 500),
            'tickets_sold' => $ticketsSold,
            'tickets_available' => $ticketsAvailable,
        ];
    }
}
