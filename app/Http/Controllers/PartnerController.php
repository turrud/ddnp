<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PartnerStoreRequest;
use App\Http\Requests\PartnerUpdateRequest;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Partner::class);

        $search = $request->get('search', '');

        $partners = Partner::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.partners.index', compact('partners', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Partner::class);

        return view('app.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartnerStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Partner::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $partner = Partner::create($validated);

        return redirect()
            ->route('partners.edit', $partner)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Partner $partner): View
    {
        $this->authorize('view', $partner);

        return view('app.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Partner $partner): View
    {
        $this->authorize('update', $partner);

        return view('app.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        PartnerUpdateRequest $request,
        Partner $partner
    ): RedirectResponse {
        $this->authorize('update', $partner);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($partner->image) {
                Storage::delete($partner->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($partner->file) {
                Storage::delete($partner->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $partner->update($validated);

        return redirect()
            ->route('partners.edit', $partner)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Partner $partner
    ): RedirectResponse {
        $this->authorize('delete', $partner);

        if ($partner->image) {
            Storage::delete($partner->image);
        }

        if ($partner->file) {
            Storage::delete($partner->file);
        }

        $partner->delete();

        return redirect()
            ->route('partners.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
