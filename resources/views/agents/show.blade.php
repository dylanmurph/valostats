@extends('layouts.app')

@section('content')
    <div class="relative w-full text-white overflow-hidden">

        <div class="fixed top-16 inset-x-0 -z-10 h-full">
            <img src="{{ asset($agent->bg_url) }}"
                 alt="{{ $agent->name }} Background"
                 class="w-full h-full object-cover blur-[2px]"/>
            <div class="absolute inset-x-0 bottom-0 h-[600px] bg-gradient-to-t from-black/70 to-transparent"></div>
        </div>

        <div class="w-full max-w-full mx-auto px-6 pt-24 pb-20 space-y-16">

            <div class="flex items-center gap-6 bg-mid/90 rounded-xl p-6 w-fit">
                <div class="w-20 h-20 overflow-hidden rounded-xl bg-white/10">
                    <img src="{{ asset($agent->image_url) }}"
                         alt="{{ $agent->name }}" class="w-full h-full object-contain"/>
                </div>
                <div>
                    <h1 class="text-5xl font-extrabold text-white">{{ $agent->name }}</h1>
                    <p class="text-md uppercase tracking-wide text-gray-300">{{ $agent->role }}</p>
                </div>
            </div>

            <div class="pl-4 max-w-3xl bg-mid/90 rounded-xl p-6">
                <p class="text-lg text-gray-200">{{ $agent->biography }}</p>
            </div>

            <div class="space-y-6 ml-auto w-fit">
                <h2 class="text-3xl font-extrabold text-white text-right">Abilities</h2>

                <div class="space-y-4">
                    @foreach (['ability1', 'ability2', 'ability3', 'ultimate'] as $slot)
                        <div class="bg-mid/90 px-6 py-4 rounded-xl shadow-md flex items-center gap-4 justify-end">

                            <div class="text-right">
                                <p class="text-lg font-semibold text-white leading-tight">{{ $agent->$slot }}</p>
                                <p class="text-sm text-gray-300">{{ $agent->{$slot . '_desc'} }}</p>
                            </div>

                            <div
                                class="w-16 h-16 bg-background p-3 rounded-full flex items-center justify-center shadow-xl shrink-0">
                                <img src="{{ asset($agent->{$slot . '_url'}) }}"
                                     alt="{{ $agent->$slot }}"
                                     class="w-full h-full object-contain"/>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
