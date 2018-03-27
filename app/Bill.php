<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'g_bills';

    protected $fillable = ['name', 'email', 'gender', 'address', 'phone', 'note', 'total_amount', 'data', 'type_payment'];

    public function billDetail()
    {
        return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }

    public function bill()
    {
        return $this->belongsTo('App\Customer', 'id_customer', 'id');
    }
}
