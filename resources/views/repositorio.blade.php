<!-- 1. Main Layout -->
<x-main-layout title="RGEAR | Repositórios">

    <!-- 2. Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

    <!-- 3. Main Content -->
    <main class="container mt-4">

        <!-- 3.1. Header -->
        {{-- <div class="text-center mb-4"> --}}
            <br>
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
                <input type="text" id="searchBar" class="form-control form-control-lg" placeholder="Digite sua busca aqui..."
                    aria-label="Barra de pesquisa" aria-describedby="search-icon">
                <button class="btn btn-outline-secondary btn-lg" id="clearSearch">Limpar</button>
            </div>
        </div>

        <!-- 3.3. Advanced Filter -->
        <div class="d-flex justify-content-between align-items-center mb-4" id="filterContainer" style="display: none;">
            <div class="dropdown" id="filterDropdownContainer">
                <button class="btn btn-secondary dropdown-toggle btn-lg" type="button" id="filterDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false" aria-controls="filterDropdown">
                    Filtros
                </button>
                <ul class="dropdown-menu " aria-labelledby="filterDropdown">
                    <li><a class="dropdown-item" href="#">Por Data</a></li>
                    <li><a class="dropdown-item" href="#">Por Relevância</a></li>
                    <li><a class="dropdown-item" href="#">Por Nome</a></li>
                </ul>
            </div>
            <button class="btn btn-primary btn-lg" id="applyFilters">Aplicar Filtros</button>
        </div>

        <!-- 3.4. Pagination -->
        {{-- <nav aria-label="Navegação de página">
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
        </nav> --}}




        <!-- 4.1. Articles Section -->
        <section class="articles py-5" id="artigos">
            <h2 class="main-artigos main-artigos__text text-black">Artigos em Destaque</h2>
            <div class="cards-area">
                @forelse ($publications as $key => $publication)
                    <x-index-card class="card-principal" :index="$key + 1" :title="$publication['title']" :resume="$publication['resume']"
                        :author="$publication['author']" :year="$publication['year']" :image="optional(json_decode($publication['images']))[0] ??
                            asset('images/default-article.jpg')">
                    </x-index-card>
                @empty
                    <p class="no-data">Nenhum artigo disponível no momento.</p>
                @endforelse
            </div>
            @if ($publications->isNotEmpty())
                <div class="d-flex justify-content-center mt-4">
                    <a class="ver-mais text-secondary text-decoration-underline fw-bold"
                        href="{{ route('repositorio') }}" target="_blank">
                        <br>
                        <h2>Ver mais</h2>
                    </a>
                </div>
            @endif
        </section>


<!-- 4.2. Games Section -->
<section class="games py-5" id="jogos">
    <h2 class="main-artigos main-artigos__text text-black">Jogos</h2>
    <div class="cards-area">
        @forelse ($games as $key => $game)
            <x-index-card 
                class="card-principal" 
                :index="$key + 1" 
                :title="$game->title" 
                :resume="$game->resume"
                :author="$game->author" 
                :year="$game->year" 
                :image="optional(json_decode($game->images))[0] ?? asset('images/default-game.jpg')">
            </x-index-card>
        @empty
            <p class="no-data">Nenhum jogo disponível no momento.</p>
        @endforelse
    </div>
</section>



        <!-- 4.3. Events Section -->
        <section class="events py-5" id="eventos">
            <h2 class="main-artigos main-artigos__text text-black">Eventos</h2>
            <div class="cards-area">
                @forelse ($events as $key => $event)
                    <x-index-card class="card-principal" :index="$key + 1" :title="$event['title']" :resume="$event['resume']"
                        :author="$event['author']" :year="$event['year']" :image="optional(json_decode($event['images']))[0] ?? asset('images/default-event.jpg')">
                    </x-index-card>
                @empty
                    <div class="no-data text-center">
                        <img src="{{ asset('images/default-empty.jpg') }}" alt="Sem eventos disponíveis"
                            class="img-fluid mb-4">
                        <p class="text-muted">Nenhum evento disponível no momento.</p>
                    </div>
                @endforelse
            </div>
            @if ($events->isNotEmpty())
                <div class="d-flex justify-content-center mt-4">
                    <a class="ver-mais text-secondary text-decoration-underline fw-bold"
                        href="{{ route('repositorio') }}#eventos">
                        <h2>Ver mais</h2>
                    </a>
                </div>
            @endif
        </section>


        <!-- 4.4. Other Publications Section -->
        <section class="others py-5" id="outros">
            <h2 class="main-artigos main-artigos__text text-black">Outros</h2>
            <div class="cards-area">
                @forelse ($others as $key => $other)
                    <x-index-card class="card-principal" :index="$key + 1" :title="$other['title']" :resume="$other['resume']"
                        :author="$other['author']" :year="$other['year']" :image="optional(json_decode($other['images']))[0] ?? asset('images/default-other.jpg')">
                    </x-index-card>
                @empty
                    <div class="no-data text-center">
                        <img src="{{ asset('images/default-empty.jpg') }}" alt="Sem publicações disponíveis"
                            class="img-fluid mb-4">
                        <p class="text-muted">Nenhuma publicação disponível no momento.</p>
                    </div>
                @endforelse
            </div>
            @if ($others->isNotEmpty())
                <div class="d-flex justify-content-center mt-4">
                    <a class="ver-mais text-secondary text-decoration-underline fw-bold"
                        href="{{ route('repositorio') }}#outros">
                        <h2>Ver mais</h2>
                    </a>
                </div>
            @endif
        </section>

    </main>

</x-main-layout>
