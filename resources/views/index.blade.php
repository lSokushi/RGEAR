<x-main-layout title="RGEAR">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.12/splide.min.css">

    <main>
        <!-- 1. Headline Section -->
        <section class="headline-section">
            <div class="container">
                <img src="{{ asset('img/inicio.png') }}" alt="Imagem representativa do RGEAR" class="headline-image">
                <h1>Bem-vindo ao RGEAR</h1>
                <h2>Desde 2018, o RGEAR atua como um espaço de inovação e aprendizado...</h2>
            </div>
        </section>
    

        <!-- 2. About Section -->
        <section class="about-section">
            <div class="container about-container">
                <article class="about-content">
                    <p class="about-text">
                        O RGEAR foi criado em 2018 através do Projeto Robótica Educacional IFBA Lauro de Freitas na
                        Chamada Interna nº 14/2018/PROEX/IFBA APOIO À DIFUSÃO DE ROBÓTICA NO IFBA. Como resultados
                        alcançados deste edital, podemos destacar:
                    </p>
                    <ul class="about-list">
                        <li>Projeto de extensão na comunidade do Município de Lauro de Freitas</li>
                        <li>Oficinas de robótica educacional e sustentável</li>
                        <li>Oficina de introdução ao Arduino</li>
                    </ul>
                    <p class="about-text">
                        Em 2019 e 2020, o grupo participou com atividades na SNCT, tendo destaque na aprovação na
                        Chamada CNPq/MCTIC Nº 03/2020 - SEMANA - NACIONAL DE CIÊNCIA E TECNOLOGIA (SNCT). As ideias
                        culminaram em atividades e oficinas de robótica, Arduino, ThinkerCad, e no minicurso virtual de
                        mineração de sentimento em textos do Twitter. Além disso, foi realizado um ciclo de palestras em
                        parceria com profissionais das áreas de Inteligência Artificial, Ética e Robótica.
                    </p>
                </article>
            </div>
        </section>

        <!-- 3. Features Section -->
        <section class="features" id="features">
            <div class="container">
                <h2>Principais Áreas de Pesquisa</h2>
                <div class="feature-items">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h3>Automação e Robótica Educacional</h3>
                        <p>
                            Exploração de tecnologias e soluções inovadoras para o ensino, com foco em robótica
                            aplicada, automação de processos e aprendizado prático.
                        </p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Computação, Educação e Sustentabilidade</h3>
                        <p>
                            Desenvolvimento de projetos que alinham educação tecnológica, preservação ambiental e
                            práticas sustentáveis para um futuro mais consciente.
                        </p>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <h3>Engenharia e Inteligência Artificial Aplicada</h3>
                        <p>
                            Pesquisa e aplicação de IA para resolver desafios reais em engenharia, incluindo
                            otimização de processos e análise preditiva.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Featured Articles Section -->
        <section class="articles">
            <h1 class="main-artigos main-artigos__text">Artigos em Destaque</h1>
            <div class="cards-area">
                @forelse ($publications as $key => $publication)
                    <x-index-card 
                        class="card-principal" 
                        :index="$key + 1" 
                        :title="$publication['title']" 
                        :resume="$publication['resume']"
                        :author="$publication['author']" 
                        :year="$publication['year']" 
                        :image="optional(json_decode($publication['images']))[0] ?? asset('images/default-article.jpg')"
                    ></x-index-card>
                @empty
                    <p class="no-data">Nenhum artigo disponível no momento.</p>
                @endforelse
            </div>
            @if($publications->isNotEmpty())
            <a class="ver-mais" href="{{ route('repositorio') }}">
                <h4 class="main-artigos main-artigos__text">Ver mais</h4>
            </a>
            
            
            @endif
        </section>

      <!-- 5. Featured Events Section -->
      <section class="events">
        <h1 class="main-artigos main-artigos__text">Eventos em Destaque</h1>
    
        @if($events->isNotEmpty())
            <div class="splide" aria-label="Eventos em Destaque">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($events as $event)
                            <li class="splide__slide">
                                <div class="card-carrosel">
                                    <div class="container texto-cards">
                                        {{-- Exibe a imagem do evento ou uma imagem padrão --}}
                                        <img class="event-image img-fluid" 
                                             src="{{ $event->image ? asset('storage/' . $event->image) : asset('img/events-default.webp') }}" 
                                             alt="{{ $event->title }}">
                                        <h4 class="titulo-artigo">
                                            <a href="{{ route('events.details', $event->id) }}">{{ $event->title }}</a>
                                        </h4>
                                        <p>{{ Str::limit($event->description, 100, '...') }}</p>
                                        <p>
                                            <small>{{ $event->location }} | 
                                            {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</small>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @else
            <p class="no-data">Nenhum evento disponível no momento.</p>
        @endif
    </section>
    
<!-- 6. Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.12/splide.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        new Splide('.splide', {
            type: 'loop',
            perPage: 3,
            perMove: 1,
            gap: '1rem',
            autoplay: true,
            focus: 'center',
            drag: true,
            pagination: false,
            breakpoints: {
                1200: { perPage: 3 },
                1024: { perPage: 2 },
                768: { perPage: 1 },
                480: { perPage: 1 },
            },
        }).mount();
    });
</script>

<script src="{{ asset('js/index.js') }}?v={{ time() }}" defer></script>
</x-main-layout>

