<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SliderDetail extends Model
{
    protected $table = 'slider_details';
    public $isUpdate;

    protected $fillable = [
        'slide_title', 'slide_text', 'slide_img', 'slide_img_url', 'slide_link'
    ];
}
