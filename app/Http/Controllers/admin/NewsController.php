<?php

namespace App\Http\Controllers\admin;

use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetails;
use App\Role;
use App\Permission;
use App\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $news = News::latest()->paginate();

        return view('admin.news.index', compact('news'));
    }

    public function create(){
        return view('admin.news.create');
    }

    public function store(Request $request){

        $date_time = $request['publish_at'];

        $image = $request->file('news_big_image');

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/news_images');

        $image->move($destinationPath, $input['imagename']);

        $news_details = array('news_title' => $request['news_title'], 'news_content' => $request['news_content'], 'news_big_image' => $input['imagename'], 'news_author' => Auth::user()->id, 'news_views' => 0, 'publish_at' => date('Y-m-d H:i:s', strtotime($date_time)));

        $new_news = News::create($news_details);

        return Redirect::to('/admin/news');

    }

}
