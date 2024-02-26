<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ClientCollection;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;

class ClientController extends Controller
{
    public function index(Request $request): ClientCollection
    {
        $this->authorize('view-any', Client::class);

        $search = $request->get('search', '');

        $clients = Client::search($search)
            ->latest()
            ->paginate();

        return new ClientCollection($clients);
    }

    public function store(ClientStoreRequest $request): ClientResource
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

        return new ClientResource($client);
    }

    public function show(Request $request, Client $client): ClientResource
    {
        $this->authorize('view', $client);

        return new ClientResource($client);
    }

    public function update(
        ClientUpdateRequest $request,
        Client $client
    ): ClientResource {
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

        return new ClientResource($client);
    }

    public function destroy(Request $request, Client $client): Response
    {
        $this->authorize('delete', $client);

        if ($client->image) {
            Storage::delete($client->image);
        }

        if ($client->file) {
            Storage::delete($client->file);
        }

        $client->delete();

        return response()->noContent();
    }
}
