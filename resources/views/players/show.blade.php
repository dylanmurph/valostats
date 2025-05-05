@extends('layouts.app')
@section('content')
    <div class="max-w-4xl mx-auto py-12 text-white">
        <h2 class="text-2xl font-bold text-cyan-300 mb-4">Player Profile: {{ $player->username }}</h2>

        <p><strong>Region:</strong> {{ $player->region }}</p>
        <p><strong>ELO:</strong> {{ $player->elo }}</p>
        <p><strong>Total Kills:</strong> {{ $player->total_kills }}</p>

        <div class="mt-6">
            <h3 class="text-xl text-cyan-200">Agent Stats</h3>
            <ul class="list-disc ml-5">
                @foreach ($player->agentStats as $stat)
                    <li>{{ $stat->agent->name }}: {{ $stat->kda_ratio }} KDA, {{ $stat->win_rate }}% win</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-6">
            <h3 class="text-xl text-cyan-200">Map Stats</h3>
            <ul class="list-disc ml-5">
                @foreach ($player->mapStats as $stat)
                    <li>{{ $stat->map->name }}: {{ $stat->average_damage }} ADR, {{ $stat->kda_ratio }} KDA</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
