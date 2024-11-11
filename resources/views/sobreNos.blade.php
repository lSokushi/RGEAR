<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Saiba sobre os principais integrantes do RGEAR" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/about-us.css" />
    <title>RGEAR | Sobre Nós</title>
</head>

<body>
    <x-header></x-header>


    <main>
    <section class="container-fluid d-flex flex-column align-items-center justify-content-center">
            <!-- Seção Sobre Nós -->
           

            <!-- Artigos dos Pesquisadores -->
            <article class="container-fluid d-flex flex-column align-items-center gap-6 article">
                @foreach($pesquisadores as $pesquisador)
                    <x-pesquisador-card
                        :name="$pesquisador['name']"
                        :image="$pesquisador['image']"
                        :bio="$pesquisador['bio']"
                        :direction="$pesquisador['direction']"
                    />
                @endforeach
            </article>
        </section>
    </main>

    <x-footer></x-footer>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>