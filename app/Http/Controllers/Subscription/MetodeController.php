<?php

namespace App\Http\Controllers\Subscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function tampilkanVA($id){
        $userid = Auth::id();
        $VA = DB::table('virtualaccountnumber')->where('userid','=',$userid)-> where('status','=',1)->first();
        return view('subscription.payment',['VA'=>$VA, 'tipeid'=>$id]);
    }

    public function generateVANumber($id){
        $mt_rand = mt_rand(10000000,9999999999);
        $status = 1;
        DB::table('virtualaccountnumber')->insert ([
            'nomor'=> $mt_rand,
            'userid'=> Auth::id(),
            'status'=> $status
        ]);
        return redirect ('/subscription/payment/'.$id);
    }

    public function ubahStatusPembayaran($id){
        DB::table('virtualaccountnumber')->where('userid','=',Auth::id())-> where('status','=',1)->delete();
        $bulan=DB::table('tipesubscription')->where('id', '=', $id)->first();
        DB::table('subscription')->where('userid', '=', Auth::id())->update([
            'status'=>0
        ]);
        DB::table('subscription')->insert([
            'userid'=>Auth::id(),
            'tipesubscriptionid'=> $id,
            'start'=> date("Y-m-d"),
            'end' => date("Y-m-d", strtotime('+'.$bulan->bulan. ' month')),
            'status'=> 1            
        ]);
        return redirect('/landing');
    }
}
