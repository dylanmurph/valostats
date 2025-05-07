@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-background py-10 px-8">
        <div class="w-full max-w-7xl mx-auto">
            <h2 class="text-4xl font-bold text-aqua mb-10 text-center">Maps</h2>

            <div class="overflow-x-auto bg-surface rounded-xl shadow-lg">
                <table class="min-w-full w-full text-base text-left text-foreground border-collapse">
                    <thead class="uppercase text-xs bg-mid text-aqua tracking-wide border-b border-mid">
                    <tr>
                        <th class="px-6 py-4 text-center">Image</th>
                        <th class="px-6 py-4">Map Name</th>
                        <th class="px-6 py-4">Location</th>
                        <th class="px-6 py-4 text-center">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($maps as $map)
                        <tr class="border-b border-mid hover:bg-aqua-dark/10 transition-colors">
                            {{-- Image --}}
                            <td class="px-6 py-5 text-center">
                                <div class="w-52 aspect-[16/9] mx-auto rounded-md overflow-hidden border border-white/10">
                                    <img src="{{ asset($map->image_url) }}"
                                         alt="{{ $map->name }}"
                                         class="w-full h-full object-cover" />
                                </div>
                            </td>

                            {{-- Map Name --}}
                            <td class="px-6 py-5">
                                <a href="{{ route('maps.show', $map->id) }}"
                                   class="text-aqua font-semibold hover:underline">
                                    {{ $map->name }}
                                </a>
                            </td>

                            {{-- Location --}}
                            <td class="px-6 py-5">
                                <span class="text-sm text-gray-300">{{ $map->location }}</span>
                            </td>

                            {{-- View Details --}}
                            <td class="py-5 pl-6 pr-4 border-l border-mid text-center">
                                <a href="{{ route('maps.show', $map->id) }}"
                                   class="inline-block px-4 py-2 text-sm bg-mid text-aqua hover:bg-aqua-dark hover:text-white rounded transition whitespace-nowrap">
                                    View Details
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
