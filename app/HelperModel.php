<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelperModel extends Model
{
    public static function getTeamTypes(){
        return [
            'Free' => 'Free',
            'Premium' => 'Premium'
        ];
    }
}
