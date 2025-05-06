@extends('layouts.app')

@section('content')
    <div class="bg-background min-h-screen flex flex-col items-center py-10 px-4 sm:px-6">

        {{-- Banner + Nav --}}
        <div class="relative w-full max-w-[1500px] mb-10">
            <div class="rounded-t-xl bg-surface w-full min-h-[220px] sm:min-h-[260px] relative shadow-lg">
                <img src="{{ asset('images/maps/' . strtolower($player->bestMap()?->name ?? 'abyss') . '.png') }}"
                     alt="Banner"
                     class="absolute inset-0 w-full h-full object-cover opacity-30" />

                <div class="absolute w-36 sm:w-44 aspect-square bg-surface rounded-full bottom-[-87px] left-4 sm:left-6 border-4 border-aqua shadow-lg z-10 overflow-hidden">
                    <img src="{{ asset('images/agents/' . strtolower($player->bestAgent()?->name ?? 'default') . '.png') }}"
                         alt="{{ $player->bestAgent()?->name }}"
                         class="w-full h-full object-cover" />
                </div>

                <div class="absolute bottom-4 left-44 sm:left-52 bg-mid px-4 py-3 rounded shadow-lg">
                    <p class="text-aqua font-bold text-lg">{{ $player->username }}</p>
                    <p class="text-foreground text-sm">Region - {{ $player->region }}</p>
                </div>
            </div>

            <div class="bg-surface h-12 flex gap-2 pl-44 sm:pl-52 rounded-b-xl shadow-lg" id="tab-buttons">
                <div class="tab-btn px-5 text-sm font-semibold h-full flex items-center cursor-pointer text-aqua border-b-4 border-aqua"
                     data-tab="overview">Overview</div>
                <div class="tab-btn px-5 text-sm font-semibold h-full flex items-center cursor-pointer text-foreground"
                     data-tab="agents">Agent Stats</div>
                <div class="tab-btn px-5 text-sm font-semibold h-full flex items-center cursor-pointer text-foreground"
                     data-tab="maps">Map Stats</div>
            </div>
        </div>

        {{-- Overview Tab --}}
        <div id="tab-overview" class="tab-section bg-surface rounded-xl p-6 sm:p-10 w-full max-w-7xl mt-10 space-y-6 shadow-lg">
            <div class="flex flex-col sm:flex-row gap-6">
                <div class="flex-1 bg-mid rounded-xl p-4 flex items-center gap-5 shadow-lg">
                    <div class="h-16 w-16 sm:h-20 sm:w-20 overflow-hidden flex items-center justify-center">
                        <img src="{{ asset($player->rank['image']) }}" alt="{{ $player->rank['name'] }}" class="object-contain w-full h-full">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-aqua font-semibold text-lg sm:text-xl">{{ $player->rank['name'] }}</span>
                        <span class="text-foreground text-sm sm:text-xs">{{ $player->elo }}</span>
                    </div>
                </div>
                <div class="flex-1 hidden sm:block"></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-mid rounded-xl p-4 flex flex-col justify-center shadow-lg">
                    <span class="text-sm text-foreground/60">Games Played</span>
                    <span class="text-aqua text-xl font-bold">{{ $player->games_played }}</span>
                </div>

                <div class="bg-mid rounded-xl p-4 flex flex-col justify-center shadow-lg">
                    <span class="text-sm text-foreground/60">Wins / Losses</span>
                    <span class="text-aqua text-xl font-bold">{{ $player->wins }} / {{ $player->losses }}</span>
                    <span class="text-sm text-foreground/60 mt-2">Win Rate</span>
                    <span class="text-aqua text-xl font-bold">
                        {{ $player->games_played > 0 ? round(($player->wins / $player->games_played) * 100, 1) : 0 }}%
                    </span>
                </div>

                <div class="bg-mid rounded-xl p-4 flex flex-col justify-center shadow-lg">
                    <span class="text-sm text-foreground/60">Total Kills</span>
                    <span class="text-aqua text-xl font-bold">{{ $player->total_kills }}</span>
                </div>

                <div class="bg-mid rounded-xl p-4 flex flex-col justify-center shadow-lg">
                    <span class="text-sm text-foreground/60">Headshot %</span>
                    <span class="text-aqua text-xl font-bold">{{ $player->headshot_pct }}%</span>
                </div>
            </div>
        </div>

        {{-- Agent Stats Tab --}}
        <div id="tab-agents" class="tab-section hidden bg-surface rounded-xl p-6 sm:p-10 w-full max-w-7xl mt-10 space-y-6 shadow-lg">
            <h2 class="text-2xl font-bold text-aqua text-center">Agents</h2>
            @php $sortedAgentStats = $player->agentStats->sortByDesc('win_rate'); @endphp

            <div class="space-y-4">
                @foreach ($sortedAgentStats as $stat)
                    <div class="relative bg-mid rounded-xl px-6 py-4 flex items-center overflow-hidden min-h-[150px] shadow-lg">
                        <h3 class="text-aqua font-bold text-xl tracking-wide min-w-40">{{ $stat->agent->name }}</h3>

                        <div class="z-10 text-foreground w-2/3 space-y-4">
                            <div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm sm:text-base pl-4">
                                <div>
                                    <p class="mb-1"><span class="text-aqua">Win Rate:</span> {{ number_format($stat->win_rate, 1) }}%</p>
                                    <p class="mb-1"><span class="text-aqua">Matches:</span> {{ $stat->matches_played }}</p>
                                    <p><span class="text-aqua">Kills:</span> {{ $stat->total_kills }}</p>
                                </div>
                                <div>
                                    <p class="mb-1"><span class="text-aqua">KDA:</span> {{ number_format($stat->kda_ratio, 2) }}</p>
                                    <p class="mb-1"><span class="text-aqua">HS%:</span> {{ number_format($stat->headshot_pct, 1) }}%</p>
                                    <p><span class="text-aqua">ADR:</span> {{ number_format($stat->average_damage, 0) }}</p>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset('images/agents/' . strtolower($stat->agent->name) . '.png') }}"
                             alt="{{ $stat->agent->name }}"
                             class="mask-left-fade absolute top-1/2 right-[8rem] -translate-y-1/2 scale-[2] z-0 pointer-events-none select-none object-contain opacity-15" />
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Map Stats Tab --}}
        <div id="tab-maps" class="tab-section hidden bg-surface rounded-xl p-6 sm:p-10 w-full max-w-7xl mt-10 space-y-6 shadow-lg">
            <h2 class="text-2xl font-bold text-aqua text-center">Maps</h2>
            @php $sortedMapStats = $player->mapStats->sortByDesc('kda_ratio'); @endphp

            <div class="space-y-4">
                @foreach ($sortedMapStats as $stat)
                    <div class="relative bg-mid rounded-xl px-6 py-4 flex items-center overflow-hidden min-h-[150px] shadow-lg">
                        <h3 class="text-aqua font-bold text-xl tracking-wide min-w-40">{{ $stat->map->name }}</h3>

                        <div class="z-10 text-foreground w-2/3 space-y-4">
                            <div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm sm:text-base pl-4">
                                <div>
                                    <p class="mb-1"><span class="text-aqua">Win Rate:</span> {{ number_format($stat->win_rate, 1) }}%</p>
                                    <p class="mb-1"><span class="text-aqua">Matches:</span> {{ $stat->matches_played }}</p>
                                    <p><span class="text-aqua">Kills:</span> {{ $stat->total_kills }}</p>
                                </div>
                                <div>
                                    <p class="mb-1"><span class="text-aqua">KDA:</span> {{ number_format($stat->kda_ratio, 2) }}</p>
                                    <p class="mb-1"><span class="text-aqua">HS%:</span> {{ number_format($stat->headshot_pct, 1) }}%</p>
                                    <p><span class="text-aqua">ADR:</span> {{ number_format($stat->average_damage, 0) }}</p>
                                </div>
                            </div>
                        </div>

                        <img src="{{ asset('images/maps/' . strtolower($stat->map->name) . '.png') }}"
                             alt="{{ $stat->map->name }}"
                             class="mask-left-fade absolute top-1/2 right-[-16rem] -translate-y-1/2 scale-[0.8] z-0 pointer-events-none select-none object-contain opacity-20" />
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <script>
        const tabs = document.querySelectorAll('.tab-btn');
        const sections = document.querySelectorAll('.tab-section');

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-tab');
                tabs.forEach(t => {
                    t.classList.remove('text-aqua', 'border-b-4', 'border-aqua');
                    t.classList.add('text-foreground');
                });
                tab.classList.remove('text-foreground');
                tab.classList.add('text-aqua', 'border-b-4', 'border-aqua');

                sections.forEach(section => {
                    section.id === `tab-${target}` ? section.classList.remove('hidden') : section.classList.add('hidden');
                });
            });
        });
    </script>
@endsection
