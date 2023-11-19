<?php

namespace App\Models;

//use Illuminate\Foundation\Auth\warehouse_account as Authenticatable;
//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Facades\Auth;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class warehouse_account extends Model //implements Authenticatable or extends User model
{  use \Illuminate\Auth\Authenticatable;
    use HasFactory, HasApiTokens;
    protected   $fillable=[
        'email',
        'password',
       
    ];
    public function product()
    {
        return $this->hasMany('App/Modles/product');
    }
  
}
