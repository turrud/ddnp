@extends('page.layout.main')

@section('title', 'Partner')

@section('content')
<hr class="container">
<div class="container">
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
        transition: transform 0.5s ease; /* Smooth transition */
        /* Apply a default scale to ensure consistency */
        transform: scale(1); /* Default scale */
    }

    /* Hover effects */
    .logo img:hover {
        transform: scale(1.1); /* Enlarge image by 10% on hover */
    }



    /* Ensuring hover effect takes precedence and resets scale before applying hover scale */
    .logo img:hover {
        transform: scale(1.1); /* This will now correctly enlarge from the base scale of 1 */
    }

</style>
