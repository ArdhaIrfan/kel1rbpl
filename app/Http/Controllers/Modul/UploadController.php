<?php

namespace App\Http\Controllers\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modul;
use Illuminate\Support\Facades\File as FacadesFile;

class UploadController extends Controller
{
    public function upload(){
		$modul = Modul::get();
		return view('modul.upload-modul',['modul' => $modul]);
	}

	public function proses_upload(Request $request){

		$this->validate($request, [
			'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048',
			'deskripsi' => 'required',
            'title' => 'required'
		]);

		// menyimpan data file yang diupload ke variabel $file
		$gambar = $request->file('gambar');

		$nama_file = $gambar->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'gambar_modul';
		$gambar->move($tujuan_upload,$nama_file);

		Modul::create([
            'title' => $request->title,
			'deskripsi' => $request->deskripsi,
			'gambar' => $nama_file,
		]);

		return redirect()->back();
	}

    public function hapus($id){
        // hapus file
        $modul = Modul::where('modulid',$id)->first();
        FacadesFile::delete('gambar_modul/'.$modul->gambar);

        // hapus data
        Modul::where('modulid',$id)->delete();

        return redirect()->back();
    }
}
