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


</style>
@endsection


@section('content')

<h2 class="ps-3 border-bottom">Account</h2>

<div class="row align-items-start">
    <div class="col column3" id="column3">
        <h5>Membership & Billing</h5>
    </div>
    <div class="col column4">
        <div class="border-bottom">
        <h6>Email@gmail.com</h6> {{-- database nanti--}}
        <p>Password: </p>
    </div>
    <div class="border-bottom">
        <h6>Nomor Pembayaran</h6> {{-- database nanti--}}
        <p>Password: </p>
    </div>
  </div>
  </div>
  <br>
  <div align="center">
    <input type="submit" value="Simpan Data" id="btn" class="btn btn-warning btn-lg">
</div>



@endsection


