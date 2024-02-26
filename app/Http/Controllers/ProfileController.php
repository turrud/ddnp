<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProfileStoreRequest;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Profile::class);

        $search = $request->get('search', '');

        $profiles = Profile::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.profiles.index', compact('profiles', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Profile::class);

        return view('app.profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Profile::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $profile = Profile::create($validated);

        return redirect()
            ->route('profiles.edit', $profile)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Profile $profile): View
    {
        $this->authorize('view', $profile);

        return view('app.profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Profile $profile): View
    {
        $this->authorize('update', $profile);

        return view('app.profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ProfileUpdateRequest $request,
        Profile $profile
    ): RedirectResponse {
        $this->authorize('update', $profile);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($profile->image) {
                Storage::delete($profile->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($profile->file) {
                Storage::delete($profile->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $profile->update($validated);

        return redirect()
            ->route('profiles.edit', $profile)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Profile $profile
    ): RedirectResponse {
        $this->authorize('delete', $profile);

        if ($profile->image) {
            Storage::delete($profile->image);
        }

        if ($profile->file) {
            Storage::delete($profile->file);
        }

        $profile->delete();

        return redirect()
            ->route('profiles.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
