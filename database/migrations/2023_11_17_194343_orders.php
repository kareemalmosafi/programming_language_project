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
        Schema::create('orders',function(Blueprint $table)
        {
$table->increments('id');
$table->integer('pharmacie_id')->unsigned();
$table->integer('warehouse_id')->unsigned();
$table->string('status');
$table->string('pay_status');
$table->json('content');
$table->timestamps();


$table->foreign('pharmacie_id')->references('id')->on('pharmacies_accounts')->onDelete('cascade');
$table->foreign('warehouse_id')->references('id')->on('warehouse_accounts')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('orders');
    }
};
