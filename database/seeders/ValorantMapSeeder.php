<?php

namespace Database\Seeders;

use App\Models\ValorantMap;
use Illuminate\Database\Seeder;

class ValorantMapSeeder extends Seeder
{
    public function run(): void
    {
        $maps = [
            ['name' => 'Abyss',   'image_url' => 'images/maps/abyss.png'],
            ['name' => 'Ascent',  'image_url' => 'images/maps/ascent.png'],
            ['name' => 'Bind',    'image_url' => 'images/maps/bind.png'],
            ['name' => 'Breeze',  'image_url' => 'images/maps/breeze.png'],
            ['name' => 'Fracture','image_url' => 'images/maps/fracture.png'],
            ['name' => 'Haven',   'image_url' => 'images/maps/haven.png'],
            ['name' => 'Icebox',  'image_url' => 'images/maps/icebox.png'],
            ['name' => 'Lotus',   'image_url' => 'images/maps/lotus.png'],
            ['name' => 'Pearl',   'image_url' => 'images/maps/pearl.png'],
            ['name' => 'Split',   'image_url' => 'images/maps/split.png'],
            ['name' => 'Sunset',  'image_url' => 'images/maps/sunset.png'],
        ];

        ValorantMap::insert($maps);
    }
}
