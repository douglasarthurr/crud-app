<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
</head>
<body>
    <header>
        <h1>Bem vindo a área de cliente</h1>

        <td><a href="{{url('/home')}}"> <button> HOME</button></a></td>
        <td><a href="{{url('/produtos/criar')}}"> <button> CADASTRAR PRODUTOS</button></a></td>
        <td><a href="{{url('/produtos')}}"> <button > LISTAR PRODUTOS</button></a></td>
        <td><a href="{{url('/cliente')}}"> <button disabled > CLIENTE</button></a></td>
        <td><a href="{{url('/pedido')}}"> <button  > PEDIDO</button></a></td>
    </header>

    <ul>
        <!-- Blade -->
        @foreach ($clientList as $clientName)
        
            <li>{{$clientName}}</li>
            <br>

        @endforeach
    </ul>

    <table>
        <thead>
            <tr>
                <tr>        -   ID -----</tr>
                <tr>        -   nome ----------------</tr>
                <tr>        -   cpf --------------</tr>
                <tr>        -   rg --</tr>
                <tr>        -   sexo</tr>
                <tr>        -   data de nascimento</tr>
                <tr>        -   celular</tr>
                <tr>        -   email</tr>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client['id'] }}</td>
                        <td>{{ $client['nome'] }}</td>
                        <td>{{ $client['cpf'] }}</td>
                        <td>{{ $client['rg'] }}</td>
                        <td>{{ $client['sexo'] }}</td>
                        <td>{{ $client['data_nascimento'] }}</td>
                        <td>{{ $client['celular'] }}</td>
                        <td>{{ $client['email'] }}</td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</body>
</html>