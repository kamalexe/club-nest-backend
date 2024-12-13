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
            'picture' =>  '01JER2M7KZWQA9NF2YW7JFDM2Q.jpg',
            'caption' => $this->faker->paragraph,
        ];;
    }
}
