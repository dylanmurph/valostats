<div class="w-full bg-mid shadow-sm">
    <header class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- Left: Logo / Site Title -->
        <a href="{{ route('home') }}" class="text-aqua text-2xl font-bold tracking-wide">
            Valorant Stats
        </a>

        <!-- Right: Navigation Links -->
        <nav class="space-x-6 text-sm">
            <a href="{{ route('players.index') }}" class="text-slate-300 hover:text-aqua transition">Players</a>
            <a href="{{ route('agents.index') }}" class="text-slate-300 hover:text-aqua transition">Agents</a>
        </nav>

    </header>
</div>
