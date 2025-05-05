@extends('layouts.app')
@section('content')
    <div class="max-w-3xl mx-auto py-12 text-white">
        <h2 class="text-2xl font-bold text-cyan-300 mb-4">Map: {{ $map->name }}</h2>
        <img src="/{{ $map->image_url }}" alt="{{ $map->name }}" class="rounded shadow mb-6">
    </div>
@endsection
