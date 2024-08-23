<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEU PERFIL</title>
</head>
<body>
    <h1>MEU PERFIL</h1>

    <div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">HOME</a></li>
                <li><a href="{{ url('/cadastrar') }}">CADASTRAR</a></li>
                <li><a href="{{ url('/meu-perfil') }}">MEU PERFIL</a></li>
                <li><a href="{{ url('/sair') }}">SAIR</a></li>
            </ul>
        </nav>
    </div>
    <h2>Lista de Documentos</h2>
    <form action="{{ url('store) }}" method="post" enctype="multipart/form-date">
        <input type="text">
        <input type="submit" class="">
    <ul>
        <li>{{ $documento }}</li>
        <li>{{ $documento1 }}</li>
        <li>{{ $documento2 }}</li>
    </ul>
</body>
</html>