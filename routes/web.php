<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Home');
});


// Route::get('/cliente', function () {
//     return view('Cliente');
// });

// Route::get('/pedido', [OrderController::class, 'index']) -> name('orders.index');

// Route::get('/cliente', [ClientController::class, 'index']) -> name('clients.index');

// Route::get('/produtos', [ProductController::class, 'index']) -> name('products.index');

// Route::get('/produtos/criar', [ProductController::class, 'create']) -> name('products.create');

// Route::post('/products', [ProductController::class, 'store']) -> name('products.store');


Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

