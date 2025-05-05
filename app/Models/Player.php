<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'region',
        'elo',
        'total_kills',
        'games_played',
        'wins',
        'losses',
        'headshot_pct',
    ];

    public function agentStats(): HasMany
    {
        return $this->hasMany(PlayerAgentStat::class);
    }

    public function mapStats(): HasMany
    {
        return $this->hasMany(PlayerMapStat::class);
    }
}
