<?php

namespace Database\Factories;

use App\Branch;
use App\Models\Event;
use App\Semester;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company(),
            'leader_name' => $this->faker->name(),
            'leader_email' => $this->faker->unique()->safeEmail(),
            'leader_phone' => $this->faker->phoneNumber(),
            'leader_semester' => $this->faker->randomElement(Semester::cases())->value,
            'leader_branch' => $this->faker->randomElement(Branch::cases())->value,
            'event_id' => Event::factory(),

        ];
    }
}
