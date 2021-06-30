<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://kit.fontawesome.com/c0d66590f0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css" rel="stylesheets">
</head>
<body>
    <nav>
        <input type="checkbox" id="nav-toggle">
        <div class="titulo__nav">
            <a href="/form">
                <h3>Inventário de Risco</h3>
            </a>
        </div>
        <div class="rotas__nav">
            <ul class="links">
                <li><a href="/config">Configurações</a> </li>
                <li><a href="{{ route('site.sair') }}">Sair</a></li>
            </ul>
        </div>
        <label for="nav-toggle" class="icon-burger"> <i class="fas fa-bars"></i> </label>
    </nav>
    <form action="" method="get">
        <div class="container__form">
            @yield('content')
        </div>
    </form>
</body>
</html>