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
    </style>

@endsection

@section('tab-ubah')
bg-yellow
@endsection

@section('content')

    <h2 class="ps-3">Ubah Profil</h2>
    <div class="mb-5 file text-center">
        <img id="img-preview" style="width: 130px; height: 130px; margin-top: 10px;" src="/gambar_modul/photo_profile.png"
            alt="">
        <div>
            <input id='image' type='file' name='image' onchange="loadFile(event)" hidden>
            <button class="btn text-white mb-2 btn-warning rounded-5" id='buttonid'> <img src="/gambar_modul/pensil.png" alt="">
            </button>
        </div>
    </div>


    <div class="container-fluid">
        <form action="/profil/ubah/simpan" method="post">
            {{ csrf_field() }}
            <div class="container row ">
                <div class="form-group col-12">
                    <label for="Nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama"
                        required="required" maxlength="30" value="{{$profil -> name}}">
                </div>
                <div class="form-group my-4 ">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                        required="required" value="{{$profil -> email}}">
                </div>
                <div class="form-group col-6">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-select" id="inputGroupSelect01" name="jenis_kelamin">
                        <option selected>Choose...</option>
                        <option value="Pria" @if($profil -> jeniskelamin == "Pria") selected @endif>Pria</option>
                        <option value="Wanita" @if($profil -> jeniskelamin == "Wanita") selected @endif>Wanita</option>
                    </select>
                </div>
                <div class="form-group col-6 date-time">
                    <label for="tanggal_lahir">Tanggal lahir</label>
                    <input type="date" class="form-control tanggal-lahir" name="tanggal_lahir" id="tanggal_lahir"
                        placeholder="Tanggal Lahir" required="required" value="{{$profil -> tanggallahir}}">
                </div>
                <div class="form-group col-6 my-4">
                    <label for="nomor_telepon">Nomor Telepon</label>
                    <input type="number" class="form-control nomor-telepon" name="nomor_telepon" id="nomor_telepon"
                        placeholder="Nomor Telepon" required="required"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        maxlength="13" value="{{$profil -> nomortelp}}">
                </div>
                <div class="form-group col-6 my-4">
                    <label for="asal">Asal Kota/Kabupaten</label> {{-- nanti insert database --}}
                    <input type="text" class="form-control" name="asal" id="asal" placeholder="Asal"
                    required="required" maxlength="15" value="{{$profil -> asal}}">
                </div>
                <br>
                <div align="center">
                    <input type="submit" value="Simpan" id="btn" class="btn btn-warning btn-lg rounded-5">
                </div>
            </div>
        </form>
    </div>
<script>
    document.getElementById('buttonid').addEventListener('click',
    openDialog
    );

    function openDialog() {
        document.getElementById('image').click();
    }
    let loadFile = function(e) {
    let image = document.getElementById('img-preview');
    image.src = URL.createObjectURL(e.target.files[0]);
    }
</script>

@endsection

