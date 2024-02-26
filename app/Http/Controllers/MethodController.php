<?php

namespace App\Http\Controllers;

use App\Models\Method;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MethodStoreRequest;
use App\Http\Requests\MethodUpdateRequest;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Method::class);

        $search = $request->get('search', '');

        $methods = Method::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.methods.index', compact('methods', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Method::class);

        return view('app.methods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MethodStoreRequest $request): RedirectResponse
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

        return redirect()
            ->route('methods.edit', $method)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Method $method): View
    {
        $this->authorize('view', $method);

        return view('app.methods.show', compact('method'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Method $method): View
    {
        $this->authorize('update', $method);

        return view('app.methods.edit', compact('method'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        MethodUpdateRequest $request,
        Method $method
    ): RedirectResponse {
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

        return redirect()
            ->route('methods.edit', $method)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Method $method): RedirectResponse
    {
        $this->authorize('delete', $method);

        if ($method->image) {
            Storage::delete($method->image);
        }

        if ($method->file) {
            Storage::delete($method->file);
        }

        $method->delete();

        return redirect()
            ->route('methods.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
