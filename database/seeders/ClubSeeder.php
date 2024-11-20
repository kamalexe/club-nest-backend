<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use Database\Seeders\RecommendedEventSeeder;
use Database\Seeders\RecommendedClubSeeder;



class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Club::factory()
            ->count(5)
            ->hasMembers(10)
            ->hasEvents(3)
            ->create();
    }
}
