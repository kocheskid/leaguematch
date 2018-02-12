<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamMemberPivot extends Model
{
    protected $table = 'team_member_pivot';

    protected $fillable = [
        'team_id', 'user_id'
    ];

}
