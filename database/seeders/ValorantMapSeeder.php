<?php

namespace Database\Seeders;

use App\Models\ValorantMap;
use Illuminate\Database\Seeder;

class ValorantMapSeeder extends Seeder
{
    public function run(): void
    {
        $maps = [
            ['name' => 'Abyss',    'image_url' => 'images/maps/abyss.png',    'location' => 'Sør-Jan, Norway (Omega Earth)',      'minimap_url' => 'images/maps/minimaps/abyss_minimap.png',    'description' => 'Placeholder description.'],
            ['name' => 'Ascent',   'image_url' => 'images/maps/ascent.png',   'location' => 'Venice, Italy (Alpha Earth)',        'minimap_url' => 'images/maps/minimaps/ascent_minimap.png',   'description' => 'Placeholder description.'],
            ['name' => 'Bind',     'image_url' => 'images/maps/bind.png',     'location' => 'Rabat, Morocco (Alpha Earth)',       'minimap_url' => 'images/maps/minimaps/bind_minimap.png',     'description' => 'Placeholder description.'],
            ['name' => 'Breeze',   'image_url' => 'images/maps/breeze.png',   'location' => 'Bermuda Triangle (Alpha Earth)',     'minimap_url' => 'images/maps/minimaps/breeze_minimap.png',   'description' => 'Placeholder description.'],
            ['name' => 'Fracture', 'image_url' => 'images/maps/fracture.png', 'location' => 'Santa Fe, New Mexico (Alpha Earth)', 'minimap_url' => 'images/maps/minimaps/fracture_minimap.png', 'description' => 'Placeholder description.'],
            ['name' => 'Haven',    'image_url' => 'images/maps/haven.png',    'location' => 'Thimphu, Bhutan (Alpha Earth)',      'minimap_url' => 'images/maps/minimaps/haven_minimap.png',    'description' => 'Placeholder description.'],
            ['name' => 'Icebox',   'image_url' => 'images/maps/icebox.png',   'location' => 'Bennett Island, Russia (Alpha Earth)','minimap_url' => 'images/maps/minimaps/icebox_minimap.png',   'description' => 'Placeholder description.'],
            ['name' => 'Lotus',    'image_url' => 'images/maps/lotus.png',    'location' => 'Western Ghats, India (Alpha Earth)', 'minimap_url' => 'images/maps/minimaps/lotus_minimap.png',    'description' => 'Placeholder description.'],
            ['name' => 'Pearl',    'image_url' => 'images/maps/pearl.png',    'location' => 'Lisbon, Portugal (Omega Earth)',     'minimap_url' => 'images/maps/minimaps/pearl_minimap.png',    'description' => 'Placeholder description.'],
            ['name' => 'Split',    'image_url' => 'images/maps/split.png',    'location' => 'Tokyo, Japan (Alpha Earth)',         'minimap_url' => 'images/maps/minimaps/split_minimap.png',    'description' => 'Placeholder description.'],
            ['name' => 'Sunset',   'image_url' => 'images/maps/sunset.png',   'location' => 'Los Angeles, USA (Alpha Earth)',     'minimap_url' => 'images/maps/minimaps/sunset_minimap.png',   'description' => 'Placeholder description.'],
        ];

        ValorantMap::insert($maps);
    }
}
