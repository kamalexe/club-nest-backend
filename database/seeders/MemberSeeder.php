<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Club;

class MemberSeeder extends Seeder
{
    public function run()
    {
        Club::all()->each(function ($club) {
            Member::factory()->create(['club_id' => $club->id, 'incharge' => true]);
            Member::factory()->count(2)->create(['club_id' => $club->id, 'incharge' => false,]);
        });
    }
}
