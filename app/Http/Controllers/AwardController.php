<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AwardStoreRequest;
use App\Http\Requests\AwardUpdateRequest;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Award::class);

        $search = $request->get('search', '');

        $awards = Award::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.awards.index', compact('awards', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Award::class);

        return view('app.awards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AwardStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Award::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $award = Award::create($validated);

        return redirect()
            ->route('awards.edit', $award)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Award $award): View
    {
        $this->authorize('view', $award);

        return view('app.awards.show', compact('award'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Award $award): View
    {
        $this->authorize('update', $award);

        return view('app.awards.edit', compact('award'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        AwardUpdateRequest $request,
        Award $award
    ): RedirectResponse {
        $this->authorize('update', $award);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($award->image) {
                Storage::delete($award->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($award->file) {
                Storage::delete($award->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $award->update($validated);

        return redirect()
            ->route('awards.edit', $award)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Award $award): RedirectResponse
    {
        $this->authorize('delete', $award);

        if ($award->image) {
            Storage::delete($award->image);
        }

        if ($award->file) {
            Storage::delete($award->file);
        }

        $award->delete();

        return redirect()
            ->route('awards.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
