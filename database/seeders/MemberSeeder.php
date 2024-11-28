<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;
use App\Models\Club;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Club::all()->each(function ($club) {
            Member::factory()->create([
                'club_id' => $club->id,
                'incharge' => true, // This member is the in-charge
            ]);
            Member::factory()->count(5)->create([
                'club_id' => $club->id,
                'incharge' => false, // These members are not in-charge
            ]);
        });
    }
}
