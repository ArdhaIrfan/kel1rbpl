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
  position: absolute;
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
  height: 34px;
}
::-webkit-scrollbar-track {
  background: #eee;
}
::-webkit-scrollbar-thumb {
  background: #ddd url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/42863/grab.png) center no-repeat;
  background-size: 24px;
}
::-webkit-scrollbar-button:start:decrement,
::-webkit-scrollbar-button:end:increment {
  position: absolute;
  top: 0;
  display: block;
  height: 34px;
  width: 34px;
  background: #ccc;
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


    </style>
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
        <p>This is the first slide. Scroll to the right to go to the next slide.</p>
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






