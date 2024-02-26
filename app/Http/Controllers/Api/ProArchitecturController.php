<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ProArchitectur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ProArchitecturResource;
use App\Http\Resources\ProArchitecturCollection;
use App\Http\Requests\ProArchitecturStoreRequest;
use App\Http\Requests\ProArchitecturUpdateRequest;

class ProArchitecturController extends Controller
{
    public function index(Request $request): ProArchitecturCollection
    {
        $this->authorize('view-any', ProArchitectur::class);

        $search = $request->get('search', '');

        $proArchitecturs = ProArchitectur::search($search)
            ->latest()
            ->paginate();

        return new ProArchitecturCollection($proArchitecturs);
    }

    public function store(
        ProArchitecturStoreRequest $request
    ): ProArchitecturResource {
        $this->authorize('create', ProArchitectur::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $proArchitectur = ProArchitectur::create($validated);

        return new ProArchitecturResource($proArchitectur);
    }

    public function show(
        Request $request,
        ProArchitectur $proArchitectur
    ): ProArchitecturResource {
        $this->authorize('view', $proArchitectur);

        return new ProArchitecturResource($proArchitectur);
    }

    public function update(
        ProArchitecturUpdateRequest $request,
        ProArchitectur $proArchitectur
    ): ProArchitecturResource {
        $this->authorize('update', $proArchitectur);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($proArchitectur->image) {
                Storage::delete($proArchitectur->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($proArchitectur->file) {
                Storage::delete($proArchitectur->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $proArchitectur->update($validated);

        return new ProArchitecturResource($proArchitectur);
    }

    public function destroy(
        Request $request,
        ProArchitectur $proArchitectur
    ): Response {
        $this->authorize('delete', $proArchitectur);

        if ($proArchitectur->image) {
            Storage::delete($proArchitectur->image);
        }

        if ($proArchitectur->file) {
            Storage::delete($proArchitectur->file);
        }

        $proArchitectur->delete();

        return response()->noContent();
    }
}
