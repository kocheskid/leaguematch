<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamRole extends Model
{
    protected $table = 'team_role';

    protected $fillable = [
        'user_id', 'team_id', 't_role'
    ];

}
