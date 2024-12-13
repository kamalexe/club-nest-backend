<?php

namespace Database\Factories;

use App\CompetitionType;
use App\Models\Competition;
use App\Models\Event;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompetitionFactory extends Factory
{
    protected $model = Competition::class;

    public function definition()
    {
        return [
            'event_id' => Event::factory(), // Assumes there is an EventFactory
            'rules' => $this->faker->sentence(),
            'scoring_system' => $this->faker->sentence(),
            'competition_type' => $this->faker->randomElement(CompetitionType::cases())->value,
            'prizes' => $this->faker->sentence(),
        ];
    }
}
