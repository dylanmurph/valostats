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

    public function getRankAttribute()
    {
        foreach (config('valorant_ranks') as $rank) {
            if ($this->elo >= $rank['min_elo'] && $this->elo <= $rank['max_elo']) {
                return $rank;
            }
        }

        return [
            'name' => 'Unranked',
            'image' => 'images/ranks/unranked.png',
        ];
    }
    public static function topThree()
    {
        return self::orderByDesc('elo')->take(3)->get();
    }

    public function bestAgent()
    {
        return $this->agentStats->sortByDesc('win_rate')->first()?->agent;
    }

    public function bestMap()
    {
        return $this->mapStats->sortByDesc('win_rate')->first()?->map;
    }
}
