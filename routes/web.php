<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/produtos', [ProductController::class, 'index']) -> name('products.index');

Route::get('/produtos/criar', [ProductController::class, 'create']) -> name('products.create');

Route::post('/products', [ProductController::class, 'store']) -> name('products.store');

