<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/test', function() {
    return view('layouts.test');
});


Route::get('/',[productController::class,'index'])->name('product.index');
Route::get('product/create',[productController::class,'create'])->name('product.create');
Route::post('product/store',[productController::class,'store'])->name('product.store');

// route for editing data.
Route::get('products/{id}/edit',[productController::class,'edit'])->name('product.edit');

// route for updating data.
Route::put('products/{id}/update',[productController::class,'update'])->name('product.update');

// route for deleting data.
Route::get('products/{id}/destroy',[productController::class,'destroy'])->name('product.destroy');
