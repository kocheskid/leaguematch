<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    protected $table = 'league';
    public $isUpdate;

    protected $fillable = [
        'league_name', 'number_of_maps', 'points_per_map', 'league_level', 'teams_per_league', 'league_start_date', 'matchday_start_date'
    ];

}
