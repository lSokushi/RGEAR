<x-main-layout title="RGEAR">

    <!-- 1. Estilos CSS -->
    <link rel="stylesheet" href="{{ asset('/css/index.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.12/splide.min.css">

    <main>

<section class="hero">
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" aria-label="Carrossel Principal">
        <div class="carousel-inner">
            @if ($slides->isEmpty())
                <p>Nenhum slide disponível no momento.</p>
            @else
            @foreach ($slides as $index => $slide)
            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}"
                 style="background-image: url('{{ asset($slide->image) }}');">
              <div class="overlay">
          
                            <h1 class="display-4 text-white">{{ $slide->title }}</h1>
                            <p class="lead text-light">{{ $slide->text }}</p>
                            <a href="{{ $slide->link }}" class="btn btn-primary">{{ $slide->btn_text }}</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel"
            data-bs-slide="prev" aria-label="Slide anterior">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel"
            data-bs-slide="next" aria-label="Próximo slide">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</section>


        <!-- 3. Seção Sobre o RGEAR -->
        <section class="about-section py-5 bg-light">
            <div class="container about-container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h2 class="text-primary fw-bold mb-4">Sobre o RGEAR</h2>
                        <p class="about-text text-secondary">
                            Fundado em 2018, o RGEAR – Grupo de Pesquisa em Engenharia, Inteligência Artificial e Robótica Aplicadas – nasceu no âmbito do Projeto Robótica Educacional IFBA Lauro de Freitas.
                        </p>
                        <div class="row gy-4">
                            <div class="col-md-4 text-center">
                                <div class="result-card p-3 shadow-sm rounded">
                                    <i class="bi bi-people-fill text-primary fs-2 mb-3"></i>
                                    <p class="text-secondary">Projetos de extensão para comunidades locais, promovendo inclusão e aprendizado tecnológico.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="result-card p-3 shadow-sm rounded">
                                    <i class="bi bi-gear-fill text-success fs-2 mb-3"></i>
                                    <p class="text-secondary">Oficinas de robótica educacional e sustentável, capacitando estudantes e profissionais.</p>
                                </div>
                            </div>
                            <div class="col-md-4 text-center">
                                <div class="result-card p-3 shadow-sm rounded">
                                    <i class="bi bi-laptop text-info fs-2 mb-3"></i>
                                    <p class="text-secondary">Introdução prática ao Arduino e ao ThinkerCad, ampliando o acesso ao conhecimento tecnológico.</p>
                                </div>
                            </div>
                        </div>
                        <p class="about-text text-secondary mt-4">
                            Em 2019 e 2020, nossas atividades na Semana Nacional de Ciência e Tecnologia (SNCT) foram destaque, reforçando nosso compromisso com a disseminação de ciência e inovação.
                        </p>
                    </div>
                    <div class="col-lg-5 text-center">
                        <img src="{{ asset('/img/background/logo-rgear-index.png') }}" alt="Logo do RGEAR"
                            class="img-fluid mb-4 w-100" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Seção de Estatísticas -->
        <section class="statistics py-5" id="estatisticas" data-aos="fade-up">
            <div class="container text-center">
                <h2 class="text-primary fw-bold mb-4">Indicadores e Estatísticas</h2>
                <div class="row">
                    @php
                        $statistics = [
                            ['label' => 'Pesquisadores Ativos', 'value' => 7],
                            ['label' => 'Estudantes Participantes', 'value' => 4],
                            ['label' => 'Projetos Desenvolvidos', 'value' => 10],
                        ];
                    @endphp
                    @foreach ($statistics as $stat)
                        <div class="col-md-4">
                            <div class="stat-card">
                                <h3 class="text-primary display-4 fw-bold">{{ $stat['value'] }}</h3>
                                <p class="text-secondary">{{ $stat['label'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- 5. Seção de Artigos em Destaque -->
        <section class="articles py-5" id="artigos">
            <h1 class="main-artigos main-artigos__text text-primary">Artigos em Destaque</h1>
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

        <!-- 6. Destaques Recentes -->
        <section class="highlights py-5 bg-light">
            <div class="container">
                <h2 class="text-primary text-center fw-bold mb-4">Destaques Recentes</h2>
                <div class="row gx-4 gy-4">
                    @php
                        $highlights = [
                            [
                                'image' => '/img/cards/destaque1.jpg',
                                'title' => 'Oficina de Arduino',
                                'description' => 'Aprenda os fundamentos de Arduino em uma oficina prática para iniciantes.',
                                'link' => '#',
                            ],
                            [
                                'image' => '/img/cards/destaque2.jpg',
                                'title' => 'Participação na SNCT',
                                'description' => 'Nossas atividades na Semana Nacional de Ciência e Tecnologia.',
                                'link' => '#',
                            ],
                            [
                                'image' => '/img/cards/destaque3.jpg',
                                'title' => 'Robótica Educacional',
                                'description' => 'Exploramos robótica sustentável para capacitar estudantes e profissionais.',
                                'link' => '#',
                            ],
                        ];
                    @endphp
                    @foreach ($highlights as $highlight)
                        <div class="col-md-4">
                            <div class="card shadow-sm h-100 border-0">
                                <img src="{{ $highlight['image'] }}" class="card-img-top rounded-top"
                                    alt="{{ $highlight['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title text-primary fw-bold">{{ $highlight['title'] }}</h5>
                                    <p class="card-text text-muted">{{ $highlight['description'] }}</p>
                                    <a href="{{ $highlight['link'] }}" class="btn btn-primary">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- 7. Seção de Eventos em Destaque -->
        <section class="events">
            <h1 class="main-artigos main-artigos__text">Eventos em Destaque</h1>
            @if ($events->isNotEmpty())
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
                                            <p><small>{{ $event->location }} |
                                                    {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</small></p>
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

    <!-- 8. Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Splide/3.6.12/splide.min.js" crossorigin="anonymous" defer></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
