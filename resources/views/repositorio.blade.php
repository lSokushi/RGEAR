<!-- 1. Layout Header with Title and CSS Link -->
<x-main-layout title="RGEAR | Repositorios">
  <link rel="stylesheet" href="{{asset('/css/repositorio.css')}}" />

  <!-- 2. Main Title Section -->
  <main>
    <div class="repo">
      <h1 class="repo"><b>Repositório</b></h1>
    </div>
  </main>

  <!-- 3. Search Container -->
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

  <!-- 4. Filter Button -->
  <button class="filter-btn">Filtro</button>

  <!-- 5. Article Section: Artigos -->
  <section>
    <article>
      <div class="title-artigos">
        <h1><u><b>Artigos</b></u></h1>
      </div>
      <div class="article-container">
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
  </section>

  <!-- 6. Article Section: Jogos -->
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
  </section>

  <!-- 7. Article Section: Modelagens -->
   @foreach ($publicacoes as $publicacao)
    <x-artigo-card :title="$publicacao['title']" :image="$publicacao['image']" :summary="$publicacao['description']" :caption="$publicacao['image_caption']" :author="$publicacao['author']" :updatedAt="$publicacao['updated_at']->diffForHumans()"></x-artigo-card>
   @endforeach
  

  <!-- 8. Article Section: Eventos -->
  <section>
    <article>
      <div class="title-eventos">
        <h1><u><b>Eventos</b></u></h1>
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
  </section>

  <!-- 9. Article Section: Outros -->
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