<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('player_agent_stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade');
            $table->foreignId('agent_id')->constrained('agents')->onDelete('cascade');
            $table->integer('matches_played');
            $table->float('win_rate');
            $table->float('kda_ratio');
            $table->float('headshot_pct');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('player_agent_stats');
    }
};

