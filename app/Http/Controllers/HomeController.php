<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserInfo;
use App\News;
use App\SliderDetail;

class HomeController extends Controller
{

    public function index()
    {
        $all_news = News::where('publish_at', '<=', date('Y-m-d H:i:s'))->orderBy('publish_at', 'desc')->take(4)->get();
        $feat_news = News::where('featured', 1)->orderBy('publish_at', 'desc')->take(5)->get();
        $slide_model = SliderDetail::orderBy('created_at', 'desc')->take(3)->get();


        if(Auth::check()){

            $user_id = Auth::user()->id;
            $user_info = new UserInfo();

            return view('index')->with('steamid_check',$user_info->checkUserSteamID($user_id))->with('all_news', $all_news)->with('feat_news', $feat_news)->with('slide_model', $slide_model);


        }else{
            return view('index')->with('all_news', $all_news)->with('feat_news', $feat_news)->with('slide_model', $slide_model);
        }



    }
}
