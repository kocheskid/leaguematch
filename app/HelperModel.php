<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class HelperModel extends Model
{
    public static function getTeamTypes(){
        return [
            'Free' => 'Free',
            'Premium' => 'Premium'
        ];
    }

    public static function getLoggedUserSelect(){
        return [
            Auth::user()->id => Auth::user()->username
        ];
    }

    public static function getTeamCaptain($id){

        $team_captain = User::find(['id' => $id])->select('id','username')->first();

        return [
          $team_captain->id => $team_captain->username
        ];

    }

}
