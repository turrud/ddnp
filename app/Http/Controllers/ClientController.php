<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Client::class);

        $search = $request->get('search', '');

        $clients = Client::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.clients.index', compact('clients', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Client::class);

        return view('app.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Client::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            $validated['file'] = $request->file('file')->store('public');
        }

        $client = Client::create($validated);

        return redirect()
            ->route('clients.edit', $client)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Client $client): View
    {
        $this->authorize('view', $client);

        return view('app.clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Client $client): View
    {
        $this->authorize('update', $client);

        return view('app.clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ClientUpdateRequest $request,
        Client $client
    ): RedirectResponse {
        $this->authorize('update', $client);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($client->image) {
                Storage::delete($client->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        if ($request->hasFile('file')) {
            if ($client->file) {
                Storage::delete($client->file);
            }

            $validated['file'] = $request->file('file')->store('public');
        }

        $client->update($validated);

        return redirect()
            ->route('clients.edit', $client)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Client $client): RedirectResponse
    {
        $this->authorize('delete', $client);

        if ($client->image) {
            Storage::delete($client->image);
        }

        if ($client->file) {
            Storage::delete($client->file);
        }

        $client->delete();

        return redirect()
            ->route('clients.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
