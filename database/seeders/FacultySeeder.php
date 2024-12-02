<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faculty;
use Faker\Factory as Faker;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Faculty::factory()->count(11)->create();
        $faker = Faker::create();
        $faculties = [
            [
                'name' => 'Dr. Rajesh Lavania',
                'department' => 'Computer Science',
                'post' => 'Head of the Department',
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'image' => $faker->imageUrl(150, 150, 'people', true, 'Profile'),
            ],
            [
                'name' => 'Er. Subodh Sharma',
                'department' => 'Electrical Engineering',
                'post' => 'Assistant Professor',
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'image' => $faker->imageUrl(150, 150, 'people', true, 'Profile'),
            ],
            [
                'name' => 'Er. Prashant Maharshi',
                'department' => 'Computer Science',
                'post' => 'Assistant Professor',
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'image' => $faker->imageUrl(150, 150, 'people', true, 'Profile'),
            ],
            [
                'name' => 'Er. Saurabh Garg',
                'department' => 'Computer Science',
                'post' => 'Assistant Professor',
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'image' => $faker->imageUrl(150, 150, 'people', true, 'Profile'),
            ],
            [
                'name' => 'Er. Aditi A.K Gupta',
                'department' => 'Electrical Engineering',
                'post' => 'Assistant Professor',
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'image' => $faker->imageUrl(150, 150, 'people', true, 'Profile'),
            ],
            [
                'name' => 'Er. Pragya Kabra',
                'department' => 'Electrical Engineering',
                'post' => 'Assistant Professor',
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'image' => $faker->imageUrl(150, 150, 'people', true, 'Profile'),
            ],
            [
                'name' => 'Er. Shikhi Agarwal',
                'department' => 'Computer Science',
                'post' => 'Assistant Professor',
                'phone' => $faker->phoneNumber(),
                'email' => $faker->unique()->safeEmail(),
                'image' => $faker->imageUrl(150, 150, 'people', true, 'Profile'),
            ]
        ];

        // Create faculty records
        foreach ($faculties as $faculty) {
            Faculty::create($faculty);
        }
    }
}
