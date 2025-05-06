<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ValorantMapController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('players', PlayerController::class)->only(['index', 'show']);
Route::resource('agents', AgentController::class)->only(['index', 'show']);
Route::resource('maps', ValorantMapController::class)->only(['index', 'show']);
