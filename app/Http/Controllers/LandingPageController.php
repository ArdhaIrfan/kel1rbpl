<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    public function tampilkan()
    {
        $modul = DB::table('modul')->limit(3)->get();

        return view('landingpage.landingpage', ['modul'=>$modul]);
    }
}
