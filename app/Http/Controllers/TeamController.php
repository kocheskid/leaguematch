<?php

namespace App\Http\Controllers;

use App\TeamRole;
use App\User;
use Illuminate\Http\Request;
use App\Team;
use App\TeamMemberPivot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    public function index(){
        $team_model = Team::select()
            ->join('team_member_pivot', 'team_member_pivot.team_id', '=', 'teams.id')
            ->where('team_member_pivot.user_id', '=', Auth::user()->id)
            ->getQuery()
            ->first();

        if(empty($team_model)){
            $team_players = new User();
        }else{
            $team_players = User::select('users.username', 'user_details.age', 'user_details.country', 'team_role.t_role')
                ->leftJoin('user_details','user_details.user_id','=','users.id')
                ->join('team_role','team_role.user_id','=','user_details.user_id')
                ->where('team_role.team_id','=',$team_model->team_id)
                ->getQuery()
                ->get();
        }


        return view('profile.team.index')->with('team_model', $team_model)->with('team_players', $team_players);
    }

    public function create(Request $request){

        if(empty($request->all())){
            $team_model = new Team();
            $team_member_model = new TeamMemberPivot();
            $team_role_model = new TeamRole();

            $all_players = User::select('id','username')->where('id', '!=', Auth::user()->id)->pluck('username', 'id');

            return view('profile.team.create')->with('team_model', $team_model)->with('team_role_model', $team_role_model)->with('all_players', $all_players);
        }else{

            try{

                DB::beginTransaction();

                $image = $request->file('team_logo');

                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/team_logos');
                $image->move($destinationPath, $input['imagename']);
                $team_insert = array('captain_user_id' => $request['username'][0], 'team_name' => $request['team_name'], 'team_logo' => $input['imagename'], 'join_password' => $request['join_password'], 'team_description' => $request['team_description']);

                $team_new_model = new Team();
                $team_new_model->fill($team_insert)->save();

                $team_new_id = $team_new_model->id;

                for($i = 0; $i < count($request['username']); $i++){

                    if(!empty($request['username'][$i])){
                        $tmp = array('team_id' => $team_new_id, 'user_id' => $request['username'][$i]);
                        $team_new_member_pivot = new TeamMemberPivot();
                        $team_new_member_pivot->fill($tmp);
                        $team_new_member_pivot->save();

                        if(isset($request['t_role'][$i])){
                            $roles = '';
                            foreach($request['t_role'][$i] as $t_role){
                                $roles .= $t_role . ',';
                            }
                            $roles = rtrim($roles, ',');
                            $tmp_roles = array('user_id' => $request['username'][$i], 'team_id' => $team_new_id, 't_role' => $roles);
                            $team_role_insert = new TeamRole();
                            $team_role_insert->fill($tmp_roles);
                            $team_role_insert->save();
                        }
                    }

                }
                DB::commit();

                Session::flash('Success', 'Team was created!');
                return redirect()->to('/profile/team');

            }catch (\Exception $ex){

                DB::rollBack();
                Session::flash('Danger', 'Team was not created. Try again!');
                return redirect()->to('/profile/team/create');

            }

        }
    }

    public function edit($id){

        $team_model = Team::where(['id' => $id])->first();

        if($team_model->captain_user_id != Auth::user()->id || empty($team_model)){
            Session::flash('Danger', 'Page not found!');
            return redirect()->to('/profile/team');
        }

        $team_member_model = TeamMemberPivot::where(['team_id' => $team_model->id])->get()->toArray();

        $team_role_model = TeamRole::where(['team_id' => $team_model->id])->get()->toArray();

        $all_players = User::select('id','username')->where('id', '!=', Auth::user()->id)->pluck('username', 'id');

        return view('profile.team.update')->with('team_model', $team_model)->with('team_role_model', $team_role_model)->with('all_players', $all_players)->with('team_member_model', $team_member_model);

    }

    public function update(Request $request, $id){

        $team_u_model = Team::where(['id' => $id])->first();

        if($team_u_model->captain_user_id != Auth::user()->id || empty($tem_u_model)){
            Session::flash('Danger', 'Page not found!');
            return redirect()->to('/profile/team');
        }

        try{

            DB::beginTransaction();

            $image = $request->file('team_logo');

            if(!empty($image)){
                $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/team_logos');
                $image->move($destinationPath, $input['imagename']);
            }else{
                $input['imagename'] = $team_u_model->team_logo;
            }

            $team_insert = array('captain_user_id' => $request['username'][0], 'team_name' => $request['team_name'], 'team_logo' => $input['imagename'], 'join_password' => $request['join_password'], 'team_description' => $request['team_description']);

            $team_u_model->fill($team_insert)->save();

            $team_new_id = $team_u_model->id;

            $team_m_pivot_delete = TeamMemberPivot::where(['team_id' => $team_new_id])->get();
            $team_role_delete = TeamRole::where(['team_id' => $team_new_id])->get();

            if(!empty($team_m_pivot_delete)){
                foreach($team_m_pivot_delete as $tmpd){
                    $tmpd->delete();
                }
            }
            if(!empty($team_role_delete)){
                foreach($team_role_delete as $trd){
                    $trd->delete();
                }
            }

            for($i = 0; $i < count($request['username']); $i++){

                if(!empty($request['username'][$i])){
                    $tmp = array('team_id' => $team_new_id, 'user_id' => $request['username'][$i]);
                    $team_new_member_pivot = new TeamMemberPivot();
                    $team_new_member_pivot->fill($tmp);
                    $team_new_member_pivot->save();

                    if(isset($request['t_role'][$i])){
                        $roles = '';
                        foreach($request['t_role'][$i] as $t_role){
                            $roles .= $t_role . ',';
                        }
                        $roles = rtrim($roles, ',');
                        $tmp_roles = array('user_id' => $request['username'][$i], 'team_id' => $team_new_id, 't_role' => $roles);
                        $team_role_insert = new TeamRole();
                        $team_role_insert->fill($tmp_roles);
                        $team_role_insert->save();
                    }
                }

            }
            DB::commit();

            Session::flash('Success', 'Team was updated!');
            return redirect()->to('/profile/team');

        }catch (\Exception $ex){

            DB::rollBack();
            Session::flash('Danger', 'Team was not updated. Try again!');
            return redirect()->to('/profile/team');

        }

    }

}
