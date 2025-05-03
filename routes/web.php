<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\AgentController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('players', PlayerController::class);
Route::resource('agents', AgentController::class);

