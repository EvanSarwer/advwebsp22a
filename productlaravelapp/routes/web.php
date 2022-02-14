<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/',[CourseController::class,'listCourse']);

Route::get('/product/list',[ProductController::class,'list'])->name('product.list');
Route::get('/product/editProduct/{id}',[ProductController::class,'editProduct'])->name('product.editProduct');
Route::post('/product/editProductS/{id}',[ProductController::class,'editProductSubmit'])->name('product.editProductSubmit');
Route::get('/deleteProduct/{id}',[ProductController::class,'deleteProduct'])->name('product.deleteProduct');;

Route::get('/addproduct',[ProductController::class,'addproduct']);
Route::post('/addproduct',[ProductController::class,'addproductsubmit'])->name('addproduct.submit');
