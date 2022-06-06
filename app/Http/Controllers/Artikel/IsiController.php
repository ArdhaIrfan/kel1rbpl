<?php

namespace App\Http\Controllers\Artikel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IsiController extends Controller
{
    //by Ghif
    public function tampilkan() {

        $artikel = DB::table('artikel')->paginate(6);
        return view('artikel.isi-artikel', ['artikel' => $artikel]);
    }
}
