
@extends('layout')
@section('content')
    <h1>Editar Produto</h1>

    <form action="{{ route('products.update', $product) }}" method="post">
        @csrf
        @method("PUT")
        <label for="nome_produto">Nome:</label>
        <input type="text" name="nome_produto" id="nome_produto" value="{{ $product->nome_produto }}" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" value="{{ $product->marca }}" required>

        <label for="categoria">Cartegoria:</label>
        <input type="text" name="categoria" id="categoria" value="{{ $product->categoria }}" required>

        <label for="valor_compra">Valor Compra:</label>
        <input type="text" name="valor_compra" id="valor_compra" value="{{ $product->valor_compra }}" required step="0.01">

        <label for="valor_venda">Valor Venda:</label>
        <input type="text" name="valor_venda" id="valor_venda" value="{{ $product->valor_venda }}" required step="0.01">

        <label for="qtd_estoque">Qtd Estoque:</label>
        <input type="text" name="qtd_estoque" id="qtd_estoque" value="{{ $product->qtd_estoque }}" required>

        <button type="submit">Atualizar</button>

    </form>

@endsection

