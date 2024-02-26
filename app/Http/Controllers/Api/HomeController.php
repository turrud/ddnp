<?php

namespace App\Http\Controllers\Api;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\HomeResource;
use App\Http\Controllers\Controller;
use App\Http\Resources\HomeCollection;
use App\Http\Requests\HomeStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\HomeUpdateRequest;

class HomeController extends Controller
{
    public function index(Request $request): HomeCollection
    {
        $this->authorize('view-any', Home::class);

        $search = $request->get('search', '');

        $homes = Home::search($search)
            ->latest()
            ->paginate();

        return new HomeCollection($homes);
    }

    public function store(HomeStoreRequest $request): HomeResource
    {
        $this->authorize('create', Home::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $home = Home::create($validated);

        return new HomeResource($home);
    }

    public function show(Request $request, Home $home): HomeResource
    {
        $this->authorize('view', $home);

        return new HomeResource($home);
    }

    public function update(HomeUpdateRequest $request, Home $home): HomeResource
    {
        $this->authorize('update', $home);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($home->image) {
                Storage::delete($home->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($home->file) {
                Storage::delete($home->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $home->update($validated);

        return new HomeResource($home);
    }

    public function destroy(Request $request, Home $home): Response
    {
        $this->authorize('delete', $home);

        if ($home->image) {
            Storage::delete($home->image);
        }

        if ($home->file) {
            Storage::delete($home->file);
        }

        $home->delete();

        return response()->noContent();
    }
}
