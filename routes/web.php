<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\OrderController;

// BukuController
Route::get('/formulir',[BukuController::class,'formulir']);
Route::post('/formulir/proses',[BukuController::class,'formulir_proses'] );

//OrderController
Route::get('/form',[OrderController::class,'create_form']);
Route::post('/form/procces',[OrderController::class,'procces_form'] );


