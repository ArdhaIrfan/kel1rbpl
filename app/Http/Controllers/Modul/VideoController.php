<?php

namespace App\Http\Controllers\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    //by Ardha
    public function tampilkan() {
        // $modul = DB::table('absen')
        // ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        // ->select('absen.*', 'pegawai.pegawai_nama')
        // ->paginate();
        return view('modul.video-modul');
    }

    //by Arif
    public function tampilkan_temp($modulid) {
        return redirect($modulid.'/video/1');
    }

    public function tampilkanVideo($modulid, $videoid){
        $modul = DB::table('modul')
        ->where('modulid', '=',$modulid)
        ->first();

        $video = DB::table('videopembelajaran')
        ->where('modulid', '=', $modulid)
        ->where('videoid', '=', $videoid)
        ->first();

        $listvideo = DB::table('videopembelajaran')
        ->where('modulid', '=', $modulid)
        ->get();


        return view('modul.video-modul-copy', ['modul'=>$modul, 'video'=>$video, 'listvideo'=>$listvideo]);
    }

}
