@extends('layouts.app')

@section('content')
    @php
        $headers = [
            'place' => 'Place',
            'username' => 'Username',
            'region' => 'Region',
            'elo' => 'Rating',
            'games_played' => 'Games',
            'wins' => 'Wins',
            'losses' => 'Losses',
            'win_rate' => 'Win %',
            'total_kills' => 'Kills',
            'headshot_pct' => 'HS%',
        ];

        // Defaults if not passed
        $sort = $sort ?? 'elo';
        $direction = $direction ?? 'desc';
    @endphp

    <div class="min-h-screen bg-background py-16 px-8">
        <div class="w-full max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-aqua mb-10 text-center">Leaderboard</h2>

            <div class="overflow-x-auto bg-surface rounded-xl shadow-lg">
                <table class="min-w-full w-full text-base text-left text-foreground border-collapse">
                    <thead class="uppercase text-xs bg-mid text-aqua tracking-wide border-b border-mid">
                    <tr>
                        @foreach ($headers as $key => $label)
                            @php
                                $isCurrent = $sort === $key || ($key === 'place' && $sort === 'elo');
                                $newDirection = $isCurrent && $direction === 'asc' ? 'desc' : 'asc';
                            @endphp
                            <th class="px-6 py-4 text-left whitespace-nowrap">
                                <a href="{{ route('players.index', ['sort' => $key, 'direction' => $newDirection]) }}"
                                   class="hover:underline {{ $isCurrent ? 'text-white' : '' }}">
                                    {{ $label }}
                                    @if ($isCurrent)
                                        {!! $direction === 'asc' ? '&#9650;' : '&#9660;' !!}
                                    @endif
                                </a>
                            </th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($players as $index => $player)
                        @php
                            $place = $eloRanks[$player->id] + 1;
                            $rowClass = match($place) {
                                1 => 'bg-yellow-200/10',
                                2 => 'bg-gray-200/10',
                                3 => 'bg-orange-200/10',
                                default => ''
                            };
                        @endphp
                        <tr class="border-b border-mid hover:bg-aqua-dark/10 transition-colors {{ $rowClass }}">
                            {{-- Place --}}
                            <td class="px-6 py-4 font-semibold text-aqua">{{ $place }}</td>

                            {{-- Username + Agent Image --}}
                            <td class="px-6 py-4 flex items-center gap-3">
                                <img
                                    src="{{ asset('images/agents/' . strtolower($player->bestAgent()?->name ?? 'default') . '.png') }}"
                                    alt="Agent" class="w-8 h-8 rounded-full object-cover"/>
                                <a href="{{ route('players.show', $player->id) }}"
                                   class="text-aqua hover:underline font-medium">
                                    {{ $player->username }}
                                </a>
                            </td>

                            {{-- Region --}}
                            <td class="px-6 py-4">{{ $player->region }}</td>

                            {{-- ELO + Rank Image --}}
                            {{-- ELO + Rank Image --}}
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <img src="{{ asset($player->rank['image']) }}" alt="Rank"
                                         class="w-7 h-7 object-contain" />
                                    <span class="text-base leading-none">{{ $player->elo }}</span>
                                </div>
                            </td>


                            <td class="px-6 py-4">{{ $player->games_played }}</td>
                            <td class="px-6 py-4">{{ $player->wins }}</td>
                            <td class="px-6 py-4">{{ $player->losses }}</td>
                            <td class="px-6 py-4">{{ $player->games_played > 0 ? round(($player->wins / $player->games_played) * 100, 1) : '0' }}%</td>
                            <td class="px-6 py-4">{{ $player->total_kills }}</td>
                            <td class="px-6 py-4">{{ $player->headshot_pct }}%</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
