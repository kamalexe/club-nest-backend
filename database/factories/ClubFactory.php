<?php

namespace Database\Factories;

use App\Models\Club;
use App\Models\Member;
use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{

    protected $model = Club::class;
    public function definition()
    {
        return [

            'name' => $this->faker->company,
            'description' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(150, 150),
        ];
    }
}
