<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\ValorantMap;
use App\Models\PlayerMapStat;
use Illuminate\Database\Seeder;

class PlayerMapStatSeeder extends Seeder
{
    public function run(): void
    {
        $players = Player::all();
        $maps = ValorantMap::all();

        foreach ($players as $player) {
            $selectedMaps = $maps->random(rand(2, 4));

            foreach ($selectedMaps as $map) {
                PlayerMapStat::create([
                    'player_id' => $player->id,
                    'map_id' => $map->id,
                    'matches_played' => rand(10, 100),
                    'total_kills' => rand(200, 1000),
                    'kda_ratio' => rand(100, 300) / 100,
                    'win_rate' => rand(3000, 7000) / 100,
                    'headshot_pct' => rand(1000, 3000) / 100,
                    'average_damage' => rand(120, 250),
                ]);
            }
        }
    }
}
