@extends('layouts.app')

@section('title')
    <title>Modul MAHIR</title>
@endsection

@section('nav-modul')
    nav-active
@endsection

@section('local_css')
    <style>
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
    <div class="container col-11 col-md-10 py-5">
        <div class="column">
            <div class="pb-3">
                <h1 style="font-weight: 500;">Modul Mahir</h1>
                <h6 class="sub-title">Tempatmu belajar dan menjadi tak terduga!</h6>
            </div>
            <div class="my-4 pt-2">
                <h5>Kategori</h5>
                <div class="d-flex text-center pt-2 justify-content-between">
                    <div class="col-4">
                        <button type="button" class="row btn btn-secondary col-11"><i
                                class="bi bi-people-fill"></i>Tim</button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="row btn btn-secondary col-11"><i
                                class="bi bi-diagram-3-fill"></i>Organisasi</button>
                    </div>
                    <div class="col-4">
                        <button type="button" class="row btn btn-secondary col-11"><i
                                class="bi bi-trophy-fill"></i>Lomba</button>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="d-flex col-12 col-md-7 py-3">
                    <a href="#" class="col-md-4 col-lg-3 text-warning standard-link mx-3">Semua Modul</a>
                    <a href="#" class="col-md-4 col-lg-3 text-light standard-link mx-3">Live Session</a>
                </div>
                <div class="input-group mb-3 search">
                    <form action="/modul/cari" method="GET">
                            <input type="text" name="cari" class="form-control" placeholder="Search Community"
                                aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <span class="input-group-text col-md-3" id="basic-addon2"><button type="submit"><i class="bi bi-search"></i></button></span>
                    </form>
                </div>
            </div>
            <div>
                <img src="{{ url('images/kitten.jpg') }}" alt="banner" class="my-3 img-fluid banner">
            </div>

            <div class="row mt-5">
                @foreach ($modul as $m)
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="{{ url('gambar_modul/' . $m->gambar) }}" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">{{ $m->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($m->deskripsi, 100, $end = '...') }}
                            </p>
                            <a href="/modul/video/{{$m->modulid}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $modul->links() }}


        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection
