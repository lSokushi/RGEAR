<!-- 1. Layout Definition -->
<x-internal-layout title="Dashboard">
    <!-- 2. Stylesheets -->
    <link href="/public/css/das.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="/public/css/dashboard.css"> --}}


    <!-- 2. Main Container -->

    <body>
        <main class="container-fluid w-100">
            <div class="row flex">

                <!-- 3. Sidebar -->
                <aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">

                    <!-- 3.1. User Profile -->
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <h2 class="fs-1 w-100">{{ Auth()->user()->name }}</h2>
                    </div>
                    <div class="divider"></div>

                    <!-- 3.2. Create Section -->
                    <p class="d-inline-flex gap-1 mt-5">
                        <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapseExample"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            Cadastrar
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </a>
                    </p>
                    <div class="collapse mb-4" id="collapseExample">
                        <div class="card card-body border-0">
                            <a href="{{ route('dashboard') }}" onclick="showSection('usuario')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg>
                                Usuário
                            </a>
                            <a href="{{ route('dashboard-publication') }}" onclick="showSection('publicacoes')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                                    <path
                                        d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                                </svg>
                                Publicação
                            </a>
                        </div>
                    </div>

                    <!-- 3.3. Published Section -->
                    <p class="d-inline-flex gap-1 mt-5">
                        <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapse2Example"
                            role="button" aria-expanded="false" aria-controls="collapseExample">
                            Ver Publicados
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                <path
                                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                            </svg>
                        </a>
                    </p>
                    <div class="collapse mb-4" id="collapse2Example">
                        <div class="card card-body border">
                            <a href="{{ route('editaruser') }}" onclick="showSection('usuario')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path
                                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                                    <path
                                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                                </svg>
                                Usuários
                            </a>
                            <a href="{{ route('editarpubli') }}" onclick="showSection('publicacoes')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                                    <path
                                        d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                                </svg>
                                Publicações
                            </a>
                        </div>
                    </div>

                    <!-- 3.4. Logout -->
                    <button
                        class="button__exit mt-auto w-100 fs-3 p-4 rounded-3 border-0 text-light d-flex gap-4 justify-content-center align-items-center">
                        <i class="bi bi-box-arrow-right"></i> <a href="{{ route('logout') }}"
                            class="text-light text-decoration-none">Sair</a>
                    </button>

                </aside>
                <!-- 4. Main Content -->
                <section class="col-md-10 bg-light createPublication">
                    <!-- 4.1. Publications Header -->
                    <div class="p-4 container-fluid">
                        <h1 class="mb-4 text-dark w-100 bg shadow-sm">Publicações</h1>

                        <!-- 4.2. Success and Error Messages -->
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <!-- 4.3. Publication Form -->
                        <section id="publicacoes">
                            <div class="bg-white p-4 shadow-sm rounded">
                                <form id="publication-form" action="{{ route('dashboard-publication.store') }}"
                                    method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Título e Autores -->
                                    <fieldset class="fieldset-container mb-4">
                                        <legend class="fs-3 fw-bold">Informações Básicas</legend>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputTitle4" class="form-label">Título da Publicação</label>
                                                <input type="text" class="form-control form-control-lg" id="inputTitle4"
                                                    name="title" placeholder="Ex: Modelagem 3D com Blender"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="inputAuthor4" class="form-label">Autores</label>
                                                <input type="text" class="form-control form-control-lg" id="inputAuthor4"
                                                    name="author" placeholder="Ex: France Ferreira Arnaut" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Resumo e Tipo de Item -->
                                    <fieldset class="fieldset-container mb-4">
                                        <legend class="fs-3 fw-bold">Detalhes do Conteúdo</legend>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="inputResume" class="form-label">Resumo</label>
                                                <textarea class="form-control form-control-lg" id="inputResume" name="resume" rows="4"
                                                    placeholder="Breve resumo da publicação..." required></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="itemType" class="form-label">Tipo de Item</label>
                                                <select class="form-select" id="itemType" name="item_type" required>
                                                    <option value="" disabled selected>Selecione o tipo de item
                                                    </option>
                                                    <option value="Artigo">Artigo</option>
                                                    <option value="Jogo APK">Jogo APK</option>
                                                    <option value="Jogo Builder">Jogo Builder</option>
                                                    <option value="Modelagens">Modelagens</option>
                                                    <option value="Participação em Eventos">Participação em Eventos
                                                    </option>
                                                    <option value="Outros">Outros</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Status e Linha de Pesquisa -->
                                    <fieldset class="fieldset-container mb-4">
                                        <legend class="fs-3 fw-bold">Classificação</legend>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Status</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="statusInterno" value="Produção Interna" checked>
                                                    <label class="form-check-label" for="statusInterno">Produção
                                                        Interna</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="status"
                                                        id="statusExterno" value="Participação Externa">
                                                    <label class="form-check-label" for="statusExterno">Participação
                                                        Externa</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Linha de Pesquisa</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="lineAutomation" name="research_lines[]"
                                                        value="Automação e Robótica Educacional">
                                                    <label class="form-check-label" for="lineAutomation">Automação e
                                                        Robótica Educacional</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="lineAI"
                                                        name="research_lines[]" value="Engenharia e IA Aplicada">
                                                    <label class="form-check-label" for="lineAI">Engenharia e IA
                                                        Aplicada</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="lineComputing" name="research_lines[]"
                                                        value="Computação, Educação e Sustentabilidade">
                                                    <label class="form-check-label" for="lineComputing">Computação,
                                                        Educação e Sustentabilidade</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Local da Publicação -->
                                    <fieldset class="fieldset-container mb-4">
                                        <legend class="fs-3 fw-bold">Local da Publicação</legend>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="type" class="form-label">Local da Publicação</label>
                                                <select name="type" id="type" class="form-select" required>
                                                    <option value="  " disabled selected>Selecione o Tipo</option>
                                                    <option value="article">Artigo</option>
                                                    <option value="game">Jogo</option>
                                                    <option value="event">Evento</option>
                                                    <option value="other">Outro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>


                                    <!-- Upload de Arquivos -->
                                    <fieldset class="fieldset-container mb-4">
                                        <legend class="fs-3 fw-bold">Mídia e Arquivos</legend>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="uploadImages" class="form-label">Imagens da
                                                    Publicação</label>
                                                <input type="file" class="form-control form-control-lg" id="uploadImages"
                                                    name="images[]" accept="image/*" multiple>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="file" class="form-label">Arquivo Principal</label>
                                                <input type="file" class="form-control form-control-lg" id="file" name="file" accept=".pdf,.zip,.apk" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Ano e Localização -->
                                    <fieldset class="fieldset-container mb-4">
                                        <legend class="fs-3 fw-bold">Publicação</legend>
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label for="publicationYear" class="form-label">Ano</label>
                                                <input type="number" class="form-control form-control-lg" id="publicationYear"
                                                    name="year" value="{{ date('Y') }}" min="2000"
                                                    max="{{ date('Y') }}" required>
                                            </div>
                                            <div class="col-md-8">
                                                <label for="publicationLocation" class="form-label">Local da
                                                    Publicação</label>
                                                <input type="text" class="form-control form-control-lg" id="publicationLocation"
                                                    name="location" placeholder="Ex: Lauro de Freitas, BA" required>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <!-- Ações -->
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
                                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                            data-bs-target="#previewModal">Pré-Visualizar</button>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </section>



        </main>

        <!-- 5. Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ mix('js/dashboard.js') }}"></script>
        <script src="{{ mix('js/change-password.js') }}"></script>
    </body>

</x-internal-layout>
