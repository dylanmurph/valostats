<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerMapStat extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'map_id',
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

    public function map(): BelongsTo
    {
        return $this->belongsTo(ValorantMap::class);
    }
}
