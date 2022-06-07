<?php

namespace App\Http\Controllers\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    //by Ardha
    public function tampilkan() {
        // $modul = DB::table('absen')
        // ->join('pegawai', 'absen.IDPegawai', '=', 'pegawai.pegawai_id')
        // ->select('absen.*', 'pegawai.pegawai_nama')
        // ->paginate();
        return view('modul.riwayat-modul');
    }

    // by Arif
    public function tampilkan_temp() {

        $userid = Auth::id();

        $riwayat = DB::table('riwayatmodul')
        ->where('userid', '=', $userid);

        $modul = $riwayat->join('modul', 'riwayatmodul.modulid', '=', 'modul.modulid')->get();

        if($riwayat->exists()){
            $isExist = true;
        } else {
            $isExist = false;
        }

        return view('modul.riwayat-modul-copy', ['modul' => $modul, 'isExist' => $isExist]);

    }

    public function update_riwayat($modulid){
        $userid = Auth::id();

        DB::table('riwayatmodul')
        ->updateOrInsert(
            ['userid'=>$userid, 'modulid'=>$modulid]
        );
    }

}
