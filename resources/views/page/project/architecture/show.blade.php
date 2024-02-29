@extends('page.layout.main')

@section('title', 'Architecture Design Detail')

@section('content')
<hr class="container">

    <div class="container">
        {{-- <div class="text-center mx-auto mb-5 mt-5 wow fadeInDown" data-wow-delay="0.1s" style="max-width: 600px;">
            <h2 class="section-title">Architecture Design</h2>
        </div> --}}
        <div class="row mt-3">

                <div class="col-md-12 mb-4">
                    <div class="card wow fadeInDown" data-wow-delay="0.1s">
                        <img src="{{ $archiMember->imgurl }}" class="card-img-top" alt="Image">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $archiMember->name }}</h5>
                            <p class="card-text">{{ $archiMember->text }}</p>
                            <a href="{{ $archiMember->link }}" class="btn btn-primary">Go somewhere</a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <div class="">
                        {{-- <div class="card-body">
                            <h5 class="card-title">{{ $archiMember->name }}</h5>
                            <p class="card-text">{{ $archiMember->text }}</p>
                            <a href="{{ $archiMember->link }}" class="btn btn-primary">Go somewhere</a>
                        </div> --}}
                    </div>
                </div>

        </div>
        <div class="card-body wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="card-title">{{ $archiMember->name }}</h5>
            <p class="card-text">{{ $archiMember->text }}</p>
        </div>
        <div class="d-flex justify-content-start">
            <a href="{{ $archiMember->url }}" class="btn berubah btn-sm"><i class="bi bi-bug-fill"></i><i class="bi bi-bug-fill"></i></a>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('projects.architecture_design') }}" class="btn btn-sm berubah">
                <i class="bi bi-box-arrow-left"></i>
            </a>
        </div>
    </div>
@endsection
