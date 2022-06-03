<?php

namespace App\Http\Controllers\Artikel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;

class UploadController extends Controller
{
    public function tampilkan(){

        $artikel = Artikel::get();

        return view('artikel.upload-artikel',['artikel' => $artikel]);
    }
}
