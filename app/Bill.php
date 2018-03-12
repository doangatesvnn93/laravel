<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'g_bills';

    public function billDetail()
    {
        return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }

    public function bill()
    {
        return $this->belongsTo('App\Customer', 'id_customer', 'id');
    }
}
