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
        Agent::create($request->validate([
            'name' => 'required|string|unique:agents,name',
            'role' => 'required|string',
            'image_url' => 'nullable|string',
            'bg_url' => 'nullable|string',
            'biography' => 'nullable|string',
            'ability1' => 'nullable|string',
            'ability2' => 'nullable|string',
            'ability3' => 'nullable|string',
            'ultimate' => 'nullable|string',
            'ability1_desc' => 'nullable|string',
            'ability2_desc' => 'nullable|string',
            'ability3_desc' => 'nullable|string',
            'ultimate_desc' => 'nullable|string',
            'ability1_url' => 'nullable|string',
            'ability2_url' => 'nullable|string',
            'ability3_url' => 'nullable|string',
            'ultimate_url' => 'nullable|string',
        ]));

        return redirect()->route('agents.index');
    }

    public function show(string $id): View
    {
        $agent = Agent::findOrFail($id);
        return view('agents.show', compact('agent'));
    }

    public function edit(string $id): View
    {
        $agent = Agent::findOrFail($id);
        return view('agents.edit', compact('agent'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $agent = Agent::findOrFail($id);

        $agent->update($request->validate([
            'name' => 'required|string|unique:agents,name,' . $id,
            'role' => 'required|string',
            'image_url' => 'nullable|string',
            'bg_url' => 'nullable|string',
            'biography' => 'nullable|string',
            'ability1' => 'nullable|string',
            'ability2' => 'nullable|string',
            'ability3' => 'nullable|string',
            'ultimate' => 'nullable|string',
            'ability1_desc' => 'nullable|string',
            'ability2_desc' => 'nullable|string',
            'ability3_desc' => 'nullable|string',
            'ultimate_desc' => 'nullable|string',
            'ability1_url' => 'nullable|string',
            'ability2_url' => 'nullable|string',
            'ability3_url' => 'nullable|string',
            'ultimate_url' => 'nullable|string',
        ]));

        return redirect()->route('agents.show', $agent->id);
    }

    public function destroy(string $id): RedirectResponse
    {
        Agent::destroy($id);
        return redirect()->route('agents.index');
    }
}
