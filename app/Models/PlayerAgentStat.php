<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerAgentStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'agent_id',
        'matches_played',
        'total_kills',
        'kda_ratio',
        'win_rate',
        'headshot_pct',
        'average_damage',
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }
}
