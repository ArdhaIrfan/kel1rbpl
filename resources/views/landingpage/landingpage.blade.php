@extends('layouts.app')

@section('title')
<title>Ilmu Dewantara</title>
@endsection

@section('nav-home')
nav-active
@endsection

@section('local_css')
    <style>
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

        .txt-black{
            color: #000000;
        }

        .rounded-50{
            border-radius: 50px;
        }
    </style>
@endsection

@section('content')
    <div class="pt-5 pb-5" style="background-image: url('../../../public/images/login-register-bg.png');">
        <div id="landing-welcome" class="container row mx-auto">
            <div class="col-md-6">
                <h1 class="py-3"> Manfaatkan Potensi <span class="text-warning"> Dirimu!</span> </h1>
                <p class="caption">
                    Temukan rahasia sukses perkuliahanmu di bidang nonakademik dengan mudah
                </p>
                <p class="caption-2 mt-4">
                    <a href="https://www.instagram.com/ilmudewantara/" target="__blank"
                        class="btn btn-lg btn-light txt-black rounded-50" role="button"> Belajar Gratis Sekarang </a>
                </p>
            </div>


            <div class="col-md-5 text-center mt-5 mx-auto">

                <img class="" src="{{url('images/kitten.jpg')}}" style="height: 200; width: 100%; overflow: hidden; object-fit: cover;">

            </div>
        </div>
    </div>


    <div id="landing-overview" class="container row mt-5 ml-auto mx-auto">
        <div class="col-md-6 text-center mt-5 my-auto py-auto">
            <img class="" src="{{url('images/kitten.jpg')}}" style="height: 100%; width: 100%; overflow: hidden; object-fit: cover;">
        </div>

        <div class="col-md-6">
            <h2 class="mt-lg-5">
                Tidak Perlu Bingung Untuk Mengawali <span class="text-warning"> Kuliahmu! </span>
            </h2>
            <p class="">
                IlmuDewantara membantumu untuk menguasai kemampuan yang kamu butuhkan.
                <br>
                <br>
                Bergabunglah bersama kami dan dapatkan:
            </p>

            <div>
                <ul>
                    <li>
                        <span class="text-warning"> &nbsp; Module </span> teks dan video yang dikuasai oleh orang-orang
                        yang berpengalaman dibidangnya
                    </li>
                    <li>
                        <span class="text-warning"> &nbsp; Live </span> session yang memberikan kamu kesempatan untuk
                        bertanya secara langsung
                    </li>
                    <li>
                        &nbsp; IDe-Watch yang memberikanmu rekomendasi kegiatan untuk mengasah kemampuanmu
                    </li>
                    <li>
                        &nbsp; Module teks dan video yang dikuasai oleh orang-orang yang berpengalaman di bidangnya.
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="landing-modul" class="container mt-5 ml-5">
        <div class="mb-5">

            &nbsp;
            <h2 class="">Module
                <span class="text-primary">MAHIR</span>
                dari IlmuDewantara
            </h2>

            <p class="">
                Video dan materi tertulis yang kami sediakan dikurasi oleh orang-orang yang berpengalaman di bidangnya.
            </p>

        </div>

        <div class="row mt-5">
            <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                <img src="{{url('images/kitten.jpg')}}" class="card-img-top mx-0" alt="modul card">
                <div class="card-body bg-dark bg-gradient text-light">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                <img src="{{url('images/kitten.jpg')}}" class="card-img-top mx-0" alt="modul card">
                <div class="card-body bg-dark bg-gradient text-light">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a class="text-warning" href="">Lihat Modul Lainnya</a>
        </div>

    </div>

    <div id="landing-subscription">

    </div>

    <div id="landing-testimoni" class="container mt-5 mb-5">
        <div class="mb-4">
            <h1 class="">
                Apa Kata Mereka?
            </h1>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">

            </div>
            <div id="carouselTestimoniIndicators" class="carousel slide col-md-4" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselTestimoniIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselTestimoniIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselTestimoniIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="{{url('images/kitten.jpg')}}" alt="First slide" style="max-width: 100 !important;">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="{{url('images/kitten.jpg')}}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="{{url('images/kitten.jpg')}}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselTestimoniIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselTestimoniIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            <div class="col-md-4">

            </div>
        </div>


    </div>
@endsection
