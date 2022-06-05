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
                <input type="text" class="form-control" placeholder="Search Community" aria-label="Recipient's username"
                    aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2"><i class="bi bi-search"></i></span>
            </div>
        </div>
        <div class="my-5">
            <div class="card mb-3 border-0 col-12">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ url('images/kitten2.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-dark bg-gradient text-light row" style="height: 100%;">
                            <div class="col-8">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-secondary">Last updated 3 mins ago</small>
                                </p>
                            </div>
                            <div class="col-2">
                                <h6>Kategori</h6>
                                <p class="text-warning">Tim</p>
                            </div>
                            <div class="col-2">
                                <h6>Tingkat</h6>
                                <p class="text-warning">Beginner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0 col-12">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ url('images/kitten2.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-dark bg-gradient text-light row" style="height: 100%;">
                            <div class="col-8">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-secondary">Last updated 3 mins ago</small>
                                </p>
                            </div>
                            <div class="col-2">
                                <h6>Kategori</h6>
                                <p class="text-warning">Tim</p>
                            </div>
                            <div class="col-2">
                                <h6>Tingkat</h6>
                                <p class="text-warning">Beginner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3 border-0 col-12">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ url('images/kitten2.jpg') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body bg-dark bg-gradient text-light row" style="height: 100%;">
                            <div class="col-8">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-secondary">Last updated 3 mins ago</small>
                                </p>
                            </div>
                            <div class="col-2">
                                <h6>Kategori</h6>
                                <p class="text-warning">Tim</p>
                            </div>
                            <div class="col-2">
                                <h6>Tingkat</h6>
                                <p class="text-warning">Beginner</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 border-0 col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ url('images/kitten2.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body bg-dark bg-gradient text-light row" style="height: 100%;">
                        <div class="col-8">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <div class="col-2">
                            <h6>Kategori</h6>
                            <p class="text-warning">Tim</p>
                        </div>
                        <div class="col-2">
                            <h6>Tingkat</h6>
                            <p class="text-warning">Beginner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3 border-0 col-12">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ url('images/kitten2.jpg') }}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body bg-dark bg-gradient text-light row" style="height: 100%;">
                        <div class="col-8">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural
                                lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-secondary">Last updated 3 mins ago</small>
                            </p>
                        </div>
                        <div class="col-2">
                            <h6>Kategori</h6>
                            <p class="text-warning">Tim</p>
                        </div>
                        <div class="col-2">
                            <h6>Tingkat</h6>
                            <p class="text-warning">Beginner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div>
                    <img src="../../../public/images/kitten.jpg" alt="banner" class="my-3 img-fluid banner">
                </div> -->
    <!-- <div class="row justify-content-between mt-5">
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="../../../public/images/kitten2.jpg" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="../../../public/images/kitten2.jpg" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="../../../public/images/kitten2.jpg" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="../../../public/images/kitten2.jpg" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="../../../public/images/kitten2.jpg" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="../../../public/images/kitten2.jpg" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="stretched-link"></a>
                        </div>
                    </div>
                </div> -->
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection
