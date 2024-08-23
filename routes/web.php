<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});


Route::get('/sair', function () {
    return view('welcome');
});

Route::get('/cadastrar', function () {
    return view('Cadastrar');
});

Route::get('/meu-perfil', function () {
    $documento = 'CPF';
    $documento1 = 'RG';
    $documento2 = 'TÍTULO DE ELEITOR';
    return view('MeuPerfil') 
        -> with('documento', $documento)
        -> with('documento1', $documento1)
        -> with('documento2', $documento2);
});


