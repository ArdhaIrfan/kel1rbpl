@extends('layouts.app')

@section('title')
    <title>Subscription</title>
@endsection

@section('nav-subscription')
    nav-active
@endsection

@section('local_css')
<style>
        .container-fluid {
            margin: 0;
            padding: 5%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #0c0c0c 0%, #372f2f 100%);
            font-family: 'Ubuntu', sans-serif;
        }

        .card {
            border-top: 30px solid #ffd700;
            padding: 10px 20px;
            color: #f1f1f1;
            background: #0c0c0c;
        }

        @media only screen and (max-width: 575px) {
            .card {
                padding: 10px 20px;
            }
        }

        .active {
            border-top: 30px solid #39c6f1;
        }

        .txt-active {
            color: #39c6f1;
        }

        .card::after {
            position: absolute;
            z-index: -1;
            opacity: 0;
            -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
            transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        }

        .card:hover {
            transform: scale(1.02, 1.02);
            -webkit-transform: scale(1.02, 1.02);
            backface-visibility: hidden;
            will-change: transform;
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .75) !important;
        }

        .card:hover::after {
            opacity: 1;
        }

        .card:hover .btn-outline-primary {
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
<div class="container text-light col-11 col-md-10 pt-5 pb-4">
    <div class="column">
        <div class="pb-4">
            <h1><span class="text-warning">Jangan Takut</span> Uangmu Habis</h1>
            <h6>Biaya yang IlmuDewantara tawarkan telah disesuaikan dengan uang saku mahasiswa <br>
            Tentu saja, kamu bisa mencoba <span class="text-warning">secara gratis</span>!
            </h6>
        </div>

        <div class="row mt-5">
            <div class="col-12 col-lg-3 col-md-6 mb-4">
                <div class="card shadow-lg active">
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
                            style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/4">Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mb-4">
                <div class="card shadow-lg">
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
                        <a class="btn btn-lg px-4 fw-bold btn-active"
                            style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/3">Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mb-4">
                <div class="card shadow-lg">
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
                        <a class="btn btn-lg px-4 fw-bold btn-active"
                            style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/2">Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6 mb-4">
                <div class="card shadow-lg">
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
                        <a class="btn btn-lg px-4 fw-bold btn-active"
                            style="border-radius:5px; font-size: 1rem;" href="/subscription/metode/1">Beli Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection
