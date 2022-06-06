<?php

namespace App\Http\Controllers\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modul;
use Illuminate\Support\Facades\DB;
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
        if(UploadController::checkAdmin()){
            $modul = Modul::get();
            return view('modul.upload.upload-modul',['modul' => $modul]);
        } else {
            return redirect('/landing');
        }
	}

	public function tambahModul(Request $request){
        if($this->checkAdmin()){
            $this->validate($request, [
                'gambar' => 'required|file|mimes:jpeg,png,jpg|max:2048',
                'deskripsi' => 'required',
                'title' => 'required'
            ]);

            // menyimpan data file yang diupload ke variabel $file
            $gambar = $request->file('gambar');

            $nama_file = $request->title.".".$gambar->getClientOriginalName();

                      // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar_modul';
            $gambar->move($tujuan_upload,$nama_file);

            Modul::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'gambar' => $nama_file,
            ]);

            return redirect()->back();
        } else{
            return redirect('/landing');
        }

	}

    public function hapusModul($id){
        if($this->checkAdmin()){
            // hapus file
            $modul = Modul::where('modulid',$id)->first();
            FacadesFile::delete('gambar_modul/'.$modul->gambar);

            // hapus data
            Modul::where('modulid',$id)->delete();

            return redirect()->back();
        } else {
            return redirect('/landing');
        }
    }

    public function editModul($modulid){
        if($this->checkAdmin()){
            $modul = Modul::where('modulid',$modulid)->first();

            $video = DB::table('videopembelajaran')
            -> where('modulid', '=', $modul->modulid)
            ->get();

            return view('modul.upload.edit-modul', ['modul'=>$modul, 'video'=>$video]);
        } else {
            return redirect('/landing');
        }
    }

    public function updateModul(Request $request){
        if($this->checkAdmin()){
            $modul = Modul::where('modulid',$request->id)->first();

            $gambar = $request->gambar;

            if($gambar == ''){
                DB::table('modul')->where('modulid',$request->id)->update([
                    'title' => $request->title,
                    'deskripsi' => $request->deskripsi,
                ]);
            } else {
                FacadesFile::delete('gambar_modul/'.$modul->gambar);

                $nama_file = $request->title.".".$gambar->getClientOriginalName();
                $tujuan_upload = 'gambar_modul';
                $gambar->move($tujuan_upload,$nama_file);

                DB::table('modul')->where('modulid',$request->id)->update([
                    'title' => $request->title,
                    'deskripsi' => $request->deskripsi,
                    'gambar' => $gambar
                ]);
            }

            return redirect('/modul/upload/edit/'.$request->id);
        } else {
            return redirect('/landing');
        }

    }

    public function hapusVideo($modulid, $videoid){
        if($this->checkAdmin()){
            // hapus file
            $video = DB::table('videopembelajaran')
            ->where('modulid', '=', $modulid)
            ->where('videoid', '=', $videoid)
            ->delete();

            return redirect()->back();
        } else {
            return redirect('/landing');
        }
    }
}
