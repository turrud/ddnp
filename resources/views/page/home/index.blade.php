@extends('page.layout.main')

@section('title', 'Home')

@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    {{-- tag image --}}
    <div class="carousel-inner">
        @foreach ($homes as $key => $home)
        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
            <img src="{{ asset($home->imgurl) }}" class="d-block w-100" alt="Home Image">
        </div>
        @endforeach
    </div>

    {{-- letak button slide gambar --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<div class="container-fluid">
<div class="container mt-5">
    <div id="quoteCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($homes as $key => $home)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <blockquote class="blockquote text-center">
                        <i class="bi bi-quote"></i>
                        <p class="mb-3">{{ $home->text }}</p>
                        <footer class="blockquote-footer">{{ $home->name }}</footer>
                    </blockquote>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
