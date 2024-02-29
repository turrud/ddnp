@extends('page.layout.main')

@section('title', 'Interior Design')

@section('content')
    <hr class="container">

    <div class="container">

        <div class="row mt-3 wow fadeInUp" data-wow-delay="0.1s" id="projectContainer">
            @foreach ($projectInteriors as $projectInterior)
                <div class="col-md-4 mb-4 projectInterior" style="display: none;">
                    <a href="{{ route('projects.interior_design.show', ['interiorId' => $projectInterior->id]) }}">
                        <div class="card">
                            <img src="{{ $projectInterior->imgurl }}" class="card-img-top" alt="Project Image">
                            {{-- <div class="card-body">
                                <h5 class="card-title">{{ $projectInterior->name }}</h5>
                                <p class="card-text">{{ $projectInterior->text }}</p>
                                <a href="{{ $projectInterior->url }}" class="btn btn-primary">Go somewhere</a>
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
    const projectInteriors = document.querySelectorAll('.projectInterior');

    // Fungsi untuk menampilkan item
    function showItems(n) {
        const itemsToBeShown = Array.from(projectInteriors).slice(itemsShown, itemsShown + n);
        itemsToBeShown.forEach(item => item.style.display = 'block');
        itemsShown += itemsToBeShown.length;
        if (itemsShown >= projectInteriors.length) {
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
