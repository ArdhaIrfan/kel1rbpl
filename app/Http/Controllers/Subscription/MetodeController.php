<?php

namespace App\Http\Controllers\Subscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MetodeController extends Controller
{
    //
    public function tampilkan(){
        return view('subscription.subs');
    }

    public function tampilkanmetode($id){
        $tipe = DB::table('tipesubscription') ->where ('id','=',$id) -> first();
        return view('subscription.method', ['tipe'=>$tipe]);
    }

    public function tampilkanVA(){
        return view('subscription.payment');
    }

    public function generateVANumber(){
        $mt_rand = mt_rand(10000000,9999999999);
        DB::table('virtualaccountnumber')->insert ([
            'nomor'=> $mt_rand
        ]);
        return redirect ('/subscription/payment');
    }
}