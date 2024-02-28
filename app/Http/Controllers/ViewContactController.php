<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class ViewContactController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('page.contact.index', compact('forms'));
    }

    public function create()
    {
        return view('page.contact.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'date' => 'required|date',
            'text' => 'required',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,ogg',
            'file' => 'nullable|file',
        ]);

        // Handle file upload here if necessary
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('uploads', 'public');
        }
        if ($request->hasFile('video')) {
            $validatedData['video'] = $request->file('video')->store('uploads', 'public');
        }
        if ($request->hasFile('file')) {
            $validatedData['file'] = $request->file('file')->store('uploads', 'public');
        }

        Form::create($validated);
        return redirect()->route('forms.create')->with('success', 'Form created successfully.');
    }

    public function show(Form $form)
    {
        return view('page.contact.show', compact('form'))->with('success', 'Form deleted successfully.');
    }

    public function edit(Form $form)
    {
        return view('page.contact.edit', compact('form'))->with('success', 'Form update successfully.');
    }

    public function update(Request $request, Form $form)
    {
        $validated = $request->validate([
            // Validation rules
            'name' => 'required',
            'email' => 'required|email',
            'nomor_telepon' => 'required',
            'date' => 'required|date',
            'text' => 'required',
            'image' => 'nullable|image',
            'video' => 'nullable|mimes:mp4,mov,ogg',
            'file' => 'nullable|file',
        ]);

        // Handle file upload here if necessary
        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('uploads', 'public');
        }
        if ($request->hasFile('video')) {
            $validatedData['video'] = $request->file('video')->store('uploads', 'public');
        }
        if ($request->hasFile('file')) {
            $validatedData['file'] = $request->file('file')->store('uploads', 'public');
        }

        $form->update($validated);
        return redirect()->route('forms.index')->with('success', 'Form updated successfully.');
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('forms.index')->with('success', 'Form deleted successfully.');
    }

    public function __construct()
{
    $this->middleware(['auth:sanctum', 'verified'])->except(['create', 'store']);
}

}