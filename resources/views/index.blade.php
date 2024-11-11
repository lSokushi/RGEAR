<x-main-layout title="RGEAR">
    <main>
        <h1 class="main-artigos main-artigos__text">Artigos em Destaque</h1>
        <div class="cards-area">
            <div class="card-1">
                <img class="main-cartao__body-image" src="https://placehold.co/507x335" alt="Avatar"
                    style="width: 100%" />
                <div class="container texto-card">
                    <h4><b>Título do Cartão</b></h4>
                    <p>
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit
                        longer.
                    </p>
                    <p><small>Autor | last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card-2">
                <img class="main-cartao__body-image__2" src="https://placehold.co/181x215" alt="Avatar" />
                <div class="container texto-card">
                    <h4><b>Título do Cartão</b></h4>
                    <p>
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit
                        longer.
                    </p>
                    <p><small>Autor | last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card-3">
                <img class="main-cartao__body-image__2" src="https://placehold.co/181x215" alt="Avatar" />
                <div class="container texto-card">
                    <h4><b>Título do Cartão</b></h4>
                    <p>
                        This is a wider card with supporting text below as a natural
                        lead-in to additional content. This content is a little bit
                        longer.
                    </p>
                    <p><small>Autor | last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div>
            <a class="ver-mais" href="#">
                <h4 class="main-artigos main-artigos__text">ver mais</h4>
            </a>
            <div class="divisor"></div>
            <h1 class="main-artigos main-artigos__text">Eventos em Destaque</h1>
        </div>

        <section class="splide" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card-carrosel">
                            <img class="main-cartao__body-image" src="https://placehold.co/294x276" alt="Avatar"
                                style="width: 100%" />
                            <div class="container texto-cards">
                                <h4><b>Título do Cartão</b></h4>
                                <p>
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p><small>Autor | last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card-carrosel">
                            <img class="main-cartao__body-image" src="https://placehold.co/294x276" alt="Avatar"
                                style="width: 100%" />
                            <div class="container texto-cards">
                                <h4><b>Título do Cartão</b></h4>
                                <p>
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p><small>Autor | last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card-carrosel">
                            <img class="main-cartao__body-image" src="https://placehold.co/294x276" alt="Avatar"
                                style="width: 100%" />
                            <div class="container texto-cards">
                                <h4><b>Título do Cartão</b></h4>
                                <p>
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p><small>Autor | last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card-carrosel">
                            <img class="main-cartao__body-image" src="https://placehold.co/294x276" alt="Avatar"
                                style="width: 100%" />
                            <div class="container texto-cards">
                                <h4><b>Título do Cartão</b></h4>
                                <p>
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p><small>Autor | last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card-carrosel">
                            <img class="main-cartao__body-image" src="https://placehold.co/294x276" alt="Avatar"
                                style="width: 100%" />
                            <div class="container texto-cards">
                                <h4><b>Título do Cartão</b></h4>
                                <p>
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p><small>Autor | last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card-carrosel">
                            <img class="main-cartao__body-image" src="https://placehold.co/294x276" alt="Avatar"
                                style="width: 100%" />
                            <div class="container texto-cards">
                                <h4><b>Título do Cartão</b></h4>
                                <p>
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit
                                    longer.
                                </p>
                                <p><small>Autor | last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </main>

    <script>
      new Splide(".splide", {
        perPage: 4,
        type: "loop",
        gap: "0.8rem",
        focus: "center",
        drag: true,
        pagination: false,
        breakpoints: {
          1200: {
            perPage: 3,
          },
          900: {
            perPage: 2,
          },
          600: {
            perPage: 1,
          },
          480: {
            perPage: 1,
          },
        },
      }).mount();
    </script>
</x-main-layout>