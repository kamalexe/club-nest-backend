<?php

namespace Database\Factories;

use App\Branch as AppBranch;
use App\Models\Event;
use App\Models\Participant;
use App\ParticipantsType;
use App\Semester;
use App\YearSemester;
use Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{

    protected $model = Participant::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'participants_type' => $this->faker->randomElement(ParticipantsType::cases())->value,
            'semester' => $this->faker->randomElement(Semester::cases())->value,
            'branch' => $this->faker->randomElement(AppBranch::cases())->value,
            'event_id' => Event::factory(),
        ];
    }
}
