@extends('layouts.app')

@section('title')
<title>Upload Modul</title>
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
<body>
	<div class="row">
		<div class="container">

			<h2 class="text-center my-5">Upload Modul</h2>

			<div class="col-lg-8 mx-auto my-5">

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/modul/upload/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

                    <div>
                        <b>Judul Modul</b>
                        <br>
                        <input type="text" name="title">
                    </div>
                    <br>
                    <div class="form-group">
						<b>Deskripsi</b>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>
                    <br>
					<div class="form-group">
						<b>File Gambar</b>
                        <br/>
						<input type="file" name="gambar">
					</div>
                    <br>
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>

				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped text-secondary">
					<thead>
						<tr>
							<th width="1%">Judul</th>
							<th>Deskripsi</th>
							<th>Gambar</th>
							<th width="1%">Opsi</th>
						</tr>
					</thead>
					<tbody>
						@foreach($modul as $m)
						<tr>
							<td class="text-secondary">{{$m->title}}</td>
                            <td class="text-secondary">{{$m->deskripsi}}</td>
                            <td class="text-secondary"><img width="150px" src="{{ url('/gambar_modul/'.$m->gambar) }}"></td>
							<td class="text-secondary">
                                <a class="btn btn-danger" href="/modul/upload/hapus/{{ $m->modulid }}">Hapus</a>
                                <br>
                                <a class="btn btn-primary" href="/modul/upload/edit/{{ $m->modulid }}">Edit</a>
                            </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
@endsection
