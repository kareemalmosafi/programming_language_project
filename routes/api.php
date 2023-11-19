<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\warehouse_authController;

Route::post('/warehouse/register',[App\Http\Controllers\warehouse_authController::class,'register']);

Route::post('/warehouse/login',[App\Http\Controllers\warehouse_authController::class,'login']);

Route::post('/warehouse/logout',[App\Http\Controllers\warehouse_authController::class,'logout']);