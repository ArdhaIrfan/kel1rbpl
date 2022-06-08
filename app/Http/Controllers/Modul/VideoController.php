<?php

namespace App\Http\Controllers\Modul;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    //by Arif
    public function tampilkan($modulid) {
        return redirect('/modul/video/'.$modulid.'/1');
    }

    public function tampilkanVideo($modulid, $videoid){

        app('App\Http\Controllers\Modul\RiwayatController')->update_riwayat($modulid);

        $modul = DB::table('modul')
        ->where('modulid', '=',$modulid)
        ->first();

        $listvideo = DB::table('videopembelajaran')
        ->where('modulid', '=', $modulid)
        ->get();

        $video_temp = DB::table('videopembelajaran')->where('modulid', '=', $modulid)->where('videoid', '=', $videoid);

        if($video_temp->exists()){
            $isVideoExist = 1;
        } else {
            $isVideoExist = 0;
        }

        $video = $video_temp->first();


        return view('modul.video-modul', ['modul'=>$modul, 'video'=>$video, 'isVideoExist'=>$isVideoExist, 'listvideo'=>$listvideo]);
    }

    public function simpanLaporan(Request $request){

        DB::table('pelaporanmasalah')->insert([
            'videoid' => $request->videoid,
            'modulid' => $request->modulid,
            'judul' => $request->judul,
            'keluhan' => $request->keluhan
        ]);

        return redirect()->back();
    }

}
