@extends('page.layout.main')

@section('title', 'Architecture Design Detail')

@section('content')
<hr class="container">

    <div class="container">
        <div class="row mt-3">
            @foreach ($proArchitecturs as $proArchitectur)
                <div class="col-md-4 mb-4">
                    <a href="{{ route('projects.architecture_design.show', ['archiId' => $proArchitectur->id]) }}" target="_blank">
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
    </div>
@endsection
