<?php

namespace Database\Seeders;

use App\Models\ValorantMap;
use Illuminate\Database\Seeder;

class ValorantMapSeeder extends Seeder
{
    public function run(): void
    {
        $maps = [
            [
                'name' => 'Abyss',
                'image_url' => 'images/maps/abyss.png',
                'location' => 'Sør-Jan, Norway (Omega Earth)',
                'minimap_url' => 'images/maps/minimaps/abyss_minimap.png',
                'description' => "A map from Omega Earth, built on the edge of a mysterious chasm.\n"
                    . "Abyss features verticality-focused gameplay and unique jumpable gaps instead of traditional boundaries, demanding high movement precision."
            ],
            [
                'name' => 'Ascent',
                'image_url' => 'images/maps/ascent.png',
                'location' => 'Venice, Italy (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/ascent_minimap.png',
                'description' => "A city torn apart by a spike explosion, now reclaimed as a battleground.\n"
                    . "Ascent emphasizes mid-control with a large central area and destructible doors on each site that affect defender rotations."
            ],
            [
                'name' => 'Bind',
                'image_url' => 'images/maps/bind.png',
                'location' => 'Rabat, Morocco (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/bind_minimap.png',
                'description' => "A spike detonation site turned research hub, split across two teleport-linked zones.\n"
                    . "Bind has no mid lane; instead, it uses one-way teleporters to connect the two bomb sites for fast flanks and rotations."
            ],
            [
                'name' => 'Breeze',
                'image_url' => 'images/maps/breeze.png',
                'location' => 'Bermuda Triangle (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/breeze_minimap.png',
                'description' => "An ancient ruin overtaken by tropical elements and scientific outposts.\n"
                    . "Breeze offers wide open spaces, long sightlines, and massive bomb sites that challenge standard utility and operator play."
            ],
            [
                'name' => 'Fracture',
                'image_url' => 'images/maps/fracture.png',
                'location' => 'Santa Fe, New Mexico (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/fracture_minimap.png',
                'description' => "An experimental Radianite facility split in two by a catastrophic event.\n"
                    . "Fracture features attacker spawn splitting across both sides of the map, allowing for pincer-style offenses and unique site entry options."
            ],
            [
                'name' => 'Haven',
                'image_url' => 'images/maps/haven.png',
                'location' => 'Thimphu, Bhutan (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/haven_minimap.png',
                'description' => "A monastery-turned-conflict zone, rich in history and conflict.\n"
                    . "Haven is the only map with three bomb sites (A, B, C), requiring flexible defense and smart rotations to cover multiple attack paths."
            ],
            [
                'name' => 'Icebox',
                'image_url' => 'images/maps/icebox.png',
                'location' => 'Bennett Island, Russia (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/icebox_minimap.png',
                'description' => "An abandoned Kingdom outpost buried in arctic snow and secrecy.\n"
                    . "Icebox features tight angles, vertical zip lines, and close-quarter duels with elevated plant zones and narrow entries."
            ],
            [
                'name' => 'Lotus',
                'image_url' => 'images/maps/lotus.png',
                'location' => 'Western Ghats, India (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/lotus_minimap.png',
                'description' => "A forgotten city imbued with ancient technology and mystery.\n"
                    . "Lotus has three bomb sites and unique rotating doors, offering dynamic access routes and high rotational play potential."
            ],
            [
                'name' => 'Pearl',
                'image_url' => 'images/maps/pearl.png',
                'location' => 'Lisbon, Portugal (Omega Earth)',
                'minimap_url' => 'images/maps/minimaps/pearl_minimap.png',
                'description' => "A submerged city shielded by Radianite-tech domes.\n"
                    . "Pearl is a traditional 5-lane map with no gimmicks—focused on classic lane fights, structured entries, and map control fundamentals."
            ],
            [
                'name' => 'Split',
                'image_url' => 'images/maps/split.png',
                'location' => 'Tokyo, Japan (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/split_minimap.png',
                'description' => "A futuristic urban center filled with Kingdom influence.\n"
                    . "Split emphasizes vertical engagements with ropes and high ground on both sites, offering intense choke points and narrow corridors."
            ],
            [
                'name' => 'Sunset',
                'image_url' => 'images/maps/sunset.png',
                'location' => 'Los Angeles, USA (Alpha Earth)',
                'minimap_url' => 'images/maps/minimaps/sunset_minimap.png',
                'description' => "A tense battleground nestled in a neighborhood disrupted by spike-related tech.\n"
                    . "Sunset features straightforward lanes, an open mid with connector pressure, and encourages team-based site retakes and mid-control tactics."
            ],
        ];


        ValorantMap::insert($maps);
    }
}
