
@extends('layout')

@section('content')
    <h1>Detalhes do Produto</h1>

    <ul>
        <li>ID: {{ $product->id }}</li>
        <li>Nome: {{ $product->nome_produto }}</li>
        <li>Marca: {{ $product->marca }}</li>
        <li>Categoria: {{ $product->categoria }}</li>
        <li>Valor Cmpra: {{ $product->valor_compra }}</li>
        <li>Valor Venda: {{ $product->valor_venda }}</li>
        <li>Qtd Estoque: {{ $product->qtd_estoque }}</li>
        
    </ul>

    <a href="{{ route('products.index') }}">Voltar</a>
@endsection
