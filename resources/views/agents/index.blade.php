@extends('layouts.app')

@section('content')
    <div class="w-full max-w-[1330px] mx-auto py-10 px-6 text-white">
        <h2 class="text-4xl font-bold text-aqua mb-10 text-center">All Agents</h2>

        @foreach ($agents as $role => $group)
            <div class="bg-mid rounded-xl px-6 py-8 mb-12 shadow-md w-full">
                <h3 class="text-2xl text-center font-semibold text-aqua mb-4">{{ $role }}</h3>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($group as $agent)
                        <a href="{{ route('agents.show', $agent->id) }}"
                           class="relative bg-surface rounded-xl overflow-hidden shadow hover:shadow-xl transition group">

                            <div class="w-full h-52 overflow-hidden">
                                <img src="{{ asset($agent->image_url) }}"
                                     alt="{{ $agent->name }}"
                                     class="w-full h-full object-cover transform scale-100 group-hover:scale-110 transition-transform duration-300 ease-out" />
                            </div>

                            <div class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/80 to-transparent px-4 py-3 z-10 text-center">
                                <div class="text-lg font-bold text-white group-hover:text-aqua">
                                    {{ $agent->name }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
