<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'region',
        'rank',
    ];

    public function stats(): HasMany
    {
        return $this->hasMany(PlayerAgentStat::class);
    }
}
