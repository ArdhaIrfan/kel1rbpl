<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
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

				<table class="table table-bordered table-striped">
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
							<td>{{$m->title}}</td>
                            <td>{{$m->deskripsi}}</td>
                            <td><img width="150px" src="{{ url('/gambar_modul/'.$m->gambar) }}"></td>
							<td><a class="btn btn-danger" href="/upload/hapus/{{ $m->modulid }}">HAPUS</a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
