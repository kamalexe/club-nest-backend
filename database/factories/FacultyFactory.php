<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faculty>
 */
class FacultyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'department' => $this->faker->randomElement(['CS', 'IT', 'ME', 'CE', 'EE']),
            'post' => $this->faker->randomElement(['Professor', 'Associate Professor', 'Lecturer']),
            'phone' => $this->faker->phoneNumber(),
            'image' => $this->faker->imageUrl(150, 150, 'people', true, 'Profile'),
        ];
    }
}
