<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    protected $table = 'cups';
    public $isUpdate;

    protected $fillable = [
        'cupname', 'teams_number', 'start_date', 'team_type', 'first_prize', 'second_prize', 'third_prize'
    ];

}
