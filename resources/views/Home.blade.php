<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>HOME</h1>

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
</body>
</html>