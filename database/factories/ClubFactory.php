<?php
namespace Database\Factories;

use App\Models\Club;
use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClubFactory extends Factory
{

    protected $model = Club::class;
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'description' => $this->faker->paragraph,
            'image' => $this->faker->imageUrl(),    
        ];
    }
}
