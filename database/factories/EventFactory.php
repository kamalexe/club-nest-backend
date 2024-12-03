<?php

namespace Database\Factories;
use App\Models\Event;
use App\Models\Club;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'club_id' => Club::factory(),  // Use the Club factory directly
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'guests' => $this->faker->numberBetween(50, 200),
            'max_capacity' => $this->faker->numberBetween(100, 500),
            'location' => $this->faker->address,
            'ticket_price' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
