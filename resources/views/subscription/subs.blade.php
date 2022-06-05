@extends('layouts.app')

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
<div class="container text-light col-11 col-md-10 py-5">
    <div class="column">
        <div>
            <h1><span class="text-warning">Jangan Takut</span> Uangmu Habis</h1>
            <h6>Biaya yang IlmuDewantara tawarkan telah disesuaikan dengan uang saku mahasiswa <br>
            Tentu saja, kamu bisa mencoba <span class="text-warning">secara gratis</span>!
            </h6>
        </div>
        
        <div class="row mt-5 text-center">
            <div class="col md-3 text-center">
                <h2> 12 Bulan </h2>
                __
                <br><br>
                <h5>Rp45.000</h5><p>/Bulan</p>
                <p><span style="text-primary">Hemat Rp240.000</span></p>
                <br><a href="/subscription/metode"><button class="btn btn-primary">Beli Sekarang</button></a>
            </div>
            <div class="col md-3 text-center">
            <h2> 6 Bulan </h2>
                __
                <br><br>
                <h5>Rp50.000</h5><p>/Bulan</p>
                <p><span style="text-warning">Hemat Rp90.000</span></p>
                <br><a href="/subscription/metode"><button class="btn btn-warning">Beli Sekarang</button></a>
            </div>
            <div class="col md-3 text-center">
            <h2> 3 Bulan </h2>
                __
                <br><br>
                <h5>Rp58.000</h5><p>/Bulan</p>
                <p><span style="text-warning">Hemat Rp21.000</span></p>
                <br><a href="/subscription/metode"><button class="btn btn-warning">Beli Sekarang</button></a>
            </div>
            <div class="col md-3 text-center">
            <h2> 1 Bulan </h2>
                __
                <br><br>
                <h5>Rp65.000</h5><p>/Bulan</p><br>
                <br><a href="/subscription/metode"><button class="btn btn-warning">Beli Sekarang</button></a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection