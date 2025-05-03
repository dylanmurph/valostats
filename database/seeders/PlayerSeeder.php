<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        $regions = ['EU', 'NA', 'APAC'];
        $ranks = ['Iron', 'Bronze', 'Silver', 'Gold', 'Platinum', 'Diamond', 'Immortal', 'Radiant'];

        for ($i = 1; $i <= 10; $i++) {
            Player::create([
                'username' => 'Player_' . Str::random(5),
                'region' => $regions[array_rand($regions)],
                'rank' => $ranks[array_rand($ranks)],
            ]);
        }
    }
}
