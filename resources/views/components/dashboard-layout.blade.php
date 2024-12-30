<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1>{{ $title ?? 'Dashboard' }}</h1>
        </div>
    </header>

    <!-- Navegação -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Início</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard-publication') }}">Publicações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('editaruser') }}">Usuários</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="{{ route('logout') }}">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <main class="py-4">
        <div class="container">
            {{ $slot }}
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="bg-dark text-white py-3">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} - Sua Empresa. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
