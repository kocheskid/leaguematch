<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserDetails;
use App\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){

        $user_details = UserDetails::find(['user_id' => Auth::user()->id])->first();

        return view('profile.index')->with('user_details', $user_details);
    }

    public function Update(){

        $this->validate(request(), [
            'username' => 'unique:users,username',
            'email' => 'email|unique:users,email',
            'password' => 'min:6|confirmed'
        ]);



    }

}
