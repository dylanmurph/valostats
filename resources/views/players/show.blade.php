@extends('layouts.app')

@section('content')
    <div class="bg-background min-h-screen flex flex-col items-center py-10 px-4 sm:px-6">

        {{-- 🎯 Banner + Nav Wrapper --}}
        <div class="relative w-full max-w-7xl">

            {{-- Banner --}}
            <div class="rounded-t-xl bg-surface w-full min-h-[220px] sm:min-h-[260px] relative">
                <img src="{{ asset('images/maps/abyss.png') }}" alt="Banner"
                     class="w-full h-full object-cover opacity-30" />

                {{-- Profile Picture --}}
                <div class="absolute w-36 sm:w-44 aspect-square bg-surface rounded-full bottom-[-70px] left-4 sm:left-6 border-4 border-aqua shadow-lg z-10 overflow-hidden">
                    <img src="{{ asset('images/agents/brimstone.png') }}" alt="{{ $player->username }}"
                         class="w-full h-full object-cover" />
                </div>

                {{-- Username + Region --}}
                <div class="absolute bottom-4 left-44 sm:left-52 bg-mid px-4 py-3 rounded">
                    <p class="text-aqua font-bold text-lg">{{ $player->username }}</p>
                    <p class="text-foreground text-sm">{{ $player->region }}</p>
                </div>
            </div>

            {{-- Static Nav Buttons (No Functionality Yet) --}}
            <div class="bg-surface h-12 flex gap-2 pl-44 sm:pl-52 rounded-b-xl">
                <div class="px-5 text-sm font-semibold h-full flex items-center text-aqua border-b-4 border-aqua">
                    Overview
                </div>
                <div class="px-5 text-sm font-semibold h-full flex items-center text-foreground">
                    View Agent Stats
                </div>
                <div class="px-5 text-sm font-semibold h-full flex items-center text-foreground">
                    View Map Stats
                </div>
            </div>

        </div>

        {{-- 📊 Static Content (Overview Section) --}}
        <div class="bg-surface rounded-xl p-6 sm:p-10 w-full max-w-7xl mt-10 space-y-6">

            {{-- ELO Row --}}
            <div class="flex flex-col sm:flex-row gap-6">
                <div class="flex-1 min-h-[5rem] bg-mid rounded-xl flex items-center justify-center font-bold text-xl text-aqua">
                    {{ $player->elo }}
                </div>
                <div class="flex-1 hidden sm:block"></div>
            </div>

            {{-- Stats Grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="h-36 bg-mid rounded-xl flex items-center justify-center font-bold text-lg text-aqua">
                    {{ $player->games_played }} Games
                </div>
                <div class="h-36 bg-mid rounded-xl flex flex-col items-center justify-center font-bold text-lg text-aqua text-center px-2">
                    {{ $player->wins }} Wins / {{ $player->losses }} Losses
                    <span class="text-base mt-1">
                        {{ $player->games_played > 0 ? round(($player->wins / $player->games_played) * 100, 1) : 0 }}% Win Rate
                    </span>
                </div>
                <div class="h-36 bg-mid rounded-xl flex items-center justify-center font-bold text-lg text-aqua">
                    {{ $player->total_kills }} Kills
                </div>
                <div class="h-36 bg-mid rounded-xl flex items-center justify-center font-bold text-lg text-aqua">
                    {{ $player->headshot_pct }}% HS
                </div>
            </div>
        </div>

    </div>
@endsection
