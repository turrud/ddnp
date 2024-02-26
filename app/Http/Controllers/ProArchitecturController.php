<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\ProArchitectur;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProArchitecturStoreRequest;
use App\Http\Requests\ProArchitecturUpdateRequest;

class ProArchitecturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', ProArchitectur::class);

        $search = $request->get('search', '');

        $proArchitecturs = ProArchitectur::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.pro_architecturs.index',
            compact('proArchitecturs', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', ProArchitectur::class);

        return view('app.pro_architecturs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProArchitecturStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', ProArchitectur::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $proArchitectur = ProArchitectur::create($validated);

        return redirect()
            ->route('pro-architecturs.edit', $proArchitectur)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, ProArchitectur $proArchitectur): View
    {
        $this->authorize('view', $proArchitectur);

        return view('app.pro_architecturs.show', compact('proArchitectur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, ProArchitectur $proArchitectur): View
    {
        $this->authorize('update', $proArchitectur);

        return view('app.pro_architecturs.edit', compact('proArchitectur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ProArchitecturUpdateRequest $request,
        ProArchitectur $proArchitectur
    ): RedirectResponse {
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

        return redirect()
            ->route('pro-architecturs.edit', $proArchitectur)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        ProArchitectur $proArchitectur
    ): RedirectResponse {
        $this->authorize('delete', $proArchitectur);

        if ($proArchitectur->image) {
            Storage::delete($proArchitectur->image);
        }

        if ($proArchitectur->file) {
            Storage::delete($proArchitectur->file);
        }

        $proArchitectur->delete();

        return redirect()
            ->route('pro-architecturs.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
