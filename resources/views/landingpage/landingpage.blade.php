@extends('layouts.app')

@section('title')
    <title>Ilmu Dewantara</title>
@endsection

@section('nav-home')
    nav-active
@endsection

@section('landingcover')
    landing-background
@endsection

@section('overlay')
    overlay
@endsection

@section('local_css')
    <style>
        .card.landing img {
            overflow: hidden;
            object-fit: cover;
        }

        .card.landing {
            width: 31%;
            height: 270px;
        }

        @media (max-width: 991px) {
            .card.landing {
                width: 47%;
            }
        }

        @media (max-width: 767px) {
            .card.landing {
                width: 95%;
            }
        }

        /* =================================== */

        .container-fluid {
            margin: 0;
            padding: 5%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #0c0c0c 0%, #372f2f 100%);
            font-family: 'Ubuntu', sans-serif;
        }

        .card.subs {
            border-top: 30px solid #ffd700;
            padding: 10px 20px;
            color: #f1f1f1;
            background: #0c0c0c;
        }

        @media only screen and (max-width: 575px) {
            .card.subs {
                padding: 10px 20px;
            }
        }

        .active {
            border-top: 30px solid #39c6f1;
        }

        .txt-active {
            color: #39c6f1;
        }

        .card.subs::after {
            position: absolute;
            z-index: -1;
            opacity: 0;
            -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .card.subs:hover {
            transform: scale(1.02, 1.02);
            -webkit-transform: scale(1.02, 1.02);
            backface-visibility: hidden;
            will-change: transform;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
        }

        .card.subs:hover::after {
            opacity: 1;
        }

        .card.subs:hover .btn-outline-primary {
            color: #f1f1f1;
            background: #39c6f1;
        }

        .btn {
            background: #ffd700;
            color: #0c0c0c;
        }

        .btn-active {
            color: #eee;
            background: #39c6f1;
        }
    </style>
@endsection

@section('content')
    <div class="" style="height: 100vh; padding-top: 6%;">
        <div id="landing-welcome" class="container row mx-auto">
            <div class="col-md-6">
                <h1 class="py-3"> Manfaatkan Potensi <span class="text-warning"> Dirimu!</span> </h1>
                <p class="caption">
                    Temukan rahasia sukses perkuliahanmu di bidang nonakademik dengan mudah
                </p>
                <p class="caption-2 mt-4">
                    <a href="#landing-subscription"
                        class="btn btn-lg txt-black rounded-50" role="button"> Belajar Gratis Sekarang </a>
                </p>
            </div>

            <div class="col-md-6 text-center mt-5 mx-auto">
                <img class="" src="{{ url('images/parallax.png') }}"
                    style="height: 250; width: 100%; overflow: hidden; object-fit: cover;">
            </div>
        </div>
    </div>


    <div id="landing-overview" class="container row mx-auto mb-5">
        <div class="col-md-6 text-center mb-5 py-auto">
            <img class="col-10 mx-auto" src="{{ url('images/ide-ipad.png') }}"
                style="height: auto; width: 60%; overflow: hidden; object-fit: cover;">
        </div>

        <div class="col-md-6">
            <h2 class="">
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

    <div id="landing-modul" class="container mt-5 col-11 px-auto">
        <div class="mb-5">
            &nbsp;
            <h2 class="">Modul
                <span class="text-warning">MAHIR</span>
                dari IlmuDewantara
            </h2>
            <p class="">
                Video dan materi tertulis yang kami sediakan dikurasi oleh orang-orang yang berpengalaman di bidangnya.
            </p>
        </div>

        <div class="row col-12 mt-5 ">
            @foreach ($modul as $m)
                <div class="card landing col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                    <img src="{{ url('gambar_modul/' . $m->gambar) }}" class="card-img-top mx-0" alt="modul card">
                    <div class="card-body bg-dark bg-gradient text-light">
                        <h5 class="card-title">{{$m->title}}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($m->deskripsi, 100, $end = '...') }}</p>
                        <a href="/modul/video/{{$m->modulid}}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
            {{-- <div class="card landing col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                <img src="{{ url('images/kitten.jpg') }}" class="card-img-top mx-0" alt="modul card">
                <div class="card-body bg-dark bg-gradient text-light">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div>
            <div class="card landing col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                <img src="{{ url('images/kitten.jpg') }}" class="card-img-top mx-0" alt="modul card">
                <div class="card-body bg-dark bg-gradient text-light">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="stretched-link"></a>
                </div>
            </div> --}}
        </div>

        <div class="text-center mt-4">
            <a class="text-warning" href="/modul/list">Lihat Modul Lainnya</a>
        </div>

    </div>

    <div id="landing-subscription" class="container text-light col-11 col-md-10 mt-5 pt-5 pb-4">
        <div class="column">
            <div class="pb-4">
                <h1><span class="text-warning">Jangan Takut</span> Uangmu Habis</h1>
                <h6>Biaya yang IlmuDewantara tawarkan telah disesuaikan dengan uang saku mahasiswa <br>
                    Tentu saja, kamu bisa mencoba <span class="text-warning">secara gratis</span>!
                </h6>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-lg-3 col-md-6 mb-4">
                    <div class="card subs shadow-lg active">
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="card-title fw-bold">
                                    12 Bulan
                                </h3>
                                <small>
                                    <hr class="my-3">
                                </small>
                                <span class="h4 fw-bold">Rp45.000</span>/bulan
                                <br>
                                <span class="h6 txt-active txt-active">Hemat Rp240.000</span>
                                <br>
                            </div>
                            <p class="card-text text-center pt-3 fw-bold text-secondary">
                                <small>
                                    * Pembayaran langsung 12 bulan di depan.
                                </small>
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <a class="btn btn-lg px-4 fw-bold btn-active"
                                style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/4">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 mb-4">
                    <div class="card subs shadow-lg">
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="card-title fw-bold">
                                    6 Bulan
                                </h3>
                                <small>
                                    <hr class="my-3">
                                </small>
                                <span class="h4 fw-bold">Rp50.000</span>/bulan
                                <br>
                                <span class="h6 text-warning">Hemat Rp90.000</span>
                            </div>
                            <p class="card-text text-center pt-3 fw-bold text-secondary">
                                <small>
                                    * Pembayaran langsung 6 bulan di depan.
                                </small>
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <a class="btn btn-lg px-4 fw-bold" style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/3">Beli
                                Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 mb-4">
                    <div class="card subs shadow-lg">
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="card-title fw-bold">
                                    3 Bulan
                                </h3>
                                <small>
                                    <hr class="my-3">
                                </small>
                                <span class="h4 fw-bold">Rp58.000</span>/bulan
                                <br>
                                <span class="h6 text-warning">Hemat Rp21.000</span>
                            </div>
                            <p class="card-text text-center pt-3 fw-bold text-secondary">
                                <small>
                                    * Pembayaran langsung 3 bulan di depan.
                                </small>
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <a class="btn btn-lg px-4 fw-bold" style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/2">Beli
                                Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6 mb-4">
                    <div class="card subs shadow-lg">
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="card-title fw-bold">
                                    1 Bulan
                                </h3>
                                <small>
                                    <hr class="my-3">
                                </small>
                                <span class="h4 fw-bold">Rp65.000</span>/bulan
                                <br>
                                <span class="h6 text-warning">Hemat Rp90.000</span>
                            </div>
                            <p class="card-text text-center pt-3 fw-bold text-secondary">
                                <small>
                                    <br><br>
                                </small>
                            </p>
                        </div>
                        <div class="card-body text-center">
                            <a class="btn btn-lg px-4 fw-bold" style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/1">Beli
                                Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
