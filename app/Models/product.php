<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected   $fillable=[
        'name_scientific',
        'name_trade',
        'type',
        'company',
        'quantity',
        'ex_date',
        'warehouse_id',
    ];

    public function warehouse_account()
    {
        return $this->belongsTo('App/Models/warehouse_account','warehouse_id');
    }
}
