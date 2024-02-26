<?php

namespace App\Http\Controllers\Api;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\AboutCollection;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AboutStoreRequest;
use App\Http\Requests\AboutUpdateRequest;

class AboutController extends Controller
{
    public function index(Request $request): AboutCollection
    {
        $this->authorize('view-any', About::class);

        $search = $request->get('search', '');

        $abouts = About::search($search)
            ->latest()
            ->paginate();

        return new AboutCollection($abouts);
    }

    public function store(AboutStoreRequest $request): AboutResource
    {
        $this->authorize('create', About::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $about = About::create($validated);

        return new AboutResource($about);
    }

    public function show(Request $request, About $about): AboutResource
    {
        $this->authorize('view', $about);

        return new AboutResource($about);
    }

    public function update(
        AboutUpdateRequest $request,
        About $about
    ): AboutResource {
        $this->authorize('update', $about);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($about->image) {
                Storage::delete($about->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($about->file) {
                Storage::delete($about->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $about->update($validated);

        return new AboutResource($about);
    }

    public function destroy(Request $request, About $about): Response
    {
        $this->authorize('delete', $about);

        if ($about->image) {
            Storage::delete($about->image);
        }

        if ($about->file) {
            Storage::delete($about->file);
        }

        $about->delete();

        return response()->noContent();
    }
}
