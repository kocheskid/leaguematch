<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\SliderDetail;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class SliderController extends Controller
{
    public function index(){
        $slide_model = SliderDetail::latest()->paginate();
        return view('admin.slider.index', compact('slide_model'));
    }

    public function create(Request $request){

        if(empty($request->all())){
            $slide_model = new SliderDetail();
            return view('admin.slider.create', compact('slide_model'));
        }else{
            $image = $request->file('slide_img');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/slider_images');
            $image->move($destinationPath, $input['imagename']);
            $slider_details = $request->all();
            $slider_details['slide_img'] = $input['imagename'];
            SliderDetail::create($slider_details);
            return redirect()->route('/admin/slider');
        }
    }

    public function edit($id){
        $slide_model = SliderDetail::find(['id' => $id])->first();
        if(empty($slide_model)){
            return redirect()->route('/admin/slider');
        }else{
            $slide_model->isUpdate = 1;
            return view('admin.slider.create', compact('slide_model'));
        }
    }

    public function update(Request $request, $id){

        $slide_model = SliderDetail::find(['id' => $id])->first();

        $image = $request->file('slide_img');
        if(!empty($image)){
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/slider_images');
            $image->move($destinationPath, $input['imagename']);
        }else{
            $input['imagename'] = $slide_model->slide_img;
        }

        $slider_details = $request->all();
        $slider_details['slide_img'] = $input['imagename'];

        $slide_model->fill($slider_details)->save();

        return redirect()->route('/admin/slider');

    }

    public function destroy($id){
        $slide_model = SliderDetail::find(['id' => $id])->first();
        $slide_model->delete();

        return Redirect::to('/admin/slider');
    }

}
