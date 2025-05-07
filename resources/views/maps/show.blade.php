@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-background py-16 px-8 text-white">
        <div class="w-full max-w-6xl mx-auto flex flex-col items-center gap-6">

            <div class="relative w-full aspect-[16/9] overflow-hidden rounded-xl border border-white/10 shadow">

                <img src="{{ asset($map->image_url) }}"
                     alt="{{ $map->name }}"
                     class="w-full h-full object-cover" />

                <div class="absolute inset-0 bg-gradient-to-t from-background/95 via-background/60 to-transparent z-10"></div>

                <div class="absolute bottom-0 left-0 z-20 p-6">
                    <h2 class="text-7xl font-extrabold text-white tracking-wide drop-shadow mb-6">
                        {{ $map->name }}
                    </h2>

                    <div class="flex items-center text-sm text-gray-300 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 24 24"
                             fill="currentColor"
                             class="w-6 h-6 mr-2 text-aqua">
                            <path d="M12 2C8.14 2 5 5.14 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.86-3.14-7-7-7zm0 9.75a2.75 2.75 0 1 1 0-5.5 2.75 2.75 0 0 1 0 5.5z"/>
                        </svg>
                        {{ $map->location }}
                    </div>

                </div>
            </div>

            <div class="bg-mid rounded-xl p-6 shadow-md text-white grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="col-span-2 flex flex-col gap-4">
                    <div class="text-gray-300 space-y-2 text-sm leading-relaxed">
                        <h4 class="text-lg font-semibold text-aqua">Description</h4>
                            {{ $map->description }}
                    </div>
                </div>

                <div class="flex flex-col items-center">
                    <h4 class="text-lg font-semibold text-aqua">Minimap</h4>
                    <div class="w-full overflow-hidden">
                        <img src="{{ asset($map->minimap_url) }}" class="w-full h-full object-contain"  alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
