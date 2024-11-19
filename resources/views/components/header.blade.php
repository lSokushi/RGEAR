<header class="d-flex flex-column h-auto">
  <nav>
    <div class="p-4 d-flex align-items-center gap-4 gap-md-5 w-100 justify-content-around justify-content-md-around">
      <h1 class="mb-0">
        <img class="img-fluid" src="/img/logo_ifba_lauro.png" alt="Logo Vertical IFBA Lauro de Freitas"
          style="max-width: 150px; height: auto" />
      </h1>
      <a>
        <img class="img-fluid" src="/img/logo_RGEAR.png"
          alt="Logo do Grupo de Pesquisa em Engenharia, Inteligência Artificial e Robótica Aplicadas - RGEAR"
          style="max-width: 150px; height: auto" />
      </a>
    </div>

    <div class="container-fluid nav__links d-flex justify-content-center align-items-center mt-auto p-3">
      <ul class="d-flex gap-4 gap-md-5 list-unstyled mb-0 align-items-center">
        <li>
          <a href="{{route("index")}}" class="text-light custom-link">Início</a>
        </li>
        <li>
          <a href="{{route("sobrenos")}}" class="text-light custom-link">Sobre Nós</a>
        </li>
        
        <li>
          <a href="{{route("repositorio")}}" class="text-light custom-link">Repositório</a>
        </li>
        <li>
          <a href="{{route("login")}}" class="text-light custom-link">Login</a>
        </li>
      </ul>
    </div>
  </nav>

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
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget("https://vlibras.gov.br/app");
  </script>
</header>