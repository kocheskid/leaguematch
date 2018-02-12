<?php

namespace App\Http\Controllers\admin;

use function GuzzleHttp\Psr7\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cup;

class CupController extends Controller
{
    public function index(){
        $all_cups = Cup::latest()->paginate();
        return view('admin.cups.index', compact('all_cups'));
    }

    public function create(Request $request){

        if(empty($request->all())){
            $cup_model = new Cup();
            return view('admin.cups.create', compact('cup_model'));
        }else{
            $cup_details = $request->all();
            $cup_details['start_date'] = date('Y-m-d H:i:s', strtotime($cup_details['start_date']));
            Cup::create($cup_details);
            return redirect()->route('/admin/cups');
        }
    }

    public function edit($id){
        $cup_model = Cup::find(['id' => $id])->first();
        if(empty($cup_model)){
            return redirect()->route('/admin/cups');
        }else{
            $cup_model->isUpdate = 1;
            return view('admin.cups.create', compact('cup_model'));
        }
    }

    public function update(Request $request, $id){

        $cup_model = Cup::find(['id' => $id])->first();

        $cup_details = $request->all();
        $cup_details['start_date'] = date('Y-m-d H:i:s', strtotime($cup_details['start_date']));

        $cup_model->fill($cup_details)->save();

        return redirect()->route('/admin/cups');

    }

}
