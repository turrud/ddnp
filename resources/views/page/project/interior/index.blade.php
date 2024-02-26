@extends('page.layout.main')

@section('title', 'Interior Design')

@section('content')
    <hr class="container">

    <div class="container">
        <div class="row mt-3">
            @foreach ($projectInteriors as $projectInterior)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $projectInterior->imgurl }}" class="card-img-top" alt="Image">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $projectInterior->name }}</h5>
                            <p class="card-text">{{ $projectInterior->text }}</p>
                            <a href="{{ $projectInterior->link }}" class="btn btn-primary">Go somewhere</a>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
