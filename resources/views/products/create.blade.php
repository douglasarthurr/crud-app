
@extends('layout')
@section('content')
    <h1>Adicionar Produto</h1>

    <form action="{{ route('products.store') }}" method="post">
        @csrf

        <label for="nome_produto">Nome:</label>
        <input type="text" name="nome_produto" id="nome_produto" required>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" required>

        <label for="categoria">Cartegoria:</label>
        <input type="text" name="categoria" id="categoria" required>

        <label for="valor_compra">Valor Compra:</label>
        <input type="text" name="valor_compra" id="valor_compra" required step="0.01">

        <label for="valor_venda">Valor Venda:</label>
        <input type="text" name="valor_venda" id="valor_venda" required step="0.01">

        <label for="qtd_estoque">Qtd Estoque:</label>
        <input type="text" name="qtd_estoque" id="qtd_estoque" required>

        <button type="submit">Salvar</button>

    </form>

@endsection
