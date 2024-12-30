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

        <!-- Barra de Busca com Filtro -->

        <!-- Barra de Busca com Filtro -->
        <div class="mb-4">
            <label for="searchBar" class="form-label fs-5 fw-semibold">Pesquise aqui:</label>
            <div class="input-group shadow-sm">
                <span class="input-group-text bg-primary text-white" id="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
                <input type="text" id="searchBar" class="form-control form-control-lg"
                    placeholder="Busque publicações, linhas de pesquisa ou temas..." aria-label="Barra de pesquisa"
                    aria-describedby="search-icon">
                <button class="btn btn-outline-danger btn-lg d-flex align-items-center gap-1" id="clearSearch">
                    <i class="fa-solid fa-xmark"></i> Limpar
                </button>
            </div>
        </div>

        <!-- Filtros Avançados -->
        <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3" id="filterContainer">
            <div class="dropdown">
                <button
                    class="btn btn-outline-secondary dropdown-toggle btn-lg shadow-sm d-flex align-items-center gap-2"
                    type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-sliders"></i> Filtros
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="filterDropdown">
                    <li><a class="dropdown-item" href="#" data-filter="data">Por Data</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="relevancia">Por Relevância</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="nome">Por Nome</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="linha_automacao">Automação e Robótica
                            Educacional</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="linha_sustentabilidade">Computação,
                            Educação e Sustentabilidade</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="linha_ia">Engenharia e Inteligência
                            Artificial Aplicada</a></li>
                </ul>
            </div>
            <button class="btn btn-primary btn-lg shadow-sm d-flex align-items-center gap-2" id="applyFilters">
                <i class="fa-solid fa-check"></i> Aplicar Filtros
            </button>
        </div>





        <!-- Resultados -->
        <div class="card p-4 mt-4 shadow-sm">
            <h6>Resultado 1-10 de 69308</h6>
            <table class="table table-striped table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th>Data do documento</th>
                        <th>Título</th>
                        <th>Autor(es)</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody id="resultsTableBody">
                    <tr>
                        <td>12-Dec-2012</td>
                        <td>Nos caminhos do sagrado...</td>
                        <td>Soraya Aparecida Alvares Coppola</td>
                        <td>Tese de Doutorado</td>
                    </tr>
                    <tr>
                        <td>19-Nov-2015</td>
                        <td>Um lugar: muitas histórias...</td>
                        <td>Shirley Patricia Nogueira...</td>
                        <td>Tese de Doutorado</td>
                    </tr>
                    <!-- Mais resultados serão adicionados dinamicamente -->
                </tbody>
            </table>
        </div>

        <!-- Paginação -->
        <nav class="mt-4">
            <ul class="pagination justify-content-center" id="paginationContainer">
                <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
            </ul>
        </nav>
        </div>








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


        <!-- 4.2. Jogos Section -->
        <section class="games py-5" id="jogos">
            <h2 class="main-artigos main-artigos__text text-black">Jogos</h2>
            <div class="cards-area">
                @forelse ($games as $key => $game)
                    <x-index-card class="card-principal" :index="$key + 1" :title="$game->title" :resume="$game->resume"
                        :author="$game->author ?? 'Autor desconhecido'" :year="$game->year" :image="optional(json_decode($game->images))[0] ?? asset('images/default-game.jpg')">
                    </x-index-card>
                @empty
                    <div class="no-data text-center">
                        <img src="{{ asset('images/default-empty.jpg') }}" alt="Sem jogos disponíveis"
                            class="img-fluid mb-4">
                        <p class="text-muted">Nenhum jogo disponível no momento.</p>
                    </div>
                @endforelse
            </div>
            @if ($games->isNotEmpty())
                <div class="d-flex justify-content-center mt-4">
                    <a class="ver-mais text-secondary text-decoration-underline fw-bold"
                        href="{{ route('repositorio') }}#jogos">
                        <h2>Ver mais</h2>
                    </a>
                </div>
            @endif
        </section>

        <!-- 4.3. Eventos Section -->
        <section class="events py-5" id="eventos">
            <h2 class="main-artigos main-artigos__text text-black">Eventos</h2>
            <div class="cards-area">
                @forelse ($events as $key => $event)
                    <x-index-card class="card-principal" :index="$key + 1" :title="$event->title" :resume="$event->resume"
                        :author="$event->author ?? 'Autor desconhecido'" :year="$event->year" :image="optional(json_decode($event->images))[0] ?? asset('images/default-event.jpg')">
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

        <!-- 4.4. Outros Section -->
        <section class="others py-5" id="outros">
            <h2 class="main-artigos main-artigos__text text-black">Outros</h2>
            <div class="cards-area">
                @forelse ($others as $key => $other)
                    <x-index-card class="card-principal" :index="$key + 1" :title="$other->title" :resume="$other->resume"
                        :author="$other->author ?? 'Autor desconhecido'" :year="$other->year" :image="optional(json_decode($other->images))[0] ?? asset('images/default-other.jpg')">
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

        <!-- Fechamento do container principal -->
        <script src="{{ asset('js/repositorio.js') }}"></script>
    </main>
    </body>
</x-main-layout>
