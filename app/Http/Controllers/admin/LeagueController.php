<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\League;

class LeagueController extends Controller
{
    public function index(){
        $all_leagues = League::latest()->paginate();
        return view('admin.leagues.index', compact('all_leagues'));
    }

    public function create(Request $request){

        if(empty($request->all())){
            $league_model = new League();
            return view('admin.leagues.create', compact('league_model'));
        }else{
            $league_details = $request->all();
            $league_details['league_start_date'] = date('Y-m-d', strtotime($league_details['league_start_date']));
            $league_details['matchday_start_date'] = date('Y-m-d', strtotime($league_details['matchday_start_date']));
            League::create($league_details);
            return redirect()->route('/admin/leagues');
        }
    }

    public function edit($id){
        $league_model = League::find(['id' => $id])->first();
        if(empty($league_model)){
            return redirect()->route('/admin/leagues');
        }else{
            $league_model->isUpdate = 1;
            return view('admin.leagues.create', compact('league_model'));
        }
    }

    public function update(Request $request, $id){

        $league_model = League::find(['id' => $id])->first();

        $league_details = $request->all();
        $league_details['league_start_date'] = date('Y-m-d', strtotime($league_details['league_start_date']));
        $league_details['matchday_start_date'] = date('Y-m-d', strtotime($league_details['matchday_start_date']));

        $league_model->fill($league_details)->save();

        return redirect()->route('/admin/leagues');

    }

    public function destroy($id){
        $league_model = League::find(['id' => $id])->first();
        $league_model->delete();

        return Redirect::to('/admin/leagues');
    }

}
