<x-main-layout title="RGEAR">
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.12/splide.min.css">

    <main>
        <!-- 1. Headline Section -->
        <section class="headline-section">
            <div class="container">
                <h1>Bem-vindo ao RGEAR</h1>
                <h2>Desde 2018, o RGEAR atua como um espaço de inovação e aprendizado...</h2>
            </div>
        </section>

        <!-- 2. Carousel Section -->
        <section class="carousel-section" id="carousel">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1: R - Research -->
                    <div class="carousel-item active">
                        <img src="https://via.placeholder.com/800x400?text=Pesquisa" class="d-block w-100" alt="Pesquisa">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Pesquisa e Inovação Tecnológica</h5>
                            <p class="caption-text">
                                Exploramos fronteiras em inteligência artificial, robótica e sustentabilidade.
                                Desde 2018, promovemos pesquisa científica com impacto social e educacional.
                            </p>
                            <a href="/pesquisa" class="btn btn-primary caption-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <!-- Slide 2: G - Group -->
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Grupo" class="d-block w-100" alt="Grupo">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Um Time Multidisciplinar</h5>
                            <p class="caption-text">
                                Somos pesquisadores e estudantes comprometidos em criar soluções inovadoras.
                                Nossa equipe une áreas de engenharia, computação e educação.
                            </p>
                            <a href="/equipe" class="btn btn-primary caption-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <!-- Slide 3: E - Engineering -->
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Engenharia" class="d-block w-100" alt="Engenharia">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Engenharia Aplicada à Inovação</h5>
                            <p class="caption-text">
                                Usamos tecnologias como Internet das Coisas e Inteligência Artificial
                                para desenvolver soluções práticas e transformadoras.
                            </p>
                            <a href="/engenharia" class="btn btn-primary caption-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <!-- Slide 4: A - Artificial Intelligence -->
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Intelig%C3%AAncia+Artificial" class="d-block w-100" alt="Inteligência Artificial">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Transformando Ideias com IA</h5>
                            <p class="caption-text">
                                Pesquisamos e aplicamos inteligência artificial para resolver desafios reais,
                                conectando tecnologia à inovação científica.
                            </p>
                            <a href="/ia" class="btn btn-primary caption-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <!-- Slide 5: R - Robotics -->
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=Rob%C3%B3tica" class="d-block w-100" alt="Robótica">
                        <div class="carousel-caption">
                            <h5 class="caption-title">Robótica no Ensino e na Prática</h5>
                            <p class="caption-text">
                                Integramos robótica educacional em escolas e projetos, capacitando alunos
                                e promovendo impacto social.
                            </p>
                            <a href="/robotica" class="btn btn-primary caption-btn">Saiba Mais</a>
                        </div>
                    </div>
                    <!-- Slide 6: RGEAR -->
                    <div class="carousel-item">
                        <img src="https://via.placeholder.com/800x400?text=RGEAR" class="d-block w-100" alt="RGEAR">
                        <div class="carousel-caption">
                            <h5 class="caption-title">RGEAR - Inovação que Transforma</h5>
                            <p class="caption-text">
                                Engenharia, Inteligência Artificial e Robótica Aplicadas
                                para um mundo mais sustentável e inclusivo.
                            </p>
                            <a href="/sobre" class="btn btn-primary caption-btn">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <!-- Controles de Navegação -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Próximo</span>
                </button>
            </div>
        </section>

        <!-- 3. About Section -->
        <section class="about-section">
            <div class="container about-container">
                <article class="about-content">
                    <p class="about-text">
                        O RGEAR foi criado em 2018 através do Projeto Robótica Educacional IFBA Lauro de Freitas na
                        Chamada Interna nº 14/2018/PROEX/IFBA. Como resultados alcançados deste edital, podemos destacar:
                    </p>
                    <ul class="about-list">
                        <li>Projeto de extensão na comunidade do Município de Lauro de Freitas</li>
                        <li>Oficinas de robótica educacional e sustentável</li>
                        <li>Oficina de introdução ao Arduino</li>
                    </ul>
                    <p class="about-text">
                        Em 2019 e 2020, o grupo participou com atividades na SNCT, tendo destaque na aprovação na
                        Chamada CNPq/MCTIC Nº 03/2020. As ideias culminaram em oficinas de robótica, Arduino e ThinkerCad.
                    </p>
                </article>
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
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.12/splide.min.js"></script>
    <script src="{{ asset('js/index.js') }}?v={{ time() }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const splideElement = document.querySelector('.splide');
            if (splideElement) {
                new Splide(splideElement, {
                    type: 'loop',
                    perPage: 3,
                    gap: '1rem',
                    autoplay: true,
                    pauseOnHover: true,
                }).mount();
            }
        });
    </script>   
</x-main-layout>
