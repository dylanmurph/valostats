<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('role');
            $table->string('image_url')->nullable();
            $table->string('bg_url')->nullable();
            $table->text('biography')->nullable();
            $table->string('ability1')->nullable();
            $table->string('ability2')->nullable();
            $table->string('ability3')->nullable();
            $table->string('ultimate')->nullable();
            $table->text('ability1_desc')->nullable();
            $table->text('ability2_desc')->nullable();
            $table->text('ability3_desc')->nullable();
            $table->text('ultimate_desc')->nullable();
            $table->string('ability1_url')->nullable();
            $table->string('ability2_url')->nullable();
            $table->string('ability3_url')->nullable();
            $table->string('ultimate_url')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
