<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EventPicture>
 */
class EventPictureFactory extends Factory
{

    public function definition(): array
    {
        return [
            'event_id' => null,
            'picture' => $this->faker->imageUrl(640, 480, 'events', true), // Generate a random image URL
        ];;
    }
}
