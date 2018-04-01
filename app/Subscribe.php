<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    protected $table = 'g_subscribe';

    protected $fillable = ['email', 'subscribe'];
}
