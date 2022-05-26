<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Modul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    {{-- Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

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
</head>

<body class="text-light">
    <div class="container col-11 col-md-10 py-5">
        <div class="column">
            <div class="pb-3">
                <h1 style="font-weight: 500;">Modul Mahir</h1>
                <h6>Tempatmu belajar dan menjadi tak terduga!</h6>
            </div>
            <div class="my-4 pt-2">
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
            </div>
            <div class="d-flex col-12">
                <div class="d-flex col-md-7">
                    <a href="#" class="col-md-3 text-warning">Semua Modul</a>
                    <a href="#" class="col-md-3 text-light">Live Session</a>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Community"
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
                </div>
            </div>
            <div>
                <img src="{{url('images/kitten.jpg')}}" alt="banner" class="my-3 img-fluid banner">
            </div>

            <div class="row justify-content-between mt-5">
                @foreach ($modul as $m)
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="{{url('gambar_modul/'.$m->gambar)}}" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">{{ $m->title }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($m->deskripsi, 100, $end='...') }}</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $modul->links() }}


        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>
