<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'g_products';

    protected $fillable = ['name', 'slug', 'category_id', 'content', 'price', 'avatar', 'color_product_data'];

    public function productType()
    {
        return $this->belongsTo('App\ProductType', 'id_type', 'id');
    }

    public function billDetail()
    {
        return $this->hasMany('App\BillDetail', 'id_product', 'id');
    }
}
