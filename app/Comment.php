<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'g_comment';
    protected $fillable = ['username', 'product_id', 'comment'];
}
