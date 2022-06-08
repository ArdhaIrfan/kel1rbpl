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
        $userid = Auth::id();

        $riwayat = DB::table('riwayatmodul')
        ->where('userid', '=', $userid);

        $modul = $riwayat->join('modul', 'riwayatmodul.modulid', '=', 'modul.modulid')->get();

        if($riwayat->exists()){
            $isExist = true;
        } else {
            $isExist = false;
        }

        return view('modul.riwayat-modul', ['modul' => $modul, 'isExist' => $isExist]);
    }

    // by Arif

    public function update_riwayat($modulid){
        $userid = Auth::id();

        DB::table('riwayatmodul')
        ->updateOrInsert(
            ['userid'=>$userid, 'modulid'=>$modulid]
        );
    }

    public function hapusRiwayat($modulid){
        $userid = Auth::id();

        DB::table('riwayatmodul')
        ->where('userid', '=', $userid)
        ->where('modulid', '=', $modulid)
        ->delete();

        return redirect()->back();
    }

}
