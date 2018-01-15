<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'users';

    public function checkUserSteamID($user_id){

        $user = UserInfo::find($user_id);

        if(!empty($user->steamid) && $user->steamid != null){
            return true;
        }else{
            return false;
        }

    }

}
