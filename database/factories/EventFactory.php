<?php

namespace Database\Factories;
use App\Models\Venue;
use App\Models\Event;
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
            'venue_id' => Venue::factory(), // Ensure venues exist or use a factory
            'image' => $this->faker->imageUrl(640, 480, 'events', true),
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'time' => $this->faker->time(),
            'guests' => $this->faker->numberBetween(10, 300),
        ];
    }
}
