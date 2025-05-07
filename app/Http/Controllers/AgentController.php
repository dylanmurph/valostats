<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class AgentController extends Controller
{
    public function index(): View
    {
        $agents = Agent::whereNotNull('role')
            ->orderBy('role')
            ->orderBy('name')
            ->get()
            ->groupBy('role');

        return view('agents.index', compact('agents'));
    }

    public function create(): View
    {
        return view('agents.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('agents.index');
    }

    public function show(string $id): View
    {
        return view('agents.show', compact('id'));
    }

    public function edit(string $id): View
    {
        return view('agents.edit', compact('id'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        return redirect()->route('agents.show', $id);
    }

    public function destroy(string $id): RedirectResponse
    {
        return redirect()->route('agents.index');
    }
}
