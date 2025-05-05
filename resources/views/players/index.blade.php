@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-background py-16 px-8">
        <div class="w-full max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-aqua mb-10 text-center">Leaderboard</h2>

            <div class="overflow-x-auto bg-surface rounded-xl shadow-lg">
                <table class="min-w-full w-full text-base text-left text-foreground border-separate border-spacing-0">
                    <thead class="uppercase text-xs bg-mid text-aqua tracking-wide">
                    <tr>
                        @foreach (['Username', 'Region', 'ELO', 'Games', 'Wins', 'Losses', 'Win %', 'Kills', 'HS%'] as $index => $header)
                            <th class="px-6 py-4 border-r border-mid last:border-r-0">{{ $header }}</th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($players as $player)
                        <tr class="border-t border-mid hover:bg-aqua-dark/10 transition-colors">
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">
                                <a href="{{ route('players.show', $player->id) }}"
                                   class="text-aqua hover:underline font-medium">
                                    {{ $player->username }}
                                </a>
                            </td>
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">{{ $player->region }}</td>
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">{{ $player->elo }}</td>
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">{{ $player->games_played }}</td>
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">{{ $player->wins }}</td>
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">{{ $player->losses }}</td>
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">
                                {{ $player->games_played > 0 ? round(($player->wins / $player->games_played) * 100, 1) : '0' }}%
                            </td>
                            <td class="px-6 py-4 border-r border-mid last:border-r-0">{{ $player->total_kills }}</td>
                            <td class="px-6 py-4">{{ $player->headshot_pct }}%</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
