<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Club;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Volunteer>
 */
class VolunteerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'club_id' => Club::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'image' => '01JER2M7KZWQA9NF2YW7JFDM2Q.jpg',
            'role' => $this->faker->jobTitle,
        ];
    }
}
