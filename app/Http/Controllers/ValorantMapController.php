<?php

namespace App\Http\Controllers;

use App\Models\ValorantMap;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ValorantMapController extends Controller
{
    public function index(): View
    {
        $maps = ValorantMap::all();
        return view('maps.index', compact('maps'));
    }

    public function create(): View
    {
        return view('maps.create');
    }

    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('maps.index');
    }

    public function show(string $id): View
    {
        return view('maps.show', compact('id'));
    }

    public function edit(string $id): View
    {
        return view('maps.edit', compact('id'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        return redirect()->route('maps.show', $id);
    }

    public function destroy(string $id): RedirectResponse
    {
        return redirect()->route('maps.index');
    }
}
