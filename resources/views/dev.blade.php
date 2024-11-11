<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- 1. Meta and Title -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Saiba sobre os principais integrantes do RGEAR" />
    <title>Desenvolvedores</title>

    <!-- 2. Stylesheets and Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/about-us.css" />
    <link rel="stylesheet" href="dev.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"
        as="style" onload="this.rel='stylesheet'">
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </noscript>
</head>

<body>

    <!-- 3. Header -->
    <x-header></x-header>

    <!-- 4. Accessibility Plugin VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active">
            <img class="access-button" src="https://vlibras.gov.br/app//assets/access_icon.svg"
                alt="Ícone de acessibilidade VLibras">
            <img class="pop-up" src="https://vlibras.gov.br/app//assets/access_popup.jpg" alt="Popup VLibras">
        </div>
        <div vw-plugin-wrapper></div>
    </div>

    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>

    <!-- 5. Banner Main Section - Developers Introduction -->
    <section class="banner hero-section d-flex align-items-center">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-4 banner-title">Conheça os Desenvolvedores</h1>
                    <h3 class="banner-subtitle">Criatividade e Inovação em Cada Linha de Código</h3>
                    <p class="banner-description">
                        Somos programadores Full Stack, comprometidos com cada etapa da criação digital.
                        Nossa expertise abrange front-end, back-end, arquitetura de sistemas e design responsivo,
                        aplicando criatividade e conhecimento para construir uma base sólida que sustente expansões e
                        inovações futuras.
                    </p>
                    <p class="banner-highlight"> Trabalhando juntos para transformar uma ideia em realidade digital!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Developer Cards -->
    <div class="row card-container justify-content-center">

        <!-- 6.1 Developer Card - Ana Vidal -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">

                    <img class="img-fluid" src="{{asset('/img/Ana02.svg')}}"
                        alt="Ana Luiza Vidal" loading="lazy">

                </div>
                <div class="card-body">
                    <h4 class="card-title">Ana Vidal</h4>
                    <p class="text-muted role">Programadora Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">HTML</span>
                        <span class="badge bg-secondary">CSS</span>
                        <span class="badge bg-success">JavaScript</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="https://github.com/analuisadev" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="https://linkedin.com" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:analuisadev@example.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.2 Developer Card - Claudio Silva Almeida -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                     <img class="img-fluid" src="{{asset('/img/Claudio01.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Claudio Almeida</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-info">Python</span>
                        <span class="badge bg-dark">Node.js</span>
                        <span class="badge bg-success">SQL</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:claudioalmeida@example.com" aria-label="Email"><i
                                class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.3 Developer Card - Cleber Figueiredo Nascimento -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/cleber01.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Cleber Figueiredo</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">JavaScript</span>
                        <span class="badge bg-info">React</span>
                        <span class="badge bg-success">Node.js</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.4 Developer Card - Edson Souza Cunha Junior -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Edson01.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Edson Cunha</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">Java</span>
                        <span class="badge bg-warning text-dark">Spring</span>
                        <span class="badge bg-success">MySQL</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="https://github.com/EdsonJuniorP13" aria-label="GitHub"><i
                                class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:digitandohouse@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.5 Developer Card - Filipe da Cruz Santos -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Filipe01.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Filipe Santos</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">HTML</span>
                        <span class="badge bg-secondary">CSS</span>
                        <span class="badge bg-success">JavaScript</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.6 Developer Card - Guilherme Abdon Calheira de Andrade -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Guilherme-Abdon.png')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Guilherme Abdon</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">Unity</span>
                        <span class="badge bg-dark">C#</span>
                        <span class="badge bg-warning text-dark">Game Design</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.7 Developer Card - Guilherme Santiago de Lima -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Guilherme-Santiago.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Guilherme Santiago</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">Python</span>
                        <span class="badge bg-secondary">Django</span>
                        <span class="badge bg-info">PostgreSQL</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="https://github.com/GuilhermeSantiagoLima" aria-label="GitHub"><i
                                class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.8 Developer Card - Gustavo Franco Souza -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Gustavo02.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Gustavo Franco</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                   
                    <div class="skills">
                        <span class="badge bg-primary">JavaScript</span>
                        <span class="badge bg-info">Vue.js</span>
                        <span class="badge bg-success">MongoDB</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="#" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.9 Developer Card - Karen Lima -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Ana02.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Karen Lima</h4>
                    <p class="text-muted role">Programadora Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">Figma</span>
                        <span class="badge bg-secondary">Adobe XD</span>
                        <span class="badge bg-success">Sketch</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="https://github.com/KarenFliman" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:karenflimann.out@gmail.com" aria-label="Email"><i
                                class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6.10 Developer Card - Luiza de Assis Fernandes -->
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Luiza01.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Luiza de Assis</h4>
                    <p class="text-muted role">Programadora Full Stack</p>

                    <div class="skills">
                        <span class="badge bg-primary">PHP</span>
                        <span class="badge bg-secondary">CSS</span>
                        <span class="badge bg-danger">Sass</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="https://github.com/LuizaAssiS57" aria-label="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="#" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 8. Footer -->
    <x-footer></x-footer>
    <!-- 9. Scripts -->
    <script src="dev.js"></script>
    <script async src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>new window.VLibras.Widget('https://vlibras.gov.br/app');</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>