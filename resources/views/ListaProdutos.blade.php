<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUTO</title>
</head>


<body>
    <div>
        <h1>LISTAR PRODUTOS</h1>
        <td><a href="{{url('/home')}}"> <button> HOME</button></a></td>
        <td><a href="{{url('/produtos/criar')}}"> <button> CADASTRAR PRODUTOS</button></a></td>
        <td><a href="{{url('/produtos')}}"> <button disabled > LISTAR PRODUTOS</button></a></td>
    </div> 

    <div>

        <h1>Lista de produtos</h1>
        <hr>
        @if (Session::has('message'))
            <h2> {!! Session::get('message')!!} </h2>
        @endif

        <ul>
            <!-- Blade -->
            @foreach ($productList as $productName)
            
                <li>{{$productName}}</li>

            @endforeach
        </ul>

        <table>
            <thead>
                <tr>
                    <tr>        -   ID</tr>
                    <tr>        -   NOME</tr>
                    <tr>        -   PREÇO</tr>
                    <tr>        -   CATEGORIA</tr>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['nome_produto'] }}</td>
                        <td>{{ $product['valor_venda'] }}</td>
                        <td>{{ $product['categoria'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    
</body>

</html>