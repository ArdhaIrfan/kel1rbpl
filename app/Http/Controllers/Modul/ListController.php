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
}
