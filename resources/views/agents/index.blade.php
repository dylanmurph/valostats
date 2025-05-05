@extends('layouts.app')
@section('content')
    <div class="max-w-6xl mx-auto py-12 text-white">
        <h2 class="text-2xl font-bold text-cyan-300 mb-6">All Agents</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($agents as $agent)
                <a href="{{ route('agents.show', $agent->id) }}" class="bg-cyan-900 rounded-lg overflow-hidden shadow hover:shadow-xl">
                    <img src="/{{ $agent->image_url }}" alt="{{ $agent->name }}" class="w-full h-40 object-cover">
                    <div class="p-4 text-center">{{ $agent->name }}</div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
