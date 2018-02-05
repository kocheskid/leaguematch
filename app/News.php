<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'news_title', 'news_content', 'news_big_image', 'news_author', 'news_views', 'publish_at', 'featured'
    ];

}
