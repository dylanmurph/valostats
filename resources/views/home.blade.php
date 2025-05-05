@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-background px-4">
        <div class="w-full max-w-md space-y-10 text-center">
            <div class="bg-surface p-8 rounded-2xl shadow-lg">
                <h1 class="text-3xl md:text-4xl font-bold text-aqua mb-4">
                    Welcome to Valorant Stats
                </h1>
                <p class="text-foreground text-base">Explore performance data, rankings, and agent stats across maps.</p>
            </div>

            <div class="space-y-6">
                <a href="{{ route('players.index') }}"
                   class="block bg-mid text-foreground hover:bg-aqua-dark hover:text-white transition-all duration-200 px-6 py-4 rounded-lg font-medium shadow">
                    🏆 View Leaderboard
                </a>

                <a href="{{ route('maps.index') }}"
                   class="block bg-mid text-foreground hover:bg-aqua-dark hover:text-white transition-all duration-200 px-6 py-4 rounded-lg font-medium shadow">
                    🗺️ Explore All Maps
                </a>

                <a href="{{ route('agents.index') }}"
                   class="block bg-mid text-foreground hover:bg-aqua-dark hover:text-white transition-all duration-200 px-6 py-4 rounded-lg font-medium shadow">
                    🔫 Browse All Agents
                </a>
            </div>
        </div>
    </div>
@endsection
