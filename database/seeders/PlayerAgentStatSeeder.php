<?php

namespace Database\Seeders;

use App\Models\Player;
use App\Models\Agent;
use App\Models\PlayerAgentStat;
use Illuminate\Database\Seeder;

class PlayerAgentStatSeeder extends Seeder
{
    public function run(): void
    {
        $players = Player::all();
        $agents = Agent::all();

        foreach ($players as $player) {
            $selectedAgents = $agents->random(rand(2, 4));

            foreach ($selectedAgents as $agent) {
                PlayerAgentStat::create([
                    'player_id' => $player->id,
                    'agent_id' => $agent->id,
                    'matches_played' => rand(10, 100),
                    'win_rate' => rand(3000, 7000) / 100,
                    'kda_ratio' => rand(100, 300) / 100,
                    'headshot_pct' => rand(1000, 3000) / 100,
                ]);
            }
        }
    }
}
