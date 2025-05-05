<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('region');
            $table->integer('elo')->default(1000);

            $table->unsignedInteger('total_kills')->default(0);
            $table->unsignedInteger('games_played')->default(0);
            $table->unsignedInteger('wins')->default(0);
            $table->unsignedInteger('losses')->default(0);
            $table->float('headshot_pct')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('players');
    }
};
