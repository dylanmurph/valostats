<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class PlayerController extends Controller
{
    public function index(Request $request): View
    {
        $sort = $request->get('sort', 'elo');
        $direction = $request->get('direction', 'desc');

        $players = Player::all();

        foreach ($players as $player) {
            $player->win_rate_computed = $player->games_played > 0
                ? ($player->wins / $player->games_played) * 100
                : 0;
        }

        $players = match ($sort) {
            'win_rate' => $players->sortBy(fn($p) => $p->win_rate_computed, SORT_REGULAR, $direction === 'desc'),
            default => $players->sortBy($sort, SORT_REGULAR, $direction === 'desc')
        };

        $eloRanks = $players->sortByDesc('elo')->pluck('id')->flip();

        return view('players.index', compact('players', 'eloRanks', 'sort', 'direction'));
    }




    public function create(): View
    {
        return view('players.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('players.index');
    }

    public function show(Player $player)
    {
        $player->load([
            'agentStats.agent',
            'mapStats.map',
        ]);

        return view('players.show', compact('player'));
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
