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

}
