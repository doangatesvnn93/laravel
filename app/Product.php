<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'g_products';

    protected $fillable = ['name', 'slug', 'category_id', 'content', 'price', 'avatar', 'color_product_data', 'status'];

}
