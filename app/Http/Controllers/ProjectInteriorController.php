<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\ProjectInterior;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProjectInteriorStoreRequest;
use App\Http\Requests\ProjectInteriorUpdateRequest;

class ProjectInteriorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', ProjectInterior::class);

        $search = $request->get('search', '');

        $projectInteriors = ProjectInterior::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.project_interiors.index',
            compact('projectInteriors', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', ProjectInterior::class);

        return view('app.project_interiors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(
        ProjectInteriorStoreRequest $request
    ): RedirectResponse {
        $this->authorize('create', ProjectInterior::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $projectInterior = ProjectInterior::create($validated);

        return redirect()
            ->route('project-interiors.edit', $projectInterior)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(
        Request $request,
        ProjectInterior $projectInterior
    ): View {
        $this->authorize('view', $projectInterior);

        return view('app.project_interiors.show', compact('projectInterior'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(
        Request $request,
        ProjectInterior $projectInterior
    ): View {
        $this->authorize('update', $projectInterior);

        return view('app.project_interiors.edit', compact('projectInterior'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ProjectInteriorUpdateRequest $request,
        ProjectInterior $projectInterior
    ): RedirectResponse {
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

        return redirect()
            ->route('project-interiors.edit', $projectInterior)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        ProjectInterior $projectInterior
    ): RedirectResponse {
        $this->authorize('delete', $projectInterior);

        if ($projectInterior->image) {
            Storage::delete($projectInterior->image);
        }

        if ($projectInterior->file) {
            Storage::delete($projectInterior->file);
        }

        $projectInterior->delete();

        return redirect()
            ->route('project-interiors.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
