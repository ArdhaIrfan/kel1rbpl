@extends('layouts.app')

@section('title')
    <title>{{ $modul->title }}</title>
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
    <div class="container text-light col-11 col-md-10 py-5">
        <div class="column">
            <div class="text-center py-5">
                <h1>{{ $modul->title }}</h1>
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
                                    <p><i class="bi bi-clock"></i>&nbsp; 25 Menit</p>
                                </div>
                                <div class="col-2">
                                    <p><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i></p>
                                </div>
                                <div class="col-4">
                                    <p><i class="bi bi-people-fill"></i>&nbsp; Tim</p>
                                </div>
                                <div class="col-2">
                                    <a href="" class="standard-link text-light"><i class="bi bi-share"></i>&nbsp;
                                        Share</a>
                                </div>
                                <div class="col-2">
                                    <a href="" class="standard-link text-light"><i class="bi bi-bookmark"></i>&nbsp;
                                        Save</a>
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
                    @if ($isVideoExist == 1)
                        <div class="column col-8">
                            <div class="col-12 my-4">

                                <iframe width="100%" height="400" src={{ $video->video }} title={{ $video->title }}
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>

                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="text-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                style="background: transparent; border: none; font-size: 80%;">
                                Laporkan Masalah
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="/modul/video/laporan" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <input type="text" name="modulid" value="{{ $modul->modulid }}" hidden>
                                        <input type="text" name="videoid" value="{{ $video->videoid }}" hidden>
                                        <div class="modal-content bg-dark">
                                            <div class="modal-header col-11 mx-auto">
                                                <h5 class="modal-title text-warning" id="exampleModalLabel"><i
                                                        class="bi bi-exclamation-lg"></i> Laporkan Masalah</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body col-11 mx-auto my-3">
                                                <p>Laporkan masalah atau kendala yang kamu hadapi saat mengakses modul. Kami
                                                    akan memperbaikinya segera.</p>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">
                                                        <h6>Judul Laporan</h6>
                                                    </label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                                        name="judul" placeholder="" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">
                                                        <h6>Deskripsi</h6>
                                                    </label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="keluhan" rows="3" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer col-11 mx-auto">
                                                <button type="button" class="btn btn-secondary mx-2"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-warning mx-2">Kirim</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="column col-3 my-4">
                        <h5 class="mb-3">Konten Modul</h5>
                        @foreach ($listvideo as $lv)
                            <div class="col-12">
                                <a
                                    @if ($video->videoid != $lv->videoid) href="/modul/video/{{ $modul->modulid }}/{{ $lv->videoid }}" class='standard-link' @endif>
                                    {{ $lv->title }}
                                </a>

                            </div>
                        @endforeach
                        {{-- <div class="col-12">
                            Materi 1
                        </div>
                        <div class="col-12">
                            Materi 2
                        </div>
                        <div class="col-12">
                            Materi 3
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mt-5">
                @foreach ($artikel as $a)
                    <div class="card col-12 col-sm-6 col-md-4 m-2 px-0 border-0">
                        <img src="{{ url('gambar_artikel/'.$a->gambar) }}" class="card-img-top mx-0" alt="modul card">
                        <div class="card-body bg-dark bg-gradient text-light">
                            <h5 class="card-title">{{$a->title}}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($a->konten, 100, $end='...') }}</p>
                            <a href="/artikel/isi/{{$a->artikelid}}" class="stretched-link"></a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
@endsection
