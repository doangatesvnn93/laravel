<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'g_articles';

    protected $fillable = ['name', 'slug', 'content', 'avatar', 'category_id', 'status'];
}
