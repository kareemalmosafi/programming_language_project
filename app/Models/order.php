<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected   $fillable=[
        'status',
        'pay_status',
        'pharmacies_id',
        'warehouse_id',
        'content',

       
    ];
    public function warehouse_account()
    {
        return $this->belongsTo('App/Models/warehouse_account','warehouse_id');
    }

    public function pharmacies_account()
    {
        return $this->belongsTo('App/Models/pharmacies_account','pharmacies_id');
    }
}
