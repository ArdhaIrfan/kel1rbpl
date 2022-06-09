<?php

namespace App\Http\Controllers\Artikel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    //by Ghif
    public function tampilkan() {

        $artikel = DB::table('artikel')->paginate(6);
        return view('artikel.list-artikel', ['artikel' => $artikel]);
    }

    public function pencarian(Request $request){

        $cari = $request->cari;

        $hasil = DB::table('artikel')
		->where('title','like',"%".$cari."%")
        ->orWhere('konten','like',"%".$cari."%")
		->paginate(6);

        return view('artikel.list-artikel', ['artikel' => $hasil]);
    }
}
