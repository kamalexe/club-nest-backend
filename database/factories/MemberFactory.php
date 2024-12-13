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

        static $incharge = false;
        $posts = [
            'President',
            'Vice President',
            'Secretary',
            'Treasurer',
            'Event Coordinator',
            'Social Media Manager',
            'Public Relations Officer',
            'Member',
            'Marketing Head',
            'Creative Head',
            'Technical Head',
            'Sports Coordinator',
            'Cultural Head',
            'Club Incharge'
        ];

        return [
            'name' => $this->faker->name,
            'post' => $this->faker->randomElement($posts),
            'incharge' => $incharge ? false : $this->faker->boolean,
            'email' => $this->faker->unique()->safeEmail,
            'image' => '01JER2M7KZWQA9NF2YW7JFDM2Q.jpg',
            'phone' => $this->faker->phoneNumber,
            'club_id' => Club::factory(),  // Associate with a club
        ];
    }
}
