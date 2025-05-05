@extends('layouts.app')
@section('content')
    <div class="max-w-4xl mx-auto py-12 text-white">
        <h1 class="text-3xl font-bold text-cyan-300 mb-6">Welcome to Valorant Stats</h1>
        <ul class="space-y-4">
            <li><a href="{{ route('players.index') }}" class="text-cyan-400 hover:underline">Leaderboard</a></li>
            <li><a href="{{ route('maps.index') }}" class="text-cyan-400 hover:underline">All Maps</a></li>
            <li><a href="{{ route('agents.index') }}" class="text-cyan-400 hover:underline">All Agents</a></li>
        </ul>
    </div>
@endsection
