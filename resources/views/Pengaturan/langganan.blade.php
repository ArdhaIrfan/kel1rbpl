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
.slider #slide-1 {background: #afa;}
.slider #slide-2 {background: #ffa;}
.slider #slide-3 {background: #faa;}
.slider #slide-4 {background: #aff;}

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
  background: #FBAD1C;
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
  background: #FBAD1C;
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/42863/arrow2.png);
  background-size: 100%;
}
::-webkit-scrollbar-button:end:increment {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/42863/arrow.png);
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
    </style>
    @endsection

    @section('tab-langganan')
    bg-yellow
    @endsection

    @section('content')

    <h2 class="ps-3">Ubah Profil</h2>

  <div class="slider">
    <div class="slider-buttons">
      <a href="#slide-1">1</a>
      <a href="#slide-2">2</a>
      <a href="#slide-3">3</a>
      <a href="#slide-4">4</a>
    </div>
    <div class="slides">
      <div class="slide" id="slide-1">

{{-- content pertama --}}
            <div class="col-lg-6">

            <div class="card h-100 shadow-lg active">
              <div class="card-body">
                <div class="text-center p-3">
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
                <p class="card-text text-center pt-3 fw-bold text-muted">
                    <small>
                        * Pembayaran langsung 12 bulan di depan.
                    </small>
                </p>
              </div>
              <div class="card-body text-center">
                <button class="btn btn-outline-primary btn-lg px-4 fw-bold btn-active" style="border-radius:5px; font-size: 1rem;">Beli Sekarang</button>
              </div>
            </div>
          </div>


      </div>
      <div class="slide" id="slide-2">
        <p>This is the second slide. Alternatively, change slides using the buttons at the top.</p>
      </div>
      <div class="slide" id="slide-3">
        <p>This is the third slide. You're getting the hang of it.</p>
      </div>
      <div class="slide" id="slide-4">
        <p>This is the last slide. Scroll back to the left if you're into that stuff.</p>
      </div>
    </div>
  </div>

  <div>
      <h3>Status Berlangganan</h3>
      <p>Jenis Langganan</p>
      <p>Aktif Mulai</p>
      <p>Aktif Hingga</p>
  </div>

  <div>
    <h3>Riwayat Transaksi</h3>
    <p>Paket Berlangganan Tahunan</p>
    <p>Paket Berlangganan Bulanan</p>
</div>

    @endsection




    <body>
    <div class="container-fluid">
      <div class="container p-5">
        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
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
                <p class="card-text text-center pt-3 fw-bold text-muted">
                    <small>
                        * Pembayaran langsung 6 bulan di depan.
                    </small>
                </p>
              </div>
              <div class="card-body text-center">
                <button class="btn btn-outline-primary btn-lg px-4 fw-bold" style="border-radius:5px; font-size: 1rem;">Beli Sekarang</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
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
                <p class="card-text text-center pt-3 fw-bold text-muted">
                    <small>
                        * Pembayaran langsung 6 bulan di depan.
                    </small>
                </p>
              </div>
              <div class="card-body text-center">
                <button class="btn btn-outline-primary btn-lg px-4 fw-bold" style="border-radius:5px; font-size: 1rem;">Beli Sekarang</button>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card h-100 shadow-lg">
              <div class="card-body">
                <div class="text-center p-3">
                  <h3 class="card-title fw-bold">
                      1 Bulan
                  </h3>
                  <small>
                      <hr class="mt-3 mb-5">
                  </small>
                  <span class="h4 fw-bold">Rp65.000</span>/bulan
                  <br>
                </div>
              </div>
              <div class="card-body text-center">
                <button class="btn btn-outline-primary btn-lg px-4 fw-bold" style="border-radius:5px; font-size: 1rem;">Beli Sekarang</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>

    <!-- Bootstrap 5 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
