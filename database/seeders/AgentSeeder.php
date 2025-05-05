<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Seeder;

class AgentSeeder extends Seeder
{
    public function run(): void
    {
        $agents = [
            ['name' => 'Astra', 'role' => 'Controller'],
            ['name' => 'Breach', 'role' => 'Initiator'],
            ['name' => 'Brimstone', 'role' => 'Controller'],
            ['name' => 'Chamber', 'role' => 'Sentinel'],
            ['name' => 'Clove', 'role' => 'Controller'],
            ['name' => 'Cypher', 'role' => 'Sentinel'],
            ['name' => 'Deadlock', 'role' => 'Sentinel'],
            ['name' => 'Fade', 'role' => 'Initiator'],
            ['name' => 'Gekko', 'role' => 'Initiator'],
            ['name' => 'Harbor', 'role' => 'Controller'],
            ['name' => 'Iso', 'role' => 'Duelist'],
            ['name' => 'Jett', 'role' => 'Duelist'],
            ['name' => 'KAYO', 'role' => 'Initiator'],
            ['name' => 'Killjoy', 'role' => 'Sentinel'],
            ['name' => 'Neon', 'role' => 'Duelist'],
            ['name' => 'Omen', 'role' => 'Controller'],
            ['name' => 'Phoenix', 'role' => 'Duelist'],
            ['name' => 'Raze', 'role' => 'Duelist'],
            ['name' => 'Reyna', 'role' => 'Duelist'],
            ['name' => 'Sage', 'role' => 'Sentinel'],
            ['name' => 'Skye', 'role' => 'Initiator'],
            ['name' => 'Sova', 'role' => 'Initiator'],
            ['name' => 'Tejo', 'role' => 'Initiator'],
            ['name' => 'Viper', 'role' => 'Controller'],
            ['name' => 'Vyse', 'role' => 'Duelist'],
            ['name' => 'Yoru', 'role' => 'Duelist'],
        ];

        foreach ($agents as $agent) {
            Agent::create([
                'name' => $agent['name'],
                'role' => $agent['role'],
                'image_url' => 'images/agents/' . strtolower($agent['name']) . '.png',
            ]);
        }
    }
}
