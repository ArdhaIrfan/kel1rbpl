<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UbahProfilController extends Controller
{
    public function tampilkan() {
        return view('Pengaturan.ubah-profil');
    }
    //
}
