<?php

namespace App\Http\Controllers\Api;

use App\Models\Method;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\MethodResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\MethodCollection;
use App\Http\Requests\MethodStoreRequest;
use App\Http\Requests\MethodUpdateRequest;

class MethodController extends Controller
{
    public function index(Request $request): MethodCollection
    {
        $this->authorize('view-any', Method::class);

        $search = $request->get('search', '');

        $methods = Method::search($search)
            ->latest()
            ->paginate();

        return new MethodCollection($methods);
    }

    public function store(MethodStoreRequest $request): MethodResource
    {
        $this->authorize('create', Method::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $method = Method::create($validated);

        return new MethodResource($method);
    }

    public function show(Request $request, Method $method): MethodResource
    {
        $this->authorize('view', $method);

        return new MethodResource($method);
    }

    public function update(
        MethodUpdateRequest $request,
        Method $method
    ): MethodResource {
        $this->authorize('update', $method);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($method->image) {
                Storage::delete($method->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($method->file) {
                Storage::delete($method->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $method->update($validated);

        return new MethodResource($method);
    }

    public function destroy(Request $request, Method $method): Response
    {
        $this->authorize('delete', $method);

        if ($method->image) {
            Storage::delete($method->image);
        }

        if ($method->file) {
            Storage::delete($method->file);
        }

        $method->delete();

        return response()->noContent();
    }
}
