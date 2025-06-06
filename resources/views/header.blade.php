<div class="sticky top-0 z-10 w-full bg-mid">
    <header class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between shadow-xl">

        <!-- Left: Logo / Site Title -->
        <a href="{{ route('home') }}" class="text-aqua text-2xl font-bold tracking-wide">
            <div class="w-10 h-10 gap-1 flex items-center justify-center">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="bg-aqua p-1 rounded-md object-contain" />
                VALOSTATS
            </div>
        </a>

        <!-- Right: Navigation Links -->
        <nav class="space-x-6 text-sm">
            <a href="{{ route('players.index') }}" class="text-slate-300 hover:text-aqua transition">Leaderboard</a>
            <a href="{{ route('agents.index') }}" class="text-slate-300 hover:text-aqua transition">Agents</a>
            <a href="{{ route('maps.index') }}" class="text-slate-300 hover:text-aqua transition">Maps</a>
        </nav>

    </header>
</div>
