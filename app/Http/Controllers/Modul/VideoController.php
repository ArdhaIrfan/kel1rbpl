<?php

namespace App\Http\Controllers\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
