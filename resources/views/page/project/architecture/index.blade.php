@extends('page.layout.main')

@section('title', 'Architecture Design Detail')

@section('content')
<hr class="container">

    <div class="container">
        <div class="row mt-3 wow fadeInUp" data-wow-delay="0.1s" id="projectContainer">
            @foreach ($proArchitecturs as $proArchitectur)
                <div class="col-md-4 mb-4 projectArchitecture" style="display: none;">
                    <a href="{{ route('projects.architecture_design.show', ['archiId' => $proArchitectur->id]) }}">
                        <div class="card">
                            <img src="{{ $proArchitectur->imgurl }}" class="card-img-top" alt="Image">
                            {{-- <div class="card-body">
                                <h5 class="card-title">{{ $proArchitectur->name }}</h5>
                                <p class="card-text">{{ $proArchitectur->text }}</p>
                                <a href="{{ $proArchitectur->url }}" class="btn btn-primary">Go somewhere</a>
                            </div> --}}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <button class="btn berubah mt-4 btn-sm" id="seeMore" style="border: none;">
            <blockquote class="blockquote text-center">
                <footer class="blockquote-footer berubah">more <i class="bi bi-eye-fill"></i></footer>
            </blockquote>
        </button>
    </div>


    <style>
        .card-img-top {
        transition: transform 0.3s ease; /* Menentukan durasi dan jenis transisi */
        object-fit: cover; /* Memastikan gambar menutupi area tanpa kehilangan proporsi */
        width: 100%; /* Lebar gambar sesuai dengan container */
        height: auto; /* Tinggi gambar disesuaikan secara otomatis */
        }

        .card:hover .card-img-top {
            transform: scale(1.05); /* Membesarkan gambar sebesar 5% */
        }

    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const itemsToShow = 6;
            let itemsShown = 0;
            const projectArchitectures = document.querySelectorAll('.projectArchitecture');

            // Fungsi untuk menampilkan item
            function showItems(n) {
                const itemsToBeShown = Array.from(projectArchitectures).slice(itemsShown, itemsShown + n);
                itemsToBeShown.forEach(item => item.style.display = 'block');
                itemsShown += itemsToBeShown.length;
                if (itemsShown >= projectArchitectures.length) {
                    document.getElementById('seeMore').style.display = 'none';
                }
            }

            // Tampilkan item awal
            showItems(itemsToShow);

            // Event listener untuk tombol See More
            document.getElementById('seeMore').addEventListener('click', function() {
                showItems(itemsToShow);
            });
        });
    </script>
@endsection
