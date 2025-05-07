@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto py-12 text-white">
        <h2 class="text-2xl font-bold text-cyan-300 mb-6">All Maps</h2>

        <ul class="space-y-8">
            @foreach ($maps as $map)
                <li class="bg-cyan-900 rounded-xl shadow p-6 flex flex-col md:flex-row gap-6">
                    <img src="/{{ $map->image_url }}" alt="{{ $map->name }}" class="w-full md:w-48 h-32 object-cover rounded-md">

                    <div class="flex-1">
                        <h3 class="text-xl font-semibold text-cyan-200">{{ $map->name }}</h3>

                        <p class="mt-2 text-sm text-gray-300">
                            <strong>Location:</strong> {{ $map->location ?? 'Unknown' }}
                        </p>

                        <p class="mt-2 text-sm text-gray-300">
                            {{ $map->description ?? 'No description available.' }}
                        </p>

                        @if ($map->minimap_url)
                            <div class="mt-4">
                                <h4 class="text-sm font-medium text-cyan-400 mb-1">Minimap</h4>
                                <img src="/{{ $map->minimap_url }}" alt="{{ $map->name }} Minimap" class="w-64 h-40 object-contain rounded border border-cyan-700">
                            </div>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
