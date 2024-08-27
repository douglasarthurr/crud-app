<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
    <header>
        <nav>
            <li>HOME</li>
            <li>LISTA PRODUTOS</li>
        </nav>
    </header>  

    <div>

        <h1>Lista de produtos</h1>
        <hr>

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