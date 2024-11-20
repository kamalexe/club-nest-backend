<?php

namespace Database\Factories;

use App\Models\Member;
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
        return [
            'name' => $this->faker->name,      // Generate a fake name
            'email' => $this->faker->unique()->safeEmail, // Generate a unique email
            'phone'=>$this->faker->phoneNumber,
            'club_id' => \App\Models\Club::factory(), // Associate the member with a club (foreign key)
        ];
    }
}
