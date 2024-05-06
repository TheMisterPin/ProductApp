<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('product_form');
});

Route::post('/save-product', [ProductController::class, 'store'])->name('save.product');
