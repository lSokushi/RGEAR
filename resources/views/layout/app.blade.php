<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Minha Aplicação')</title>
<!-- Links para CSS e outras bibliotecas -->
</head>
<body>
<header>
<!-- Navbar ou cabeçalho -->
<nav>
<a href="{{ route('developers.index') }}">Lista de Developers</a>
<a href="{{ route('developers.create') }}">Criar Developer</a>
</nav>
</header>
 
    <main>
<!-- Onde o conteúdo específico de cada página será inserido -->
        @yield('content')
</main>
 
    <footer>
<!-- Rodapé -->
<p>© 2024 Minha Aplicação</p>
</footer>
 
    <!-- Scripts JS, se necessário -->
</body>
</html>