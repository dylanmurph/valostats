@extends('layouts.app')

@section('content')
    <div class="bg-background w-full px-6 pt-4 flex flex-col items-center text-white">

        <div class="relative w-full max-w-[1800px] rounded-3xl overflow-hidden shadow-lg bg-surface">

            {{-- Background image and gradient overlay --}}
            <img src="{{ asset('images/banner.png') }}"
                 alt="Banner Background"
                 class="absolute inset-0 w-full h-full object-cover opacity-20 z-0" />

            {{-- Content layer --}}
            <div class="relative z-10 p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

                    {{-- Left side: Logo, title, search --}}
                    <div class="flex flex-col gap-6">
                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 bg-aqua rounded-lg flex items-center justify-center">
                                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-14 h-14 object-contain" />
                            </div>
                            <div class="flex flex-col">
                                <h1 class="text-3xl sm:text-4xl font-extrabold text-white tracking-wide">VALOSTATS</h1>
                                <p class="text-foreground text-sm sm:text-base">Detailed Valorant Stats and Leaderboards</p>
                            </div>
                        </div>

                        <div class="w-full max-w-xl">
                            <input type="text"
                                   placeholder="Search agents, players, or maps..."
                                   class="w-full bg-mid text-foreground placeholder:text-gray-400 px-4 py-3 rounded-xl shadow-inner focus:outline-none focus:ring-2 focus:ring-aqua-light" />
                        </div>
                    </div>

                    {{-- Right side: Top 3 Players --}}
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-7 w-full h-full">

                        {{-- Player 2nd --}}
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

                        {{-- Player 1st --}}
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

                        {{-- Player 3rd --}}
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
        </div>

        {{-- Feature buttons --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 mt-12 max-w-[1100px] w-full text-center">

            {{-- Players Card --}}
            <a href="{{ route('players.index') }}"
               class="aspect-square relative rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition group bg-surface">

                <img src="{{ asset('images/ranks/radiant.png') }}"
                     class="absolute inset-0 w-full h-full object-contain opacity-20 group-hover:opacity-60 transition" />

                <div class="absolute inset-0 bg-gradient-to-b from-background/40 to-mid/80 z-0"></div>

                <div class="relative z-10 h-full w-full flex items-center justify-center text-white font-bold text-2xl">
                    Leaderboard
                </div>
            </a>

            {{-- Agents Card --}}
            <a href="{{ route('agents.index') }}"
               class="aspect-square relative rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition group bg-surface">

                <img src="{{ asset('images/agents/jett.png') }}"
                     class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:opacity-60 transition" />

                <div class="absolute inset-0 bg-gradient-to-b from-background/40 to-mid/80 z-0"></div>

                <div class="relative z-10 h-full w-full flex items-center justify-center text-white font-bold text-2xl">
                    Agents
                </div>
            </a>

            {{-- Maps Card --}}
            <a href="{{ route('maps.index') }}"
               class="aspect-square relative rounded-xl overflow-hidden shadow-xl hover:shadow-2xl transition group bg-surface">

                <img src="{{ asset('images/maps/haven.png') }}"
                     class="absolute inset-0 w-full h-full object-cover opacity-20 group-hover:opacity-60 transition" />

                <div class="absolute inset-0 bg-gradient-to-b from-background/40 to-mid/80 z-0"></div>

                <div class="relative z-10 h-full w-full flex items-center justify-center text-white font-bold text-2xl">
                    Maps
                </div>
            </a>
        </div>
    </div>
@endsection
