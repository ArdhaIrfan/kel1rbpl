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
<div class="margin-start: 20px">
<div style="padding : 30px;text-align: center; font-size: 35px; color: white;">
  <h2>Metode Pembayaran</h2>
</div>

<div class="container-fluid">
    <div class="row" style="mt-5">
        <div class="col-md-8">
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
        <div class="col-md-4">
            <div class="card">
                <div class="card-body" style="background-color: rgb(45,45,45);">
                    <h4 class="card-title">Bayar Sekarang</h4>
                    <div class="mt-4">
                        <form action="">
                            <select name="metode" id="metode">
                              <option value="transfer">Transfer Bank/M-Banking</option>
                              <option value="minimarket">Minimarket</option>
                              <option value="wallet">E-wallet</option>
                            </select>
                            <br><br>
                            <input type="submit" value="Generate Virtual Account Number" class="btn btn-warning">
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
