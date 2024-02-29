@extends('page.layout.main')

@section('title', 'Detail Team')

@section('content')
<hr class="container">
<!-- Team Start -->
    <div class="container py-5 text-center">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title ">Team Members</h4>
                <h1 class="display-5 mb-4 ">Turning Dreams into Homes Your Vision, Our Expertise</h1>
            </div>
            <div class="row g-0 team-items justify-content-center">
                <div class="col-md-2 wow fadeInUp mx-1 mb-1" data-wow-delay="0.1s">

                        <div class="team-item">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ $teamMember->imgurl }}" alt="image-team">
                            </div>
                            <div class="bg-light text-center p-4">
                                <h3 class="fo">{{ $teamMember->name }}</h3>
                                <hr>
                                <span class="j">{{ $teamMember->jabatan }}</span>
                            </div>
                        </div>
                </div>
                <div class="col-md-5 wow fadeInUp mx-1 mb-1 m-5" data-wow-delay="0.1s">
                    <div class="card-body" style="text-align: justify;">
                        <blockquote class="blockquote text-center">
                            <footer class="blockquote-footer">{{ $teamMember->text }}</footer>
                        </blockquote>
                    </div>
                    <!-- Menggunakan flexbox untuk memposisikan tombol ke kanan -->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('about.team') }}" class="btn btn-sm berubah">
                            <i class="bi bi-box-arrow-left"></i>
                        </a>
                    </div>

                </div>

            </div>


        </div>
    </div>
<!-- Team End -->
@endsection
