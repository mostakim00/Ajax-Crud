<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


route::get('/',[ProductController::class,'products'])->name('products');
route::post('/add-product',[ProductController::class,'addProduct'])->name('add.product');



