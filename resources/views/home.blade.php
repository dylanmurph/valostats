@extends('layouts.app')

@section('content')
    <div class="bg-background min-h-screen w-full px-6 pt-4 flex flex-col items-center text-white">

        {{-- Banner Section --}}
        <div class="w-full max-w-[1800px] bg-gradient-to-br from-mid to-background rounded-3xl p-8 shadow-lg">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                {{-- Left: Logo, title, search --}}
                <div class="flex flex-col gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-16 h-16 bg-aqua rounded-lg flex items-center justify-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 object-contain" />
                        </div>
                        <div class="flex flex-col">
                            <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-wide">VALORANT STATS</h1>
                            <p class="text-foreground text-sm sm:text-base">Check Detailed Valorant Stats and Leaderboards</p>
                        </div>
                    </div>

                    <div class="w-full max-w-xl">
                        <input type="text"
                               placeholder="Search agents, players, or maps..."
                               class="w-full bg-mid text-foreground placeholder:text-gray-400 px-4 py-3 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-aqua-light" />
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row justify-center items-center gap-7 w-full h-full">

                    {{-- Player 2nd (Index 1) --}}
                    <div class="w-52 h-60 bg-surface rounded-xl flex flex-col items-center justify-center shadow-md relative">
                        <div class="absolute top-2 right-2 bg-aqua text-mid text-xs font-bold px-2 py-1 rounded-full">#2</div>
                        <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-aqua shadow mb-3">
                            <img src="{{ asset('images/agents/' . strtolower($topPlayers[1]->bestAgent()?->name ?? 'default') . '.png') }}"
                                 alt="{{ $topPlayers[1]->bestAgent()?->name }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="text-white font-semibold text-lg">{{ $topPlayers[1]->username }}</div>
                        <div class="text-aqua text-xl font-bold mt-1">ELO {{ $topPlayers[1]->elo }}</div>
                        <a href="{{ route('players.show', $topPlayers[1]->id) }}"
                           class="mt-3 inline-block px-4 py-1 text-sm bg-mid text-aqua hover:bg-aqua-dark hover:text-white rounded transition">
                            View Profile
                        </a>
                    </div>

                    {{-- Player 1st (Index 0) --}}
                    <div class="w-64 h-72 bg-surface rounded-xl flex flex-col items-center justify-center shadow-md relative scale-105 z-10">
                        <div class="absolute top-2 right-2 bg-aqua text-mid text-xs font-bold px-2 py-1 rounded-full">#1</div>
                        <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-aqua shadow mb-3">
                            <img src="{{ asset('images/agents/' . strtolower($topPlayers[0]->bestAgent()?->name ?? 'default') . '.png') }}"
                                 alt="{{ $topPlayers[0]->bestAgent()?->name }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="text-white font-semibold text-lg">{{ $topPlayers[0]->username }}</div>
                        <div class="text-aqua text-xl font-bold mt-1">ELO {{ $topPlayers[0]->elo }}</div>
                        <a href="{{ route('players.show', $topPlayers[0]->id) }}"
                           class="mt-3 inline-block px-4 py-1 text-sm bg-mid text-aqua hover:bg-aqua-dark hover:text-white rounded transition">
                            View Profile
                        </a>
                    </div>

                    {{-- Player 3rd (Index 2) --}}
                    <div class="w-52 h-60 bg-surface rounded-xl flex flex-col items-center justify-center shadow-md relative">
                        <div class="absolute top-2 right-2 bg-aqua text-mid text-xs font-bold px-2 py-1 rounded-full">#3</div>
                        <div class="w-20 h-20 rounded-full overflow-hidden border-2 border-aqua shadow mb-3">
                            <img src="{{ asset('images/agents/' . strtolower($topPlayers[2]->bestAgent()?->name ?? 'default') . '.png') }}"
                                 alt="{{ $topPlayers[2]->bestAgent()?->name }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="text-white font-semibold text-lg">{{ $topPlayers[2]->username }}</div>
                        <div class="text-aqua text-xl font-bold mt-1">ELO {{ $topPlayers[2]->elo }}</div>
                        <a href="{{ route('players.show', $topPlayers[2]->id) }}"
                           class="mt-3 inline-block px-4 py-1 text-sm bg-mid text-aqua hover:bg-aqua-dark hover:text-white rounded transition">
                            View Profile
                        </a>
                    </div>
                </div>

            </div>
        </div>

        {{-- Feature buttons --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 mt-12 max-w-[1100px] w-full text-center">
            <a href="{{ route('players.index') }}"
               class="aspect-square bg-surface rounded-xl flex items-center justify-center text-xl font-bold text-white hover:bg-mid transition shadow-lg">
                Players
            </a>
            <a href="{{ route('agents.index') }}"
               class="aspect-square bg-surface rounded-xl flex items-center justify-center text-xl font-bold text-white hover:bg-mid transition shadow-lg">
                Agents
            </a>
            <a href="{{ route('maps.index') }}"
               class="aspect-square bg-surface rounded-xl flex items-center justify-center text-xl font-bold text-white hover:bg-mid transition shadow-lg">
                Maps
            </a>
        </div>
    </div>
@endsection
