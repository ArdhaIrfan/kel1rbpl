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
    <div class="mb-5" style=" background-color: rgb(10,10,10) !important; padding : 30px;text-align: center; font-size: 35px; color: white;">
        <h2>Virtual Account</h2>
    </div>
    <div class="text-center">
        <div class="mb-4">
            <h3>92940878724</h3>
            <p>Virtual Account akan kadaluarsa dalam 24 jam</p>
        </div>
        <div>
            <button class="btn btn-warning">
                Konfirmasi Pembayaran
            </button>
        </div>

    </div>
@endsection