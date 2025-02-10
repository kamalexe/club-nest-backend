<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ClubSeeder::class,
            EventSeeder::class,
            MemberSeeder::class,
            VolunteerSeeder::class,
            EventPictureSeeder::class,
            FacultySeeder::class,
            CompetitionSeeder::class,
            ParticipantsTableSeeder::class,
            TeamsTableSeeder::class,
        ]);
    }
}
