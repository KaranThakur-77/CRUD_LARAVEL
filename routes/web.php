<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/',[productController::class,'index'])->name('product.index');
Route::get('product/create',[productController::class,'create'])->name('product.create');
Route::post('product/store',[productController::class,'store'])->name('product.store');
