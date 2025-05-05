<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PlayerController extends Controller
{
    public function index(): View
    {
        $players = Player::orderByDesc('elo')->get();
        return view('players.index', compact('players'));
    }

    public function create(): View
    {
        return view('players.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('players.index');
    }

    public function show(string $id): View
    {
        $player = Player::with(['agentStats.agent', 'mapStats.map'])->findOrFail($id);

        $bestAgent = $player->agentStats->sortByDesc('win_rate')->first()?->agent;
        $bestMap = $player->mapStats->sortByDesc('win_rate')->first()?->map;

        return view('players.show', compact('player', 'bestAgent', 'bestMap'));
    }

    public function edit(string $id): View
    {
        $player = Player::findOrFail($id);
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $player = Player::findOrFail($id);
        return redirect()->route('players.show', $player->id);
    }

    public function destroy(string $id): RedirectResponse
    {
        $player = Player::findOrFail($id);
        return redirect()->route('players.index');
    }
}
