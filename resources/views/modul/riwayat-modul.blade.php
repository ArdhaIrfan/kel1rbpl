@extends('layouts.app')

@section('title')
    <title>Riwayat Modul</title>
@endsection

@section('nav-modul')
    nav-active
@endsection

@section('local_css')
    <style>
        body {
            background-color: rgb(22, 22, 22);
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
            min-height: 100%;
            min-width: 100%;
        }

        /* .card {
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
                } */
    </style>
@endsection
@section('content')
    <div class="container text-light col-11 col-md-10 py-5">
        <div class="column">
            <div class="mb-5">
                <h1>Riwayat Modul</h1>
                <!-- <h6>Tempatmu belajar dan menjadi tak terduga!</h6> -->
            </div>
            <!-- <div class="my-4 pt-2">
                        <h5>Kategori</h5>
                        <div class="d-flex text-center pt-2">
                            <div class="col-4">
                                <button type="button" class="btn btn-secondary col-11">Tim</button>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-secondary col-11">Organisasi</button>
                            </div>
                            <div class="col-4">
                                <button type="button" class="btn btn-secondary col-11">Lomba</button>
                            </div>
                        </div>
                    </div> -->
            <div class="d-flex col-12 text-center">
                <div class="d-flex col-md-7 filter-riwayat">
                    {{-- <a href="/modul/riwayat" class="col-md-2 text-light">Modul</a>
                <a href="#" class="col-md-2 text-light">IDe-Watch</a>
                <a href="#" class="col-md-2 text-light">Blog</a>
                <a href="#" class="col-md-3 text-light">Discussion</a> --}}
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari di Riwayat"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                </div>
            </div>
            <div class="my-5">
                @if ($isExist)
                    @foreach ($modul as $m)
                        <div class="card mb-3 border-0 col-12">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ url('gambar_modul/' . $m->gambar) }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body text-light row" style="background-color: #171a1e; height: 100%;">
                                        <div class="col-8">
                                            <h5 class="card-title"><a href="/modul/video/{{$m->modulid}}" class="standard-link text-light">
                                                {{$m->title}}
                                            </a></h5>
                                            <p class="card-text">{{ \Illuminate\Support\Str::limit($m->deskripsi, 130, $end = '...') }}</p>
                                            <p class="card-text"><small class="text-secondary">Last updated 3 mins
                                                    ago</small>
                                            </p>
                                        </div>
                                        <div class="col-4 row">
                                            <div class="col-6">
                                                <h6>Kategori</h6>
                                                <p class="text-warning">Tim</p>
                                            </div>
                                            <div class="col-6">
                                                <h6>Tingkat</h6>
                                                <p class="text-warning">Beginner</p>
                                            </div>

                                            <!-- Button trigger modal -->
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="button" class="text-danger" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal"
                                                    style="background: transparent; border: none; font-size: 90%;">Hapus</button>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content bg-dark">
                                                        <div class="modal-header col-11 mx-auto">
                                                            <h5 class="modal-title text-warning" id="exampleModalLabel">
                                                                Hapus Riwayat</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body col-11 mx-auto my-3">
                                                            <p>Apakah anda yakin untuk menghapus riwayat ini?</p>
                                                        </div>
                                                        <div class="modal-footer col-11 mx-auto">
                                                            <button type="button" class="btn btn-secondary mx-2"
                                                                data-bs-dismiss="modal">Batal</button>
                                                            <a href="/modul/riwayat/hapus/{{$m->modulid}}">
                                                                <button type="submit"
                                                                class="btn btn-warning mx-2">Hapus</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="text-center my-5">
                        <h4>Riwayatmu Kosong</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection
