<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LanggananController extends Controller
{


    public function tampilkan(){
        $langganan = DB::table('subscription') -> where ('userid', '=', Auth::id()) -> where ('status', '=', 1);

        if ($langganan -> exists()) {
            $langganan = $langganan -> first();
            if (date('Y-m-d') <= $langganan -> end) {
                $active = 1;
            } else $active = 0;
        } else {
            $langganan = $langganan -> first();
            $active = 0;
        }

        if ($active == 1) {
            $bulan = DB::table('tipesubscription') -> where ('id', '=', $langganan -> tipesubscriptionid) -> first()-> bulan;} else $bulan = -1;

        $riwayat = DB::table('subscription')
        ->join('tipesubscription', 'subscription.tipesubscriptionid', '=', 'tipesubscription.id')
        -> where ('userid', '=', Auth::id())
        -> get();



        return view('Pengaturan.langganan', ['langganan' => $langganan, 'active' => $active, 'bulan' => $bulan, 'riwayat' => $riwayat]);


    //
    }
}

