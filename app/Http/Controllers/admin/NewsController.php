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

        if($request['switch-checkbox'] == 'on'){
            $featured = 1;
        }else{
            $featured = 0;
        }

        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

        $destinationPath = public_path('/news_images');

        $image->move($destinationPath, $input['imagename']);

        $news_details = array('news_title' => $request['news_title'], 'news_content' => $request['news_content'], 'news_big_image' => $input['imagename'], 'news_author' => Auth::user()->id, 'news_views' => 0, 'publish_at' => date('Y-m-d H:i:s', strtotime($date_time)), 'featured' => $featured);

        $new_news = News::create($news_details);

        return Redirect::to('/admin/news');

    }

    public function edit($id){
        $news_model = News::find(['id' => $id])->first();
        return view('admin.news.update', compact('news_model'));
    }

    public function update(Request $request){

        $news_editing = $request['edit_post'];

        $date_time = $request['publish_at'];

        $image = $request->file('news_big_image');

        if($request['switch-checkbox'] == 'on'){
            $featured = 1;
        }else{
            $featured = 0;
        }

        if(empty($image)){
            $news_details = array('news_title' => $request['news_title'], 'news_content' => $request['news_content'], 'news_author' => Auth::user()->id, 'news_views' => 0, 'publish_at' => date('Y-m-d H:i:s', strtotime($date_time)), 'featured' => $featured);
        }else{
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/news_images');

            $image->move($destinationPath, $input['imagename']);

            $news_details = array('news_title' => $request['news_title'], 'news_content' => $request['news_content'], 'news_big_image' => $input['imagename'], 'news_author' => Auth::user()->id, 'news_views' => 0, 'publish_at' => date('Y-m-d H:i:s', strtotime($date_time)), 'featured' => $featured);
        }

        $new_news = News::find(['id' => $news_editing])->first();
        $new_news->fill($news_details)->save();

        return Redirect::to('/admin/news');

    }

    public function destroy($id){
        $news_model = News::find(['id' => $id])->first();
        $news_model->delete();

        return Redirect::to('/admin/news');
    }

}
