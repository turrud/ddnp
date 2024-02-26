<?php

namespace App\Http\Controllers\Api;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\TeamResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\TeamCollection;
use App\Http\Requests\TeamStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TeamUpdateRequest;

class TeamController extends Controller
{
    public function index(Request $request): TeamCollection
    {
        $this->authorize('view-any', Team::class);

        $search = $request->get('search', '');

        $teams = Team::search($search)
            ->latest()
            ->paginate();

        return new TeamCollection($teams);
    }

    public function store(TeamStoreRequest $request): TeamResource
    {
        $this->authorize('create', Team::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $team = Team::create($validated);

        return new TeamResource($team);
    }

    public function show(Request $request, Team $team): TeamResource
    {
        $this->authorize('view', $team);

        return new TeamResource($team);
    }

    public function update(TeamUpdateRequest $request, Team $team): TeamResource
    {
        $this->authorize('update', $team);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::delete($team->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($team->file) {
                Storage::delete($team->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $team->update($validated);

        return new TeamResource($team);
    }

    public function destroy(Request $request, Team $team): Response
    {
        $this->authorize('delete', $team);

        if ($team->image) {
            Storage::delete($team->image);
        }

        if ($team->file) {
            Storage::delete($team->file);
        }

        $team->delete();

        return response()->noContent();
    }
}
