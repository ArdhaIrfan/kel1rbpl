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
#colorstrip{
    width: 100%; height: 2px;
    border-style: solid;
    border-color: white;
}

.bg-yellow {
            background-color: #ffa500;
        }

</style>
@endsection

@section('tab-setting')
bg-yellow
@endsection

@section('content')

<h2 class="ps-3 border-bottom">Account</h2>

<div class="row align-items-start mt-4">
    <div class="col-sm-4">
        <h5>Membership & Billing</h5>
    </div>
    <div class="col-sm">
        <div class="row">
            <div class="col my-3">
                {{$email}}
            </div>
            <div class="col my-3 text-end text-warning"> Ganti Password</div>
            <hr>
        </div>
        <div class="row">
            <div class="my-3">
            Your next billing date is
            @if ($active == 1)
                {{$langganan}}
            @endif
            </div>
            <hr>
        </div>
  </div>
  </div>
  <br>
  <div align="right">
    <a id="delete" href="/delete/" class="btn btn-warning btn-lg">delete</a>
</div>
  <div align="center">
    <a id="logout" href="/logout/" class="btn btn-warning btn-lg">Logout</a>
</div>



@endsection


