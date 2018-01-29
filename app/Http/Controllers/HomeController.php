<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserInfo;
use App\News;

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

        $all_news = News::orderBy('publish_at', 'desc')->take(4)->get();
        $feat_news = News::where('featured', 1)->orderBy('publish_at', 'desc')->take(5)->get();


        if(Auth::check()){

            $user_id = Auth::user()->id;
            $user_info = new UserInfo();

            return view('index')->with('steamid_check',$user_info->checkUserSteamID($user_id))->with('all_news', $all_news)->with('feat_news', $feat_news);


        }else{
            return view('index')->with('all_news', $all_news)->with('feat_news', $feat_news);
        }



    }
}
