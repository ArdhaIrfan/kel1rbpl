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
        <div class="text-center py-5">
            <h1>Virtual Account</h1>
        </div>
        
        <div class="column mt-4 text-center">
            <div class="text-center">
                <h3>
                    
                </h3>
                <p>Virtual Account akan kadaluarsa dalam 24 jam</p>
            </div>
            <div>
                <button class="btn btn-warning" action="">
                    Konfirmasi Pembayaran
                </button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection