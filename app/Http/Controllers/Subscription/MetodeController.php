<?php

namespace App\Http\Controllers\Subscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetodeController extends Controller
{
    //
    public function tampilkan(){
        return view('subscription.method');
    }
}
