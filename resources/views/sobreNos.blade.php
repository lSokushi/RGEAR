<x-main-layout title="RGEAR">

    <!-- 1. Importação de Estilos -->
    <link rel="stylesheet" href="{{ asset('/css/about-us.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/sobre-nos.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- 2. Seção: Quem Somos -->
    <section class="quem-somos py-5 position-relative">
        <div class="container">
            <h1 class="section-title" id="quem-somos-title">Quem Somos</h1>
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-start" id="quem-somos-text">
                    <p class="lead destaque">
                        O <strong>RGEAR</strong> (Grupo de Pesquisa em Engenharia, Inteligência Artificial e Robótica
                        Aplicadas) foi fundado em 2018 no <strong>IFBA</strong>, com o objetivo de integrar ciência,
                        tecnologia e educação.
                    </p>
                    <p class="quem-somos-text mt-3">
                        Desde sua criação, o grupo tem ampliado suas áreas de atuação, incorporando novas tecnologias e
                        promovendo impacto social por meio de projetos interdisciplinares e sustentáveis.
                    </p>
                    <a href="#timeline" class="btn btn-primary mt-4">Saiba Mais</a>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="visual-element" id="quem-somos-visual">
                        <img src="{{ asset('/images/robot-hand.svg') }}" class="img-fluid" alt="Robótica e IA">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- 3. Linha do Tempo -->
    <section class="timeline-section py-5">
        <div class="container">
            <h2 class="text-center mb-5 section-title text-primary">Linha do Tempo - Marcos Importantes</h2>
            <div class="timeline position-relative">
                <div class="timeline-line"></div>
                @foreach ($timeline as $item)
                    <div class="timeline-item d-flex align-items-center mb-5 position-relative">
                        <div class="timeline-content bg-white shadow-lg p-4 rounded-4"
                            data-aos="{{ $loop->odd ? 'fade-right' : 'fade-left' }}">
                            <h3 class="text-primary fw-bold mb-3">{{ $item['year'] }}</h3>
                            <p class="text-muted">{{ $item['description'] }}</p>
                        </div>
                        <div
                            class="timeline-marker bg-{{ $item['color'] }} text-white text-center rounded-circle shadow">
                            <strong>{{ $item['year'] }}</strong>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- 4. Equipe de Pesquisadores -->
    <section class="equipe-pesquisadores mt-5 container">
        <h2 class="section-title text-primary text-center mb-5">Equipe de Pesquisadores</h2>
        <div class="row g-4">
            @foreach ($pesquisadores as $pesquisador)
                <div class="col-md-4">
                    <x-pesquisador-card :name="$pesquisador['name']" :image="$pesquisador['image']" :bio="$pesquisador['area_of_expertise']" :direction="$pesquisador['direction']"
                        :link="$pesquisador['link']" />
                </div>
            @endforeach
        </div>
    </section>

    <!-- 5. Áreas de Atuação -->
    <section class="areas-atuacao mt-5 py-5">
        <div class="container">
            <h2 class="section-title text-primary mb-5">Áreas de Atuação</h2>
            <div class="row g-4 justify-content-center">
                @foreach ($areas as $area)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="area-card shadow-lg p-4 rounded-4 bg-white text-center position-relative overflow-hidden"
                            data-aos="fade-up">
                            <div class="area-icon mb-3 mx-auto d-flex justify-content-center align-items-center bg-primary text-white rounded-circle shadow-sm"
                                style="width: 80px; height: 80px; font-size: 2rem;">
                                <i class="fas {{ $area['icon'] }}"></i>
                            </div>
                            <h3 class="area-title text-dark fw-bold mb-2">{{ $area['title'] }}</h3>
                            <p class="area-description text-muted">{{ $area['description'] }}</p>
                            <div class="area-card-hover position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-0"
                                style="transition: opacity 0.4s;"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-- 6. Destaques e Conquistas -->
    <section class="destaques mt-5 py-5 bg-light position-relative overflow-hidden">
        <div class="container">
            <h2 class="section-title text-primary text-center mb-5">Destaques e Conquistas</h2>
            <div class="row g-4 justify-content-center">
                @foreach ($highlights as $highlight)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card destaque-card shadow-lg border-0 rounded-4 text-center p-4 bg-white position-relative overflow-hidden"
                            data-aos="fade-up">
                            <div class="d-flex justify-content-center align-items-center mx-auto mb-3 text-primary bg-light rounded-circle shadow-sm"
                                style="width: 80px; height: 80px; font-size: 2rem;">
                                <i class="bi {{ $highlight['icon'] }}"></i>
                            </div>
                            <h3 class="card-title text-dark fw-bold mb-2">{{ $highlight['value'] }}</h3>
                            <p class="card-text text-muted">{{ $highlight['text'] }}</p>
                            <div class="destaque-hover position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-0"
                                style="transition: opacity 0.4s;"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- 7. Call to Action -->
    <section class="cta-section py-5 text-center">
        <div class="container">
            <h2 class="section-title text-primary">Quer fazer parte?</h2>
            <p>Cadastre-se e receba as últimas novidades sobre os projetos do RGEAR diretamente no seu e-mail.</p>
            <a href="#" class="btn btn-primary btn-lg">Receber Atualizações</a>
        </div>
    </section>

    <!-- 8. Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="{{ mix('js/sobre-nos.js') }}"></script>
    <script>
        // Inicializar AOS
        AOS.init({
            once: true, // As animações só acontecem uma vez
            duration: 800, // Duração das animações
            easing: "ease-out", // Suavização das animações
        });

        // Esperar até o DOM estar totalmente carregado
        document.addEventListener("DOMContentLoaded", function() {
            // Inicializar GSAP e ScrollTrigger
            gsap.registerPlugin(ScrollTrigger);

            // Animação para cada marco
            gsap.utils.toArray("[data-marco]").forEach((element) => {
                const year = element.getAttribute("data-marco");

                // Animação do texto do marco
                gsap.fromTo(
                    element.querySelector("h3"), {
                        opacity: 0,
                        y: 50
                    }, {
                        opacity: 1,
                        y: 0,
                        duration: 1,
                        scrollTrigger: {
                            trigger: element,
                            start: "top 80%", // Quando o topo do elemento chega a 80% da tela
                            end: "bottom 60%",
                            toggleActions: "play none none reverse", // Play ao entrar, reverse ao sair
                        },
                    }
                );

                // Animação do círculo (ícone)
                gsap.fromTo(
                    element.querySelector("div.bg-blue-500, div.bg-green-500"), {
                        scale: 0.5,
                        opacity: 0
                    }, {
                        scale: 1,
                        opacity: 1,
                        duration: 1,
                        ease: "bounce.out",
                        scrollTrigger: {
                            trigger: element,
                            start: "top 80%",
                            end: "bottom 60%",
                            toggleActions: "play none none reverse",
                        },
                    }
                );
            });

            // Linha animada ao longo do scroll
            gsap.fromTo(
                ".w-1.bg-gray-300", {
                    height: "0%"
                }, {
                    height: "100%",
                    duration: 1.5,
                    scrollTrigger: {
                        trigger: "#linha-do-tempo",
                        start: "top 80%",
                        end: "bottom 10%",
                        scrub: true, // Anima conforme o scroll
                    },
                }
            );
        });
    </script>

</x-main-layout>
