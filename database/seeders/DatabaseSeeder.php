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
            ClubSeeder::class,
            EventSeeder::class,
            TicketSeeder::class,
            MemberSeeder::class,
            VolunteerSeeder::class,
            EventPictureSeeder::class,
        ]);
    }
}
