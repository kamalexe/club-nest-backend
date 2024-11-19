<?php

namespace Database\Factories;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    protected $model = Venue::class; // Ensure this line is present

    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'venues', true),
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'max_capacity' => $this->faker->numberBetween(50, 500),
            'location' => $this->faker->address,
            'ticket_price' => $this->faker->randomFloat(2, 10, 500),
        ];
    }
}
