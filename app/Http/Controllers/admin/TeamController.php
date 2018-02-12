<?php

namespace App\Http\Controllers\admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use App\TeamMemberPivot;

class TeamController extends Controller
{
    public function index(){
        $all_teams = Team::latest()->paginate();
        return view('admin.teams.index', compact('all_teams'));
    }

    public function edit($id){
        $team_model = Team::find(['id' => $id])->first();
        if(empty($team_model)){
            return redirect()->route('/admin/teams');
        }else{
            $team_model->isUpdate = 1;
            $team_members = User::select('users.id','users.username')
                ->join('team_member_pivot', 'team_member_pivot.user_id', '=', 'users.id')
                ->where('team_member_pivot.team_id','=',$team_model->id)
                ->getQuery()
                ->get();
            return view('admin.teams.create', compact('team_model'), compact('team_members'));
        }
    }

    public function create(Request $request){

//        if(empty($request->all())){
//            $team_model = new Team();
//            return view('admin.teams.index', compact('team_model'));
//        }else{
//            $image = $request->file('team_logo');
//            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
//            $destinationPath = public_path('/team_logos');
//            $image->move($destinationPath, $input['imagename']);
//            $team_details = $request->all();
//            $team_details['team_logo'] = $input['imagename'];
//            Team::create($team_details);
//            return redirect()->route('/admin/teams');
//        }
    }

    public function update(Request $request, $id){

        $team_model = Team::find(['id' => $id])->first();

        $image = $request->file('team_logo');
        if(!empty($image)){
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/team_logos');
            $image->move($destinationPath, $input['imagename']);
        }else{
            $input['imagename'] = $team_model->team_logo;
        }

        $team_details = $request->all();
        $team_details['team_logo'] = $input['imagename'];

        $team_model->fill($team_details)->save();

        return redirect()->route('/admin/teams');

    }

    public function destroy($id){
        $team_model = Team::find(['id' => $id])->first();
        $team_model->delete();

        return Redirect::to('/admin/teams');
    }


}
