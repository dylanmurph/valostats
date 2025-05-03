<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerAgentStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'agent_id',
        'matches_played',
        'win_rate',
        'kda_ratio',
        'headshot_pct',
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
