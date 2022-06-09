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
            <div class="col my-3 text-end text-warning"><a href="/profil/ganti-password" style="color:#FFC107">Ganti Password</a></div>
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
<div class="row">
    <br>
    <div class="col" align="right">
        <a id="logout" href="/logout/" class="btn btn-warning btn-lg">Logout</a>
    </div>
  <div class="col" align="right">
    <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal"
    data-bs-target="#exampleModal"
    style="background: transparent; border: none; font-size: 20px; color:#FFC107; font-weight:bold;">Hapus Akun</button>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header col-11 mx-auto">
                <h5 class="modal-title hapus" id="exampleModalLabel">
                    Hapus Akun</h5>
                <button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body col-11 mx-auto my-3">
                <p>Apakah anda yakin untuk menghapus Akun ini?</p>
            </div>
            <div class="modal-footer col-11 mx-auto">
                <button type="button" class="btn btn-secondary mx-2"
                    data-bs-dismiss="modal">Batal</button>
                <a href="/delete" >
                    <button type="submit"
                    class="btn btn-warning mx-2">Hapus</button>
                </a>
            </div>
        </div>
    </div>
</div>



@endsection


