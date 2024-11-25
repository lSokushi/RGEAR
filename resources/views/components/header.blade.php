<!-- 1. Header Layout with Logos -->
<header class="d-flex flex-column h-auto">
    <div class="p-4 d-flex align-items-center gap-4 gap-md-5 w-100 justify-content-around">
        <h1 class="mb-0">
            <img class="img-fluid" src="/img/logo-ifba-horizontal.png" alt="Logo Horizontal IFBA Lauro de Freitas"
                style="max-width: 250px; height: auto" />
        </h1>
        <a>
            <img class="img-fluid" src="/img/RGEAR.png"
                alt="Logo do Grupo de Pesquisa em Engenharia, Inteligência Artificial e Robótica Aplicadas - RGEAR"
                style="max-width: 250px; height: auto" />
        </a>
    </div>

    <!-- 2. Navigation Links -->
    <nav>
        <div class="container-fluid nav__links d-flex justify-content-center align-items-center mt-auto p-3">
            <ul class="d-flex flex-wrap gap-2 gap-md-5 list-unstyled mb-0 align-items-center text-light">
                <li class="{{ request()->routeIs('index') ? 'active' : '' }}">
                    <a href="{{ route('index') }}" class="custom-link" aria-label="Ir para a página inicial">
                        Início
                    </a>
                </li>
                <li class="{{ request()->routeIs('sobrenos') ? 'active' : '' }}">
                    <a href="{{ route('sobrenos') }}" class="custom-link" aria-label="Ir para a página Sobre Nós">
                        Sobre Nós
                    </a>
                </li>
                <li class="{{ request()->routeIs('repositorio') ? 'active' : '' }}">
                    <a href="{{ route('repositorio') }}" class="custom-link" aria-label="Ir para o repositório">
                        Repositório
                    </a>
                </li>
                <li class="{{ request()->routeIs('login') ? 'active' : '' }}">
                    <a href="{{ route('login') }}" class="custom-link" aria-label="Ir para a página de Login">
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<!-- 3. Accessibility Widget -->
<div vw="" class="enabled" style="
                  left: initial;
                  right: 0px;
                  top: 50%;
                  bottom: initial;
                  transform: translateY(calc(-50% - 10px));
              ">
    <div vw-access-button="" class="active">
        <img class="access-button" data-src="assets/access_icon.svg"
            alt="Conteúdo acessível em Libras usando o VLibras Widget com opções dos Avatares Ícaro, Hosana ou Guga."
            src="https://vlibras.gov.br/app//assets/access_icon.svg" />
        <img class="pop-up" data-src="assets/access_popup.jpg"
            alt="Conteúdo acessível em Libras usando o VLibras Widget com opções dos Avatares Ícaro, Hosana ou Guga."
            src="https://vlibras.gov.br/app//assets/access_popup.jpg" />
    </div>
    <div vw-plugin-wrapper="">
        <div vp="">
            <div vp-box=""></div>
            <div vp-message-box=""></div>
            <div vp-settings=""></div>
            <div vp-dictionary=""></div>
            <div vp-settings-btn=""></div>
            <div vp-info-screen=""></div>
            <div vp-suggestion-screen=""></div>
            <div vp-translator-screen=""></div>
            <div vp-main-guide-screen=""></div>
            <div vp-suggestion-button=""></div>
            <div vp-rate-box=""></div>
            <div vp-change-avatar=""></div>
            <div vp-additional-options=""></div>
            <div vp-controls=""></div>
            <span vp-click-blocker=""></span>
        </div>
    </div>
</div>

<!-- 4. VLibras Widget Script -->
<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
    new window.VLibras.Widget("https://vlibras.gov.br/app");
</script>
</header>