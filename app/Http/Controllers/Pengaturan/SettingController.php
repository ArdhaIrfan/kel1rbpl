<?php

namespace App\Http\Controllers\Pengaturan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
    public function tampilkan(){
        $email = DB::table('users') -> where ('id', '=', Auth::id()) -> first() -> email;

        $langganan = DB::table('subscription') -> where ('userid', '=', Auth::id()) -> where ('status', '=', 1);

        if ($langganan -> exists()) {
            $langganan = $langganan -> first() -> end;
            $active = 1;
        } else {
            $langganan = $langganan -> first();
            $active = 0;}

        return view('Pengaturan.setting', ['langganan' => $langganan, 'active' => $active, 'email' => $email]);
    //

    }

    public function logout(){
        Auth::logout();
        return redirect('/landing');
    }

    public function deleteAccount(){
        $userid = Auth::id();
        Auth::logout();
        DB::table('virtualaccountnumber')->where('userid', '=', $userid)->delete();
        DB::table('subscription')->where('userid', '=', $userid)->delete();
        DB::table('riwayatmodul')->where('userid', '=', $userid)->delete();
        DB::table('users')->where('id', '=', $userid)->delete();

        return redirect('/landing');
    }
}
