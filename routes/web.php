<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('ListarProdutos');
});


Route::get('products', [ProductController::class, 'index'])->name('products.index');

// Route::get('/listar-produtos', function () {
//     $documento = 'CPF';
//     $documento1 = 'RG';
//     $documento2 = 'TÍTULO DE ELEITOR';
//     return view('ListarProdutos') 
//         -> with('documento', $documento)
//         -> with('documento1', $documento1)
//         -> with('documento2', $documento2);
// });


