<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'g_customer';

    public function bill()
    {
        $this->hasMany('App\Bill', 'id_customer', 'id');
    }
}
