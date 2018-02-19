<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    public $isUpdate;

    protected $fillable = [
        'captain_user_id', 'team_name', 'team_logo', 'join_password', 'team_description'
    ];

}
