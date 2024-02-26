<?php

namespace App\Http\Controllers\Api;

use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\AwardResource;
use App\Http\Resources\AwardCollection;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AwardStoreRequest;
use App\Http\Requests\AwardUpdateRequest;

class AwardController extends Controller
{
    public function index(Request $request): AwardCollection
    {
        $this->authorize('view-any', Award::class);

        $search = $request->get('search', '');

        $awards = Award::search($search)
            ->latest()
            ->paginate();

        return new AwardCollection($awards);
    }

    public function store(AwardStoreRequest $request): AwardResource
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

        return new AwardResource($award);
    }

    public function show(Request $request, Award $award): AwardResource
    {
        $this->authorize('view', $award);

        return new AwardResource($award);
    }

    public function update(
        AwardUpdateRequest $request,
        Award $award
    ): AwardResource {
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

        return new AwardResource($award);
    }

    public function destroy(Request $request, Award $award): Response
    {
        $this->authorize('delete', $award);

        if ($award->image) {
            Storage::delete($award->image);
        }

        if ($award->file) {
            Storage::delete($award->file);
        }

        $award->delete();

        return response()->noContent();
    }
}
