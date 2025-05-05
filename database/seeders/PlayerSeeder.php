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

        for ($i = 1; $i <= 20; $i++) {
            Player::create([
                'username' => 'Player_' . Str::random(5),
                'region' => $regions[array_rand($regions)],
                'elo' => rand(800, 3000),
                'total_kills' => rand(500, 2000),
                'games_played' => rand(50, 300),
                'wins' => rand(20, 200),
                'losses' => rand(10, 100),
                'headshot_pct' => rand(1500, 3500) / 100,
            ]);
        }
    }
}
