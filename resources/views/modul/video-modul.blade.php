@extends('layouts.app')

@section('title')
<title>Video Modul</title>
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
<body class="text-light">
    <div class="container col-11 col-md-10 py-5">
        <div class="column">
            <div class="text-center py-5">
                <h1>Modul Mahir</h1>
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
                <img src="../../../public/images/kitten.jpg" alt="banner" class="my-3 img-fluid banner">
            </div> -->
            <div class="column mt-4">
                <div class="row justify-content-between">
                    <div class="column col-8">
                        <div class="row">
                            <div class="row col-12 mb-2">
                                <div class="col-2">
                                    <p>25 Menit</p>
                                </div>
                                <div class="col-2">
                                    <p>Bintang</p>
                                </div>
                                <div class="col-4">
                                    <p>Tim</p>
                                </div>
                                <div class="col-2">
                                    <a href="" class="standard-link text-light">Share</a>
                                </div>
                                <div class="col-2">
                                    <a href="" class="standard-link text-light">Save</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis quasi ut,
                                    perspiciatis provident aperiam totam in id minus delectus accusantium assumenda
                                    tenetur neque esse veritatis eius! Quae id natus perspiciatis.</p>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea aliquid doloremque
                                    quaerat modi quasi qui voluptate beatae nisi veniam possimus! Ipsa eum et
                                    repudiandae dolorum consequatur pariatur? Fuga, magnam molestias.</p>
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="col-3">
                        <h5>Requirements</h5>
                        <ul>
                            <li>
                                Memiliki kemauan untuk belajar hal-hal baru.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="column col-8">
                        <div class="col-12 my-4">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/pWjt2HI9uxU"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="column col-3 my-4">
                        <h5 class="mb-3">Konten Modul</h5>
                        <div class="col-12">
                            Materi 1
                        </div>
                        <div class="col-12">
                            Materi 2
                        </div>
                        <div class="col-12">
                            Materi 3
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-5">
                <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                    <img src="{{ url('images/kitten2.jpg') }}" class="card-img-top mx-0" alt="modul card">
                    <div class="card-body bg-dark bg-gradient text-light">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                    <img src="{{ url('images/kitten2.jpg') }}" class="card-img-top mx-0" alt="modul card">
                    <div class="card-body bg-dark bg-gradient text-light">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                    <img src="{{ url('images/kitten2.jpg') }}" class="card-img-top mx-0" alt="modul card">
                    <div class="card-body bg-dark bg-gradient text-light">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                    <img src="{{ url('images/kitten2.jpg') }}" class="card-img-top mx-0" alt="modul card">
                    <div class="card-body bg-dark bg-gradient text-light">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                    <img src="{{ url('images/kitten2.jpg') }}" class="card-img-top mx-0" alt="modul card">
                    <div class="card-body bg-dark bg-gradient text-light">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
                <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                    <img src="{{ url('images/kitten2.jpg') }}" class="card-img-top mx-0" alt="modul card">
                    <div class="card-body bg-dark bg-gradient text-light">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>
@endsection
