<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
</head>
<body>
    <div>
        <h1>PAGINA INICIAL</h1>
        <tr>
            <td><a href="{{url('/')}}"> <button disabled> HOME</button></a></td>
            <td><a href="{{url('/products/create')}}"> <button> CADASTRAR PRODUTOS</button></a></td>
            <td><a href="{{url('/products')}}"> <button > LISTAR PRODUTOS</button></a></td>
  
        </tr>
    </div>
    
</body>
</html>