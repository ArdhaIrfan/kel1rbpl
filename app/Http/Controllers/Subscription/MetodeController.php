<?php

namespace App\Http\Controllers\Subscription;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MetodeController extends Controller
{
    //
    public function tampilkan(){
        return view('subscription.subs');
    }

    public function tampilkanmetode(){
        return view('subscription.method');
    }

    public function tampilkanVA(){
        return view('subscription.payment');
    }
}