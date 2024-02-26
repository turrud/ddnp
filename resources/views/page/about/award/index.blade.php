@extends('page.layout.main')

@section('title', 'Award')

@section('content')
<hr class="container">

<div class="container mt-5">
    <div class="row justify-content-center ">
        @foreach ($awards as $award )
        <div class="col-md-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="">
                <div class="fw-semibold fs-5">
                    {{ $award->name }}
                </div>
                <div class="">
                    <blockquote class="blockquote mb-0">
                        <div class="fw-light fs-6 mb-3">
                             {{ $award->tanggal }}
                        </div>
                        <footer style="font-size: 12px" class="blockquote-footer mb-3">{{ $award->lokasi }}</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
