<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;
   protected $fillable=['product_id','warehouse_id','pharmaices_id'];


   public function warehouse_account()
   {
       return $this->belongsTo('App/Models/warehouse_account','warehouse_id');
   }

   public function pharmacies_account()
   {
       return $this->belongsTo('App/Models/pharmacies_account','pharmacies_id');
   }

   public function product()
   {
       return $this->belongsTo('App/Models/product','id');
   }

}
