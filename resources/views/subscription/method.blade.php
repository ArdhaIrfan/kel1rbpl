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
            <h1>Metode Pembayaran</h1>
        </div>
        
        <div class="column mt-4">
            <div class="row justify-content-between">
                <div class="column col-12 col-md-8">
                    <div>
                        <h4>Detail</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <p>Membership</p>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Langganan 6 bulan</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Rp 300.000</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Ppn 10%</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Rp 30.000</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Rp 330.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card bg-dark py-auto mx-auto mt-4">
                    <div class="card-body text-center">
                        <h5 class="card-title my-3">Pilih Metode Pembayaran</h5>
                        <form class="mt-5" action="/subscription/payment">
                            <select class="form-select mb-3" aria-label="Default select example">
                                <option selected>Pilih</option>
                                <option value="transfer">Transfer Bank/M-Banking</option>
                                <option value="minimarket">Minimarket</option>
                                <option value="wallet">E-wallet</option>
                            </select>
                            <button type="submit" class="btn btn-warning">Generate Virtual Account Number</button>
                        </form>
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
