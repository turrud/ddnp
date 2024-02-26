<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ProjectInterior;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ProjectInteriorResource;
use App\Http\Resources\ProjectInteriorCollection;
use App\Http\Requests\ProjectInteriorStoreRequest;
use App\Http\Requests\ProjectInteriorUpdateRequest;

class ProjectInteriorController extends Controller
{
    public function index(Request $request): ProjectInteriorCollection
    {
        $this->authorize('view-any', ProjectInterior::class);

        $search = $request->get('search', '');

        $projectInteriors = ProjectInterior::search($search)
            ->latest()
            ->paginate();

        return new ProjectInteriorCollection($projectInteriors);
    }

    public function store(
        ProjectInteriorStoreRequest $request
    ): ProjectInteriorResource {
        $this->authorize('create', ProjectInterior::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $projectInterior = ProjectInterior::create($validated);

        return new ProjectInteriorResource($projectInterior);
    }

    public function show(
        Request $request,
        ProjectInterior $projectInterior
    ): ProjectInteriorResource {
        $this->authorize('view', $projectInterior);

        return new ProjectInteriorResource($projectInterior);
    }

    public function update(
        ProjectInteriorUpdateRequest $request,
        ProjectInterior $projectInterior
    ): ProjectInteriorResource {
        $this->authorize('update', $projectInterior);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($projectInterior->image) {
                Storage::delete($projectInterior->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($projectInterior->file) {
                Storage::delete($projectInterior->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $projectInterior->update($validated);

        return new ProjectInteriorResource($projectInterior);
    }

    public function destroy(
        Request $request,
        ProjectInterior $projectInterior
    ): Response {
        $this->authorize('delete', $projectInterior);

        if ($projectInterior->image) {
            Storage::delete($projectInterior->image);
        }

        if ($projectInterior->file) {
            Storage::delete($projectInterior->file);
        }

        $projectInterior->delete();

        return response()->noContent();
    }
}
