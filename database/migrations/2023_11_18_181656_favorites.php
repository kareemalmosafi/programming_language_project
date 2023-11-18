<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('favorites',function(Blueprint $table)
        {
           
$table->increments('id');
$table->unsignedInteger('product_id')->unsigned();
$table->unsignedInteger('warehouse_id')->unsigned();
$table->unsignedInteger('pharmaices_id')->unsigned();
$table->timestamps();


$table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
$table->foreign('warehouse_id')->references('id')->on('warehouse_accounts')->onDelete('cascade');
$table->foreign('pharmaices_id')->references('id')->on('the_pharmacies_accounts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
