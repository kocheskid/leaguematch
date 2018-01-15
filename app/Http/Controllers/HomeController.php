<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserInfo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::check()){

            $user_id = Auth::user()->id;
            $user_info = new UserInfo();

            return view('index')->with('steamid_check',$user_info->checkUserSteamID($user_id));


        }else{
            return view('index');
        }



    }
}
