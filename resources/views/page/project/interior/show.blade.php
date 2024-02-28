@extends('page.layout.main')

@section('title', 'Interior Design')

@section('content')
    <hr class="container">

    <div class="container">
        <div class="text-center mx-auto mb-5 mt-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="section-title">Interior Design</h2>
        </div>
        <div class="row mt-3 justify-content-center">
                <div class="col-md-12 mb-4">
                    <div class="card wow fadeInDown" data-wow-delay="0.1s">
                        <img src="{{ $interiorMember->imgurl }}" class="card-img-top" alt="Image">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $interiorMember->name }}</h5>
                            <p class="card-text">{{ $interiorMember->text }}</p>
                            <a href="{{ $interiorMember->link }}" class="btn btn-primary">Go somewhere</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $interiorMember->name }}</h5>
                            <p class="card-text">{{ $interiorMember->text }}</p>
                            <a href="{{ $interiorMember->link }}" class="btn btn-primary">Go somewhere</a>
                        </div> --}}
                    </div>
                </div>
        </div>
        <div class="card-body wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="card-title">{{ $interiorMember->name }}</h5>
            <p class="card-text">{{ $interiorMember->text }}</p>
            <a href="{{ $interiorMember->url }}" class="btn btn-dark">Go somewhere</a>
        </div>
    </div>

@endsection
