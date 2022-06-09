@extends('layouts.pengaturan')

@section('title')
<title>Ubah Profil</title>
@section('local_css')
<style>
    /* bikin tabel dll */
    * {
      box-sizing: border-box;
      font-family: Ubuntu;
    }

    .bg-yellow {
            background-color: #ffa500;
        }
    /** Displays Warning if required property is not supported. **/
@supports (scroll-snap-type: mandatory) or (-webkit-scroll-snap-type: mandatory) {
  .is-not-supported {display: none;}
}

/** Generic Styling & Formatting **/
body * {box-sizing: border-box;}
body {
  margin: 0;
  font-family: helvetica, arial, sans-serif;
}
.content {
  width: 90%;
  max-width: 800px;
  margin: 0 auto;
}

/** Pure CSS Slider **/
.slider {
  position: relative;
  width: 100%;
  height: 350px;
  margin: 2rem auto;
  background: #ddd;
}
.slider .slides {
  width: 100%;
  height: 100%;
  overflow-x: auto;
  overflow-y: hidden;
  white-space: nowrap;
  /** Thank you Sergey! http://blog.gospodarets.com/css-scroll-snap/ **/
    scroll-snap-points-x: repeat(100%);
    scroll-behavior: smooth;
    scroll-snap-type: mandatory;
    -webkit-scroll-snap-type: mandatory;
    -webkit-scroll-snap-points-x: repeat(100%);
    font-size: 0;
  /** **/
}
.slider .slide {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 100%;
}
.slider .slide p {
  position:;
  display: block;
  bottom: 0; left: 0;
  width: 100%;
  font-size: 1rem;
  color: #000;
  background: rgba(0,0,0,0.15);
  padding: 1em;
  margin: 0;
  white-space: normal;
}

.slider-buttons {
  position: absolute;
  top: 0; right: 0;
  width: 100%;
  height: auto;
  padding: 0.5rem;
  font-size: 1rem;
  text-align: right;
  z-index: 2;
}
.slider-buttons a {
  width: 2em;
  display: inline-block;
  background: rgba(0,0,0,0.15);
  text-align: center;
  padding: 0.5em 0;
  text-decoration: none;
  color: #000;
}


/** Chrome Scroll Wheel **/

::-webkit-scrollbar {
  height: 24px;
}
::-webkit-scrollbar-track {
  /* background: #FBAD1C; */
}
::-webkit-scrollbar-thumb {
  background: #FBAD1C url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/42863/grab.png) center no-repeat;
  background-size: 24px;
}
::-webkit-scrollbar-button:start:decrement,
::-webkit-scrollbar-button:end:increment {
  position: absolute;
  top: 0;
  display: block;
  height: 34px;
  width: 34px;
}


/** Alert Box **/
.is-not-supported {
  width: 100%;
  margin: 2rem auto;
  background: #fda;
  padding: 1em;
}
.is-not-supported p {margin: 0;}

@media (max-width: 600px) {
  .content {width: 95%;}
}


<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap 5 CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <!-- Document Styling -->
        <link rel="stylesheet" href="styles.css" />
        <!-- Google Font Family -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">

        <title> IDe - IlmuDewantara Pricing </title>'

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
    padding: 10px 50px;
    color: #f1f1f1;
    background: #0c0c0c;
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
    box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
  }

  .card:hover::after {
    opacity: 1;
  }

  .card:hover .btn-outline-primary{
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

  .scroll {
    background-color: transparent;
    height: 360px;
    width: 800px;
    overflow-x: scroll;
    margin-left: 20px;
    overflow-y: hidden;
  }

  .scroll-x {
      width: 1500px;
  }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    @endsection

    @section('tab-langganan')
    bg-yellow
    @endsection

    @section('content')

    <h2 class="ps-3">Ubah Profil</h2>

    <div class="mt-5 scroll">
        <div class="row scroll-x">
        <div class=" col-3 mb-4">
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
                        style="border-radius:5px; font-size: 1rem; color:black;" href="/subscription/metode/4">Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class=" col-3 mb-4">
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
                        style="border-radius:5px; font-size: 1rem; color:black;" href="/subscription/metode/3">Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class=" col-3 mb-4">
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
                        style="border-radius:5px; font-size: 1rem; color:black;" href="/subscription/metode/2">Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
        <div class="col-3 mb-4">
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
                        style="border-radius:5px; font-size: 1rem;  color:black;" href="/subscription/metode/1">Beli Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

  <div class="my-3">
      <div class="row ps-4 my-2">
      Status Berlangganan
      <div class="text-warning col">
        @if ($active == 1)
        AKTIF
        @else TIDAK AKTIF
      @endif
    </div>
    </div>
    <div class="row ps-4 my-2">
      Jenis Langganan
      <div class=" col">
        @if ($active == 1)
        {{$bulan}} bulan
      @endif
    </div>
    </div>
    <div class="row ps-3 my-2">
        <div class="col">
      Aktif Mulai:
      @if ($active == 1)
      {{$langganan -> start}}
    @endif
</div>
<div class="row my-2">
<div class="col">
      Aktif Hingga:
      @if ($active == 1)
      {{$langganan -> end}}
    @endif
  </div>
</div>
</div>
</div>

  <div>
    <h3>Riwayat Transaksi</h3>
    <div class="row border-bottom">
        <div class="col">
            Paket Berlangganan Tahunan (
    @foreach ($riwayat as $r)
    {{$r -> bulan}}
    @endforeach
           bulan )
</div>
<div class="col">
    Rp
    @foreach ($riwayat as $r)
    {{$r -> hargaperbulan * $r -> bulan}}
    @endforeach
</div>
</div>
</div>
    @endsection
</html>
