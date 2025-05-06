<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class HomeController extends Controller
{
    public function index()
    {
        $topPlayers = Player::topThree();
        return view('home', compact('topPlayers'));
    }
}
