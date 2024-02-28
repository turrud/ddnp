@extends('page.layout.main')

@section('title', 'Partner')

@section('content')
<hr class="container">
<div class="container">
    {{-- <div class="d-flex flex-wrap justify-content-center">
        @foreach ($partners as $partner)
            <div class="logo text-center m-2">
                <img src="{{ $partner->imgurl }}" alt="logo" class="img-fluid">
            </div>
        @endforeach
    </div> --}}

    <div class="d-flex flex-wrap justify-content-center">
    @foreach ($partners as $partner)
            <div class="logo text-center m-2">
                <!-- Pastikan $partner->url mengandung URL yang valid -->
                <a href="{{ $partner->url }}" target="_blank">
                    <img src="{{ $partner->imgurl }}" alt="logo" class="img-fluid">
                </a>
            </div>
        @endforeach
    </div>

</div>


@endsection


<style>
    body, html {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    background: #ffffff; /* Or any other color you prefer */
}

.logo-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 10px;
    padding: 20px;
    justify-items: center;
}

.logo img {
    width: 100%;
    height: auto;
    max-height: 120px; /* Adjust the maximum height to your preference */
    object-fit: contain;
    margin-bottom: 20px;
}

/* Random size generator (not truly random, just for demonstration) */
.logo:nth-child(4n) img {
    transform: scale(1.2);
}

.logo:nth-child(3n) img {
    transform: scale(0.8);
}

.logo:nth-child(5n) img {
    transform: scale(1.1);
}

</style>
