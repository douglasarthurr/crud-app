<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR</title>
</head>


<body>
    <div>
        <h1>LISTAR PRODUTOS</h1>
        <td><a href="{{url('/home')}}"> <button> HOME</button></a></td>
        <td><a href="{{url('/produtos/criar')}}"> <button disabled> CADASTRAR PRODUTOS</button></a></td>
        <td><a href="{{url('/produtos')}}"> <button > LISTAR PRODUTOS</button></a></td>
        <td><a href="{{url('/cliente')}}"> <button  > CLIENTE</button></a></td>
        <td><a href="{{url('/pedido')}}"> <button  > PEDIDO</button></a></td>
    </div> 

    <div>

        <h1>Cadastrar produto</h1>
        <hr>
        
        <form action="  {{  route('products.store')  }}  " method="post" enctype="multipart/form-data">
            @csrf

            <label for="nome_produto">NOME</label>
            <input name="nome_produto" type="text" id="nome_produto" required>

            <label for="marca">MARCA</label>
            <input name="marca" type="text" id="marca" required>

            <label for="categoria">CATEGORIA</label>
            <input name="categoria" type="text" id="categoria" required>

            <label for="valor_compra">VALOR COMPRA</label>
            <input name="valor_compra" type="text" id="valor_compra" required>

            <label for="valor_venda">VALOR VENDA</label>
            <input name="valor_venda" type="text" id="valor_venda" required>

            <label for="qtd_estoque">QUANTIDADE ESTOQUE</label>
            <input name="qtd_estoque" type="text" id="qtd_estoque" required>

            <br>
            <br>
            <input type="submit" class="">

        </form>

    </div>
    
</body>

</html>