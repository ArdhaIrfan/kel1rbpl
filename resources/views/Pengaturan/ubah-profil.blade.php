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

    <h2 class="ps-3">Ubah Profil</h2>
    <div class="mb-5 file text-center">
        <img id="img-preview" style="width: 130px; height: 130px; margin-top: 10px;" src="/gambar_modul/photo_profile.png"  alt="">
        <div>
        <input id='image' type='file' name='image' onchange="loadFile(event)" hidden>
        <button class="btn text-white mb-2 btn-warning" id='buttonid'> <img src="/gambar_modul/pensil.png" alt="">
        </button>
        </div>
    </div>


    <div class="container-fluid">
        <form  action="/nilaikuliah/store" method="post">
            {{ csrf_field() }}
            <div class="container row">
            <div class="form-group col-6">
              <label for="Nama">Nama Depan</label>
              <input type="text" class="form-control" name="nama_depan" id="nama_depan" placeholder="Nama Depan" required="required" maxlength="15">
            </div>
            <div class="form-group col-6">
                <label for="Nama_Belakang">Nama Belakang</label>
                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" required="required" maxlength="15">
              </div>
            <div class="form-group my-4 ">
                <label for="Nama_Belakang">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
            </div>
            <div class="form-group col-6">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-select" id="inputGroupSelect01">
                  <option selected>Choose...</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group col-6 date-time">
                <label for="tanggal_lahir">Tanggal lahir</label>
                <input type="datetime-local" class="form-control tanggal-lahir" name="email" id="tanggal-lahir" placeholder="Email" required="required">
            </div>
                <div class="form-group col-6 my-4">
                    <label for="Nomor_Telepon">Nomor Telepon</label>
                    <input type="number" class="form-control nomor-telepon" name="nomor_telepon" id="nomor_telepon" placeholder="Nomor Telepon" required="required"     oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                    maxlength = "13">
                  </div>
                  <div class="form-group col-6 my-4">
                    <label for="wilayah">Asal Kota/Kabupaten</label> {{-- nanti insert database --}}
                    <select class="form-select" id="inputGroupSelect01">
                      <option selected>Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                </div>
                    <br>
                    <div align="center">
                <input type="submit" value="Simpan Data" id="btn" class="btn btn-warning btn-lg">
            </div>
        </div>
        </div>
        </form>



@endsection

{{-- <script>
    document.getElementById('buttonid').addEventListener('click', openDialog);

    function openDialog() {
    document.getElementById('image').click();
    }

    let loadFile = function(e) {
        let image = document.getElementById('img-preview');
        image.src = URL.createObjectURL(e.target.files[0]);
    }
</script> --}}




@section('js')
<script src="/js/changepic.js">
</script>
@endsection

