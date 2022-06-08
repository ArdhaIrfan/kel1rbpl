@extends('layouts.app')

@section('title')
<title>Modul {{$modul->title}}</title>
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
    <div class="container">

        <form action="/modul/upload/edit/proses" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="number" name="id" value="{{$modul->modulid}}" hidden>
            <div class="form-group">
                <b>Judul Modul</b>
                <br>
                <input type="text" name="title" value='{{$modul->title}}' required>
            </div>
            <br>
            <div class="form-group">
                <b>Deskripsi</b>
                <textarea class="form-control" name="deskripsi" required>{{$modul->deskripsi}}</textarea>
            </div>
            <br>
            <div class="form-group">
                <b>File Gambar</b>
                <br>
                <img width="150px" src="{{ url('/gambar_modul/'.$modul->gambar) }}">
                <br/>
                <input type="file" name="gambar">
            </div>
            <br>
            <input type="submit" value="Save" class="btn btn-primary mb-5">
        </form>

        <div>
            <table class="table table-bordered table-striped text-secondary">
                <thead>
                    <tr>
                        <th>Video ID</th>
                        <th>Video Title</th>
                        <th>Link Video</th>
                        <th>Video</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($video as $v)
                    <tr>
                        <td class="text-secondary">{{$v->videoid}}</td>
                        <td class="text-secondary">{{$v->title}}</td>
                        <td class="text-secondary">{{$v->video}}</td>
                        <td>
                            <iframe width="100%" height="400" src={{$v->video}}
                                title={{$v->title}} frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </td>
                        <td class="text-secondary">
                            <a class="btn btn-danger" href="/modul/upload/edit/hapus/{{$v->modulid}}/{{$v->videoid}}">Hapus</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <form action="/modul/upload/edit/video/add" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <input type="number" name="modulid" value="{{$modul->modulid}}" hidden>
                <div class="form-group">
                    <b>Judul Video</b>
                    <br>
                    <input type="text" name="title" placeholder="Judul Video" required>
                </div>
                <br>
                <div class="form-group">
                    <b>Link Video</b>
                    <br>
                    <input type="text" name="video" placeholder="eg:https://www.youtube.com/embed/DwTbTTxrjK8" width="100%" required>
                </div>
                <br>
                <input type="submit" value="Tambah Video" class="btn btn-primary mb-5">
            </tr>
        </form>
    </div>
@endsection
