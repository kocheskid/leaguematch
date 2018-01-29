<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index(){
        $all_news = News::orderBy('publish_at', 'desc')->take(1000)->get();

        return view('news.index')->with('all_news', $all_news);
    }

    public function post($id){
        $post_blog = News::where('id', $id)->get();

        return view('news.post')->with('post_blog', $post_blog);
    }
}
