<?php

namespace Database\Factories;

use App\EventType;
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
            'image' => '01JER2M7KZWQA9NF2YW7JFDM2Q.jpg',
            'name' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'start_date' => $this->faker->dateTime(),
            'duration' => 627,
            'event_type' => $this->faker->randomElement(EventType::cases())->value,
            'guests' => $this->faker->numberBetween(50, 200),
            'max_capacity' => $this->faker->numberBetween(100, 500),
            'location' => $this->faker->address,
        ];
    }
}
