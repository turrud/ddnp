@extends('page.layout.main')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <h2>janji temu sama pak bokin</h2>
    <form action="{{ route('contacts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Text</label>
            <textarea class="form-control" id="text" name="text"></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="mb-3">
            <label for="video" class="form-label">Video</label>
            <input type="file" class="form-control" id="video" name="video">
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">File</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
