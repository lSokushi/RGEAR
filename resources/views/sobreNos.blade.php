<x-main-layout title="Sobre nós">
<body>
    <main>
    <section class="container-fluid d-flex flex-column align-items-center justify-content-center">
            <!-- Seção Sobre Nós -->
           

            <!-- Artigos dos Pesquisadores -->
            <article class="container-fluid d-flex flex-column align-items-center gap-6 article">
                @foreach($pesquisadores as $pesquisador)
                    <x-pesquisador-card
                        :name="$pesquisador['name']"
                        :image="$pesquisador['image']"
                        :bio="$pesquisador['area_of_expertise']"
                        :direction="$pesquisador['direction']"
                    />
                @endforeach
            </article>
        </section>
    </main>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
</x-main-layout>