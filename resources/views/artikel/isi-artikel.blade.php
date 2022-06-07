@extends('layouts.app')

@section('title')
<title>Artikel</title>
@endsection
@section('local_css')
    <style>
        body {
            background-color: rgb(22, 22, 22);
            font-family: 'Ubuntu', sans-serif;
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
            <div class="row">
                <div class="col">
                    <h1>Oprec Schematics 2021</h1>
                    <div class="row">
                        <div class="col-2">
                            <p>by Admin</p>
                        </div>
                        <div class="col-2">
                            <p>Jul, 22 2021</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="{{url('images/orang-ngumpul.png')}}" alt="responsive image" class="my-2 img-fluid">
                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere rerum nulla commodi illo, repudiandae assumenda sunt expedita doloribus adipisci odio perferendis fugit possimus deserunt id soluta debitis dignissimos inventore amet.</p>
                </div>
            </div>

            <div class="row mt-5">
                @foreach ($artikel as $a)
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="{{url('gambar_modul/'.$a->gambar)}}" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">{{ $a->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($a->konten, 100, $end='...') }}</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $artikel->links() }}


        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
@endsection
