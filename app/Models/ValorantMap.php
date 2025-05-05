<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ValorantMap extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image_url',
    ];

    public function playerStats(): HasMany
    {
        return $this->hasMany(PlayerMapStat::class);
    }
}
