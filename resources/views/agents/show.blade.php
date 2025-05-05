@extends('layouts.app')
@section('content')
    <div class="max-w-3xl mx-auto py-12 text-white">
        <h2 class="text-2xl font-bold text-cyan-300 mb-4">Agent: {{ $agent->name }}</h2>
        <img src="/{{ $agent->image_url }}" alt="{{ $agent->name }}" class="rounded shadow mb-6">
        <p class="text-lg">Role: <span class="text-cyan-200">{{ $agent->role }}</span></p>
    </div>
@endsection
