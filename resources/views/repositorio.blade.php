<x-main-layout title="RGEAR | Repositórios">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

  <main class="container mt-4">
      <!-- 1. Título Principal -->
      <div class="text-center mb-4">
          <h1 class="fw-bold">Repositório</h1>
      </div>

      <!-- 2. Barra de Pesquisa -->
      <div class="mb-4">
          <label for="searchBar" class="form-label">Pesquise aqui:</label>
          <div class="input-group">
              <span class="input-group-text" id="search-icon">
                  <i class="fa fa-search"></i>
              </span>
              <input type="text" id="searchBar" class="form-control" placeholder="Digite sua busca aqui..." aria-label="Barra de pesquisa" aria-describedby="search-icon">
          </div>
      </div>

      <!-- 3. Botão de Filtro -->
      <div class="mb-4 text-end">
          <button class="btn btn-primary">Filtro</button>
      </div>

      <!-- 4. Seção de Artigos -->
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

      <!-- 5. Seção de Jogos -->
      <section class="mb-5">
          <h2 class="mb-4 text-secondary">Jogos</h2>
          <div class="row g-4">
              @for ($i = 0; $i < 4; $i++)
                  <div class="col-md-6 col-lg-3">
                      <div class="card">
                          <img src="https://placehold.co/294x276" class="card-img-top" alt="Imagem de jogo">
                          <div class="card-body">
                              <h5 class="card-title">Título Artigo</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                              <p class="card-text">
                                  <small class="text-muted">Autor | Atualizado há 3 minutos</small>
                              </p>
                          </div>
                      </div>
                  </div>
              @endfor
          </div>
          <div class="text-center mt-4">
              <a href="#" class="btn btn-outline-primary">Ver mais</a>
          </div>
      </section>

      <!-- 6. Seção de Eventos -->
      <section class="mb-5">
          <h2 class="mb-4 text-secondary">Eventos</h2>
          <div class="row g-4">
              @for ($i = 0; $i < 4; $i++)
                  <div class="col-md-6 col-lg-3">
                      <div class="card">
                          <img src="https://placehold.co/294x276" class="card-img-top" alt="Imagem de evento">
                          <div class="card-body">
                              <h5 class="card-title">Título Evento</h5>
                              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                              <p class="card-text">
                                  <small class="text-muted">Autor | Atualizado há 3 minutos</small>
                              </p>
                          </div>
                      </div>
                  </div>
              @endfor
          </div>
          <div class="text-center mt-4">
              <a href="#" class="btn btn-outline-primary">Ver mais</a>
          </div>
      </section>

      <!-- 7. Seção de Outros -->
      <section class="mb-5">
          <h2 class="mb-4 text-secondary">Outros</h2>
          <div class="row g-4">
              @for ($i = 1; $i <= 2; $i++)
                  <div class="col-md-6">
                      <div class="card">
                          <img src="https://placehold.co/507x335?text=Outros+{{ $i }}" class="card-img-top" alt="Outros {{ $i }}">
                          <div class="card-body">
                              <h5 class="card-title">Título do Cartão</h5>
                              <p class="card-text">Grelo doesn't need much, no I only ask God for good health...</p>
                              <p class="card-text">
                                  <small class="text-muted">Autor | Atualizado há 3 minutos</small>
                              </p>
                          </div>
                      </div>
                  </div>
              @endfor
          </div>
          <div class="text-center mt-4">
              <a href="#" class="btn btn-outline-primary">Ver mais</a>
          </div>
      </section>
  </main>
</x-main-layout>
