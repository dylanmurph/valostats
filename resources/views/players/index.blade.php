@extends('layouts.app')
@section('content')
    <div class="max-w-6xl mx-auto py-12 text-white">
        <h2 class="text-2xl font-bold text-cyan-300 mb-4">Leaderboard</h2>
        <table class="w-full table-auto bg-gray-800 rounded-lg">
            <thead class="bg-cyan-900 text-cyan-100 text-sm">
            <tr>
                <th class="px-4 py-2 text-left">Username</th>
                <th class="px-4 py-2 text-left">Region</th>
                <th class="px-4 py-2 text-left">ELO</th>
                <th class="px-4 py-2 text-left">Total Kills</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($players as $player)
                <tr class="hover:bg-cyan-800">
                    <td class="px-4 py-2"><a href="{{ route('players.show', $player->id) }}" class="text-cyan-300 hover:underline">{{ $player->username }}</a></td>
                    <td class="px-4 py-2">{{ $player->region }}</td>
                    <td class="px-4 py-2">{{ $player->elo }}</td>
                    <td class="px-4 py-2">{{ $player->total_kills }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
