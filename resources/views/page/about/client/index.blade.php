@extends('page.layout.main')

@section('title', 'Client')

@section('content')
<hr class="container">
    <div class="container mt-5 text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 text-center mb-5">Our Clients</h1>
    </div>
    <div class="container justify-content-center">
    <div class="row">
        @foreach ($clients as $client)
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2">
                <p class="lh-1 small text-muted">{{ $client->name }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
