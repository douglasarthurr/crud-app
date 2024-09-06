<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos</title>
</head>
<body>
    <header>
        <h1>Bem vindo a área de pedidos</h1>

        <td><a href="{{url('/home')}}"> <button> HOME</button></a></td>
        <td><a href="{{url('/produtos/criar')}}"> <button> CADASTRAR PRODUTOS</button></a></td>
        <td><a href="{{url('/produtos')}}"> <button > LISTAR PRODUTOS</button></a></td>
        <td><a href="{{url('/cliente')}}"> <button  > CLIENTE</button></a></td>
        <td><a href="{{url('/pedido')}}"> <button disabled > PEDIDO</button></a></td>
    </header>

    <ul>
        <!-- Blade -->
        @foreach ($orderList as $orderName)
        
            <li>{{$orderName}}</li>
            <br>

        @endforeach
    </ul>

    <table>
        <thead>
            <tr>
                <tr>        -   codigo do pedido </tr>
                <tr>        -   cliente </tr>
                <tr>        -   pedido </tr>
                <tr>        -   quantidade </tr>
                <tr>        -   valor do pedido</tr>
                <tr>        -   valor do desconto </tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order['codigo_pedido'] }}</td>
                        <td>{{ $order['cliente'] }}</td>
                        <td>{{ $order['produto'] }}</td>
                        <td>{{ $order['quantidade'] }}</td>
                        <td>{{ $order['valor_pedido'] }}</td>
                        <td>{{ $order['valor_desconto'] }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>