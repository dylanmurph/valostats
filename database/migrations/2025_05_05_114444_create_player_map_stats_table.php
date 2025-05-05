<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('player_map_stats', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')->constrained('players')->onDelete('cascade');
            $table->foreignId('map_id')->constrained('valorant_maps')->onDelete('cascade');

            $table->unsignedInteger('matches_played')->default(0);
            $table->unsignedInteger('total_kills')->default(0);
            $table->float('kda_ratio')->default(0);
            $table->float('win_rate')->default(0);
            $table->float('headshot_pct')->default(0);
            $table->float('average_damage')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('player_map_stats');
    }
};
