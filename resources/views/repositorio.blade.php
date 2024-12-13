<x-main-layout title="RGEAR | Repositorios">
  <link rel="stylesheet" href="{{asset('/css/repositorio.css')}}" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
  <main>
    <div class="repo">
      <h1 class="repo"><b>Repositório</b></h1>
    </div>
  </main>
  <div>
    <div class="container-wrapper">
      <div class="container">
        <i class="fa fa-search"></i>
        <div class="input-wrapper">
          <input class="font-pesquisa" placeholder="Pesquisar..." />
        </div>
      </div>
    </div>
  </div>

  <button class="filter-btn">Filtro</button>

<!-- Search Bar Section -->
<div class="search-section">
  <div class="search-container">
    <input type="text" class="search-input" placeholder="Pesquisar...">
    <button class="search-button">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="20" height="20">
        <path d="M21 21l-5.2-5.2M16.7 10.3a6.4 6.4 0 1 1-12.8 0 6.4 6.4 0 0 1 12.8 0Z"/>
      </svg>
    </button>
  </div>
</div>

<!-- Content Area for Articles -->
<div class="content-section">
  <h2>Artigos</h2>
  <div class="article">
    <!-- Example Article -->
    <p>Adicione os artigos aqui...</p>
  </div>
</div>


  <!-- 6. Área de conteúdo de artigos -->
  <div class="mt-8">
      <h2 class="text-xl font-semibold mb-4">Artigos</h2>
      <div class="space-y-4">
          <div class="bg-gray-100 p-4 rounded-lg">
              <p>Adicione os artigos aqui...</p>
          </div>
      </div>
  </div>

  <!-- 7. Renderização de artigos -->
  <div class="articles-container mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Verifica se há publicações -->
      @if (isset($publications) && $publications->isNotEmpty())
          @foreach ($publications as $publication)
              <div class="article-box w-100">
                  <!-- Exibe imagem da publicação -->
                  @if (!empty($publication->images))
                      @foreach (json_decode($publication->images) as $key => $image)
                          @if ($key == 0)
                              <img class="image-placeholder img-fluid" src="{{ asset("storage/$image") }}" alt="Imagem da publicação">
                          @endif
                      @endforeach
                  @endif

                      <div class="title-cards-art">
                          <h2>{{ $publication['title'] }}</h2>
                      </div>
                      <div class="p-3 w-100">
                          {{-- Limita o texto do resumo a 150 caracteres --}}
                          <p class="w-100">{{ Str::limit($publication['resume'], 30) }}</p>
                          <p class="info-cards">
                              <small>{{ $publication['author'] }} | Atualizado {{ $publication['updated_at']->diffForHumans() }}</small>
                          </p>
                      </div>
                  </div>
              @endforeach
          @else
              <p class="no-data">Nenhum artigo encontrado.</p>
          @endif
      </div>
  </article>
</section>

    </article>
    <!-- 
        <figure class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</figure>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p> 
        </div>
        <div class="article-box">
          <figure class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</figure>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
        </div>
        <div class="article-box">
          <div class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</div>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
        </div>
        <div class="article-box">
          <div class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</div>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
        </div>
      </div>-->
    <!-- <nav class="link-vermais">
      <ul>
        <a href="ver mais"><u>
            <h2>Ver mais</h2>
          </u></a>
      </ul>
    </nav>
    </article>
  </section>
  <section>
    <article>
      <div class="title-jogos">
        <h1><u><b>Jogos</b></u></h1>
      </div>
      <div class="article-container2">
        <div class="article-box">
          <figure class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</figure>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
        </div>
        <div class="article-box">
          <figure class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</figure>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
        </div>
        <div class="article-box">
          <div class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</div>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
        </div>
        <div class="article-box">
          <div class="image-placeholder" src="https://placehold.co/294x276" alt="Avatar">Imagem <br> 294x276</div>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
            a little bit longer.</p>
          <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
        </div>
      </div>
      <nav class="link-vermais">
        <ul>
          <a href="ver mais"><u>
              <h2>Ver mais</h2>
            </u></a>
        </ul>
      </nav>
    </article>
  </section> -->
  <section>
    <article>
      <div class="title-eventos">
        <h1><u><b>Eventos</b></u></h1>
      </div>
      <div class="article-container2">
        <div class="article-box">
          <img class="image-placeholder img-fluid" src="https://placehold.co/294x276" alt="Avatar"></img>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <div class="w-100 p-3">
            <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
              a little bit longer.</p>
            <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
          </div>
          
        </div>
        <div class="article-box">
          <img class="image-placeholder img-fluid" src="https://placehold.co/294x276" alt="Avatar"></img>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <div class="w-100 p-3">
            <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
              a little bit longer.</p>
            <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
          </div>
          
        </div>
        <div class="article-box">
          <img class="image-placeholder img-fluid" src="https://placehold.co/294x276" alt="Avatar"></img>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <div class="w-100 p-3">
            <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
              a little bit longer.</p>
            <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
          </div>

        </div>
        <div class="article-box">
          <img class="image-placeholder img-fluid" src="https://placehold.co/294x276" alt="Avatar"></img>
          <div class="title-cards-art">
            <h2>Título Artigo</h2>
          </div>
          <div class="w-100 p-3">
            <p>This is a wider card with supporting text below as a natural lead-in to additional content. This content is
              a little bit longer.</p>
            <p class="info-cards"><small>Autor | last updated 3 mins ago</small></p>
          </div>
          
        </div>
      </div>
      <nav class="link-vermais">
        <ul>
          <a href="ver mais"><u>
              <h2>Ver mais</h2>
            </u></a>
        </ul>
      </nav>
    </article>
  </section>
 <section class="outros">
    <div class="title-outros">
      <h1><u><b>Outros</b></u></h1>
    </div>
    <div class="outer-container">
      <a href="pagina_outer1.html" class="outro">
        <img src="https://placehold.co/507x335?text=Outros+1" alt="Outros 1">
        <div class="outer-info">
          <h4><b>Título do Cartão</b></h4>
          <p>Grelo doesn't need much, no I only ask God for good health...</p>
          <p><small>Autor | last updated 3 mins ago</small></p>
        </div>
      </a>
      <a href="pagina_outer2.html" class="outro">
        <img src="https://placehold.co/507x335?text=Outros+2" alt="Outros 2">
        <div class="outer-info">
          <h4><b>Título do Cartão</b></h4>
          <p>Grelo doesn't need much, no I only ask God for good health...</p>
          <p><small>Autor | last updated 3 mins ago</small></p>
        </div>
      </a>
    </div>
    <nav class="vermais">
      <ul>
        <a href="Ver Mais"><u>
            <h2>Ver Mais</h2>
          </u></a>
      </ul>
    </nav>
  </section>
</x-main-layout>