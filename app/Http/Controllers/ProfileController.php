<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\UserDetails;
use App\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){

        $user_details = UserDetails::where(['user_id' => Auth::user()->id])->first();

        return view('profile.index')->with('user_details', $user_details);
    }

    public function Update(){

        if(empty(request()['password'])){
            $this->validate(request(), [
                'username' => 'unique:users,username,'.Auth::user()->id,
                'email' => 'email|unique:users,email,'.Auth::user()->id,
                'steamid' => 'unique:users,steamid,'.Auth::user()->id,
            ]);

            $user_update = array('email' => request()['email'], 'username' => request()['username'], 'steamid' => request()['steamid']);
        }else{
            $this->validate(request(), [
                'username' => 'unique:users,username,'.Auth::user()->id,
                'email' => 'email|unique:users,email,'.Auth::user()->id,
                'password' => 'min:6|confirmed',
                'steamid' => 'unique:users,steamid,'.Auth::user()->id,
            ]);

            $user_update = array('email' => request()['email'], 'username' => request()['username'], 'password' => request()['password'], 'steamid' => request()['steamid']);
        }

        //If user uploaded avatar

        $image = request()->file('avatar_img');

        if(!empty($image)){

            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/users_avatars');

            $image->move($destinationPath, $input['imagename']);

        }

        //----------


        try{

            DB::connection()->getPdo()->beginTransaction();

            $user_details_update = array('user_id' => Auth::user()->id, 'first_name' => request()['first-name'], 'last_name' => request()['last-name'], 'country' => request()['country'], 'state' => request()['state'], 'age' => request()['age'], 'avatar' => empty($image) ? Auth::user()->avatar : $input['imagename']);

            $user_model = User::find(Auth::user()->id);
            $user_model->fill($user_update)->save();

            $user_details_model = UserDetails::where(['user_id' => Auth::user()->id])->first();

            if(count($user_details_model) > 0){
                $user_details_model->fill($user_details_update)->save();
            }else{
                UserDetails::create($user_details_update);
            }

            DB::commit();
        }catch (\PDOException $ex){

            request()->session()->flash('Danger', 'Something went wrong!');
            DB::rollBack();

        }

        request()->session()->flash('Success', 'Profile updated!');
        return redirect()->to('/profile/');

    }

}
