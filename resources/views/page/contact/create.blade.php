@extends('page.layout.main')

@section('title', 'Contact Us')

@section('content')
<hr class="container">

<!-- Contact Start -->
    <div class="container py-5">
        <div class="container">
            <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h2 class="display-5">"Dreaming of a new space? Let's chat and bring your space to life"</h2>
            </div>
            <div class="row g-5">

                <div class="col text-center wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Dive into a world of design creativity and expertise with us. Reach out today to start the conversation."</p>
                    <form action="{{ route('forms.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="row justify-content-center g-3">
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required autofocus value="{{ old('name') }}">
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
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" required autofocus value="{{ old('email') }}">
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
                                        <input type="number" name="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" id="nomor_telepon" placeholder="nomor_telepon" required autofocus value="{{ old('nomor_telepon') }}">
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
                                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date" placeholder="date" required autofocus value="{{ old('date') }}">
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
                                        <textarea class="form-control @error('text') is-invalid @enderror" placeholder="Leave a message here" name="text" id="text" style="height: 150px" required autofocus>{{ old('text') }}</textarea>
                                        <label for="text">Message</label>
                                        @error('text')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-5">
                                    <button class="btn btn-success btn-sm " type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Contact End -->



<!-- Google Map Start -->
    <div class="mt-5 px-0 wow fadeIn d-flex justify-content-center" data-wow-delay="0.1s">
        <div style="text-decoration:none; overflow:hidden;max-width:100%;width: 88%;height:350px;"><div id="google-maps-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=PT.+Dananjaya+Design+Nusantara,+Jalan+Pagermaneuh+terusan+dago+punclut,+Pagerwangi,+Bandung+City,+West+Java,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="our-googlemap-code" href="https://www.bootstrapskins.com/themes" id="grab-map-data">premium bootstrap themes</a><style>#google-maps-canvas .text-marker{}.map-generator{max-width: 100%; max-height: 100%; background: none;</style></div>
    </div>

<!-- Google Map End -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

        @if (session()->has('success'))
        <script>
            var notyf = new Notyf({dismissible: true})
            notyf.success('{{ session('success') }}')
        </script>
        @endif

@endsection

