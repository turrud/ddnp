@extends('page.layout.main')

@section('title', 'Contact Us')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h2>View Contact</h2>
        <!-- Display contact details -->
        <div class="card">
            <div class="card-body">
                            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Date</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $form->name }}</td>
                        <td>{{ $form->email }}</td>
                        <td>{{ $form->nomor_telepon }}</td>
                        <td>{{ $form->date }}</td>
                        <td>{{ $form->text }}</td>

                    </tr>

                </tbody>
            </table>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('forms.show', $form->id) }}" class="btn berubah btn-sm">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <a href="{{ route('forms.edit', $form->id) }}" class="btn berubah btn-sm">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <form action="{{ route('forms.destroy', $form->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn berubah btn-sm">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </form>
                </div>

                <div>
                    <!-- Tombol Back -->
                    <a href="{{ route('forms.index') }}" class="btn berubah btn-sm">
                        <i class="bi bi-backspace-fill"></i>
                    </a>

                </div>
            </div>


            </div>
        </div>
    </div>
</div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

        @if (session()->has('success'))
        <script>
            var notyf = new Notyf({dismissible: true})
            notyf.success('{{ session('success') }}')
        </script>
        @endif

@endsection
