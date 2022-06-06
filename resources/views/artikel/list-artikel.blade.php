@extends('layouts.app')

@section('title')
<title>Artikel</title>
@endsection
@section('local_css')
    <style>
        body {
            background-color: rgb(22, 22, 22);
            font-family: 'Ubuntu', sans-serif;
        }

        .banner {
            width: 100%;
            height: 50vh;
            overflow: hidden;
            object-fit: cover;
            /* object-position: top; */
        }

        .card img {
            overflow: hidden;
            object-fit: cover;
        }

        .card {
            width: 31%;
            height: 270px;
        }

        @media (max-width: 991px) {
            .card {
                width: 47%;
            }
        }

        @media (max-width: 767px) {
            .card {
                width: 95%;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container col-11 col-md-10 py-5">
        <div class="column">
            <div class="pb-3">
                <img style="max-width: 20%; " src="{{url('images/logo-ide-navbar.png')}}" alt="responsive image" class="rounded float-left">
                <h1 style="font-weight: 1000; font-size: 70px">Artikel</h1>
            </div>
            <div class="d-flex col-12">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Community"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{url('images/bayucaraka.png')}}" alt="responsive image" class="my-3 img-fluid banner">

                </div>
                <div class="col-lg-7">
                    <div class="col-lg-9">
                        <h3>
                            Bayucaraka Open Recruitment — Simak Apa Saja yang Perlu Kamu Persiapkan!
                        </h3>
                    </div>
                    <h6 class="pb-3" style="font-weight: 10;">
                        Bayucaraka ITS is looking for new members. Are you ready to be a part of us? For those of you who are interested in the world of UAV and want to learn more about the world of UAV, come join us!
                    </h6>

                    <div class="row">
                        <div class="col-3">
                            <img style="max-width: 50%;" src="{{url('images/img-tim.png')}}" alt="responsive image"  class="rounded float-end">
                        </div>
                        <div class="col-9">
                            <h6>April</h6>
                            <h6 style="font-weight: 10;">Tim Ilmu Dewantara</h6>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row">
                <div class="col-lg-5">
                    <img src="{{url('images/orang-bertopi.png')}}" alt="responsive image" class="my-3 img-fluid banner">

                </div>
                <div class="col-lg-7">
                    <div class="col-lg-9">
                        <h3>
                            Live Session Bersama Lunde akan Kembali!
                        </h3>
                    </div>
                    <h6 class="pb-3" style="font-weight: 10;">
                        Anda mendengarnya dengan benar! Setelah pidato hebat minggu lalu tentang topik manajemen waktu yang efektif untuk para mahasiswa, John Doe akan kembali lagi untuk yang lain. Kali ini tentang efektivitas social engagement antara mahasiswa di dalam kegiatan kuliah dan di luar.
                    </h6>

                    <div class="row">
                        <div class="col-3">
                            <img style="max-width: 50%;" src="{{url('images/img-tim.png')}}" alt="responsive image"  class="rounded float-end">
                        </div>
                        <div class="col-9">
                            <h6>April</h6>
                            <h6 style="font-weight: 10;">Tim Ilmu Dewantara</h6>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row mt-5">
                @foreach ($artikel as $a)
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="{{url('gambar_modul/'.$a->gambar)}}" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">{{ $a->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($a->konten, 100, $end='...') }}</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $artikel->links() }}


        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
@endsection
