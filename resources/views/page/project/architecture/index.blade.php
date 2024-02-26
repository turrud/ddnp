@extends('page.layout.main')

@section('title', 'Architecture Design')

@section('content')
<hr class="container">

    <div class="container">
        <div class="row mt-3">
            @foreach ($proArchitecturs as $proArchitectur)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $proArchitectur->imgurl }}" class="card-img-top" alt="Image">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $proArchitectur->name }}</h5>
                            <p class="card-text">{{ $proArchitectur->text }}</p>
                            <a href="{{ $proArchitectur->link }}" class="btn btn-primary">Go somewhere</a>
                        </div> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
