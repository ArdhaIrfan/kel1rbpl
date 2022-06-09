<?php

namespace App\Http\Controllers\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //by Ardha
    //updated by Arif
    public function tampilkan() {
        // $modul = DB::table('absen')
        // ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        // ->select('absen.*', 'pegawai.pegawai_nama')
        // ->paginate();

        $modul = DB::table('modul')->paginate(6);

        return view('modul.list-modul', ['modul' => $modul]);
    }

    // by arif
    public function pencarian(Request $request){

        $cari = $request->cari;

        $hasil = $this->cariModul($cari);

        return view('modul.list-modul', ['modul' => $hasil]);
    }

    public function cariModul($cari){
        $hasil = DB::table('modul')
		->where('title','like',"%".$cari."%")
        ->orWhere('deskripsi','like',"%".$cari."%")
		->paginate(6);
        return $hasil;
    }
}
