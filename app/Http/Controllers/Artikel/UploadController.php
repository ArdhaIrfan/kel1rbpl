<?php

namespace App\Http\Controllers\Artikel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as FacadesFile;

class UploadController extends Controller
{

    public function checkAdmin(){
        $userid = Auth::id();

        if($userid == 1){
            return true;
        } else {
            return false;
        }
        return false;
    }

    public function tampilkan(){

        $artikel = Artikel::get();

        return view('artikel.upload-artikel',['artikel' => $artikel]);
    }

    public function simpanArtikel(Request $request){
        if($this->checkAdmin()){
            $this->validate($request, [
                'gambar' => 'required|max:2048',
                'konten' => 'required',
                'title' => 'required'
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $gambar = $request->file('gambar');

            $nama_file = $request->title.".".$gambar->getClientOriginalName();
            $nama_file = str_replace(" ", "", $nama_file);

                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar_artikel';
            $gambar->move($tujuan_upload,$nama_file);

            Artikel::create([
                'title' => $request->title,
                'konten' => $request->konten,
                'gambar' => $nama_file,
                'pembuat' => Auth::id()
            ]);



            return redirect()->back();
        } else{
            return redirect('/landing');
        }

	}

    public function hapusArtikel($id){
        if($this->checkAdmin()){
            // hapus file
            $artikel = Artikel::where('artikelid',$id)->first();
            FacadesFile::delete('gambar_artikel/'.$artikel->gambar);

            // hapus data
            Artikel::where('artikelid',$id)->delete();

            return redirect()->back();
        } else {
            return redirect('/landing');
        }
    }
}

