<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warehouse_account extends Model
{
    use HasFactory;
    protected   $fillable=[
        'email',
        'password',
       
    ];
    public function product()
    {
        return $this->hasMany('App/Modles/product');
    }

}
