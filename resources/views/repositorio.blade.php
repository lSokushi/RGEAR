<!-- 1. Main Layout -->
<x-main-layout title="RGEAR | Repositórios">

    <!-- 2. Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- 3. Main Content -->
    <main class="container mt-4">

        <!-- 3.1. Header -->
        <div class="text-center mb-4">
            <h1 class="fw-bold">Repositórios</h1>
            <p class="text-muted">Explore os repositórios disponíveis e encontre o que procura.</p>
        </div>

        <!-- 3.2. Search Bar -->
        <div class="mb-4">
            <label for="searchBar" class="form-label">Pesquise aqui:</label>
            <div class="input-group">
                <span class="input-group-text" id="search-icon">
                    <i class="fa fa-search"></i>
                </span>
                <input type="text" id="searchBar" class="form-control" placeholder="Digite sua busca aqui..." aria-label="Barra de pesquisa" aria-describedby="search-icon">
                <button class="btn btn-outline-secondary" id="clearSearch">Limpar</button>
            </div>
        </div>

        <!-- 3.3. Advanced Filter -->
        <div class="d-flex justify-content-between align-items-center mb-4" id="filterContainer" style="display: none;">
            <div class="dropdown" id="filterDropdownContainer">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false" aria-controls="filterDropdown">
                    Filtros
                </button>
                <ul class="dropdown-menu " aria-labelledby="filterDropdown">
                    <li><a class="dropdown-item" href="#">Por Data</a></li>
                    <li><a class="dropdown-item" href="#">Por Relevância</a></li>
                    <li><a class="dropdown-item" href="#">Por Nome</a></li>
                </ul>
            </div>
            <button class="btn btn-primary" id="applyFilters">Aplicar Filtros</button>
        </div>

        <!-- 3.4. Pagination -->
        <nav aria-label="Navegação de página">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Próximo</a>
                </li>
            </ul>
        </nav>

        <!-- 4. Sections -->

        <!-- 4.1. Articles Section -->
        <section class="mb-5">
            <h2 class="mb-4 text-secondary">Artigos</h2>
            <div class="row g-4">
                @if (isset($publications) && $publications->isNotEmpty())
                    @foreach ($publications as $publication)
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                @if (!empty($publication->images))
                                    @foreach (json_decode($publication->images) as $key => $image)
                                        @if ($key == 0)
                                            <img src="{{ asset("storage/$image") }}" class="card-img-top" alt="Imagem da publicação">
                                        @endif
                                    @endforeach
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $publication['title'] }}</h5>
                                    <p class="card-text">{{ Str::limit($publication['resume'], 30) }}</p>
                                    <p class="card-text">
                                        <small class="text-muted">{{ $publication['author'] }} | Atualizado {{ $publication['updated_at']->diffForHumans() }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-muted">Nenhum artigo encontrado.</p>
                @endif
            </div>
        </section>

        <!-- 4.2. Games Section -->
        <section class="mb-5">
            <h2 class="mb-4 text-secondary">Jogos</h2>
            <div class="row g-4">
                @forelse ($games as $game)
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            @if ($game->images)
                                <img src="{{ asset('storage/' . json_decode($game->images)[0]) }}" class="card-img-top" alt="Imagem do jogo">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $game->title }}</h5>
                                <p class="card-text">{{ Str::limit($game->resume, 100) }}</p>
                                <p class="card-text"><small>{{ $game->author }} | {{ $game->year }}</small></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Nenhum jogo encontrado.</p>
                @endforelse
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">Ver mais jogos</a>
            </div>
        </section>

        <!-- 4.3. Events Section -->
        <section class="mb-5">
            <h2 class="mb-4 text-secondary">Eventos</h2>
            <div class="row g-4">
                @forelse ($events as $event)
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            @if ($event->images)
                                <img src="{{ asset('storage/' . json_decode($event->images)[0]) }}" class="card-img-top" alt="Imagem do evento">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ Str::limit($event->resume, 100) }}</p>
                                <p class="card-text"><small>{{ $event->author }} | {{ $event->year }}</small></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">Nenhum evento encontrado.</p>
                @endforelse
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-primary">Ver mais eventos</a>
            </div>
        </section>

        <!-- 4.4. Other Publications Section -->
        <section class="py-5 bg-white rounded shadow-sm mb-5">
            <h2 class="mb-4 text-secondary text-center">Outros</h2>
            <div class="row g-4">
                @for ($i = 1; $i <= 2; $i++)
                    <div class="col-md-6">
                        <div class="card h-100">
                            <img src="https://placehold.co/507x335?text=Outros+{{ $i }}" class="card-img-top" alt="Outros {{ $i }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Título do Cartão</h5>
                                <p class="card-text">Grelo doesn't need much, no I only ask God for good health...</p>
                                <p class="card-text mt-auto">
                                    <small class="text-muted">Autor | Atualizado há 3 minutos</small>
                                </p>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-secondary btn-lg">
                    <i class="fa fa-info-circle me-2"></i>Ver mais
                </a>
            </div>
        </section>
    </main>

</x-main-layout>
