<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pharmacies_account extends Model
{
    use HasFactory;
    protected   $fillable=[

        'number',
        'password',
       
    ];
    public function order()
    {
        return $this->hasMany('App/Modles/order');
    }
}
