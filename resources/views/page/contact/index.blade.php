@extends('page.layout.main')

@section('title', 'Contact Us')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>List</h2>
            <hr>
            <div class="mb-5 berubah line">

                <a href="{{ route('forms.create') }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-file-earmark-plus-fill"></i>
                </a>

            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Nomor Telepon</th>
                        <th>Date</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                    <tr>
                        <td>{{ $form->name }}</td>
                        <td>{{ $form->email }}</td>
                        <td>{{ $form->nomor_telepon }}</td>
                        <td>{{ $form->date }}</td>
                        <td>{{ $form->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('forms.show', $form->id) }}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a href="{{ route('forms.edit', $form->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{ route('forms.destroy', $form->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                                </button>
                            </form>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
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
