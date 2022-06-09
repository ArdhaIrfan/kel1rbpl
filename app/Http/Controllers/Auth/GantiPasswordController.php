<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class GantiPasswordController extends Controller
{

    public function display(){
        return view('auth.passwords.gantipassword');
    }

    public function save(Request $request){
        if ($this->verifikasi($request->old_password) == false) {
            // The passwords not matches
            return redirect()->back()->with("error","Your Password does not Match. Please try again.");
            // return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }
        //uncomment this if you need to validate that the new password is same as old one

        if($this->validasi($request->old_password, $request->new_password) == false){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
            // return response()->json(['errors' => ['current'=> ['New Password cannot be same as your current password']]], 422);
        }

        //Change Password

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        return redirect('/landing');
    }

    public function verifikasi($old_pass){
        if (Hash::check($old_pass, Auth::user()->password)) {
            // The passwords not matches
            return true;
            // return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }
        return false;
    }

    public function validasi($old_pass, $new_pass){
        if (strcmp($old_pass, $new_pass) == 0) {
            // The passwords not matches
            return false;
            // return response()->json(['errors' => ['current'=> ['Current password does not match']]], 422);
        }
        return true;
    }
}
