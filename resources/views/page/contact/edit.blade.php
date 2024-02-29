@extends('page.layout.main')

@section('title', 'Contact Us')

@section('content')
@if(session('success'))
    <p>{{ session('success') }}</p>
@endif
<div class="col text-center wow fadeInUp" data-wow-delay="0.5s">
    <p class="mb-4">Dive into a world of design creativity and expertise with us. Reach out today to start the conversation."</p>
    <form action="{{ route('forms.update', $form->id) }}" method="PUT" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">
            <div class="row justify-content-center g-3">
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required autofocus value="{{ old('name', $form->name) }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" required autofocus value="{{ old('email', $form->email) }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="email">Your Email</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-3">
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="number" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" placeholder="nomor_telepon" required autofocus value="{{ old('nomor_telepon', $form->nomor_telepon) }}">
                        @error('nomor_telepon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="nomor_telepon">No Handphone</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date" placeholder="date" required autofocus value="{{ old('date', $form->date) }}">
                        @error('date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="date">Meeting Date</label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-3">
                <div class="col-md-8">
                    <div class="form-floating">
                        <textarea class="form-control @error('text') is-invalid @enderror" placeholder="Leave a message here" name="text" id="text" style="height: 150px" required autofocus>{{ old('text', $form->text ?? '') }}</textarea>
                        <label for="text">Message</label>
                        @error('text')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
                <div class=" row mt-5 justify-content-center">
                    <div class="col-md-8 d-flex justify-content-md-between">
                        <!-- Tombol Update Message di sebelah kiri -->
                        <button class="btn berubah btn-sm" type="submit"><i class="bi bi-send-check-fill"></i></button>

                        <!-- Tombol Back di sebelah kanan -->
                        <a href="{{ route('forms.index') }}" class="btn berubah btn-sm">
                            <i class="bi bi-box-arrow-left"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </form>
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
