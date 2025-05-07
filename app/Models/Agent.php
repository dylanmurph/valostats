<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'role',
        'image_url',
        'bg_url',
        'biography',
        'ability1',
        'ability2',
        'ability3',
        'ultimate',
        'ability1_desc',
        'ability2_desc',
        'ability3_desc',
        'ultimate_desc',
        'ability1_url',
        'ability2_url',
        'ability3_url',
        'ultimate_url',
    ];

    public function stats(): HasMany
    {
        return $this->hasMany(PlayerAgentStat::class);
    }
}
