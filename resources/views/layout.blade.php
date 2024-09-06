<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Crud</title>
    </head>
    <body>
        <tr>
            <td><a href="{{url('/')}}"> <button > HOME</button></a></td>
            <td><a href="{{url('/products/create')}}"> <button> CADASTRAR PRODUTOS</button></a></td>
            <td><a href="{{url('/products')}}"> <button > LISTAR PRODUTOS</button></a></td>
    
        </tr>
        @yield('content')
    </body>
</html>