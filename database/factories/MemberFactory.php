<?php

namespace Database\Factories;

use App\Models\Member;
use App\Models\Club;
use Illuminate\Database\Eloquent\Factories\Factory;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Ensure one member per club is marked as in charge
        static $incharge = false;  // Keeps track of whether incharge is already assigned

        return [
            'name' => $this->faker->name,
            'post' => $this->faker->word,  // Can be changed as needed
            'incharge' => $incharge ? false : $this->faker->boolean, // Set the first member as in charge
            'email' => $this->faker->unique()->safeEmail,
            'image' => $this->faker->imageUrl(),
            'phone' => $this->faker->phoneNumber,
            'club_id' => Club::factory(),  // Associate with a club
        ];
    }
}
