<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UbahProfilController extends Controller
{
    public function tampilkan() {
        $userid = Auth::id();
        $profil = DB::table('users')-> where('id', $userid) -> first();
        return view('Pengaturan.ubah-profil', ['profil' => $profil]);
    }
    public function simpan(Request $request) {
        $userid = Auth::id();
        DB::table('users')-> where('id', $userid)
        -> update ([
            'name'=>$request->nama,
            'email'=>$request->email,
            'jeniskelamin'=>$request->jenis_kelamin,
            'tanggallahir'=>$request->tanggal_lahir,
            'nomortelp'=>$request->nomor_telepon,
            'asal'=>$request->asal
        ]);
        return redirect()->back();
    }
    //
}
