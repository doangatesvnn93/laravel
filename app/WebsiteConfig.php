<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebsiteConfig extends Model
{
    protected $table = 'g_website_config';

    protected $fillable = ['content'];
}
