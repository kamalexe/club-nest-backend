<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RecommendedEventSeeder;
use Database\Seeders\RecommendedClubSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
       $this->call([
            VenueSeeder::class,
            EventSeeder::class,
            TicketSeeder::class,
            ClubSeeder::class,
            RecommendedEventSeeder::class,
            RecommendedClubSeeder::class,
        ]);
    }
}
