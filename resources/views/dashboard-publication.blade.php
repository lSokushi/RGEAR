<x-internal-layout title="Dashboard">

    <body>
        <main class="container-fluid w-100">
            <div class="row">
                <aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                        </svg>
                        <h2 class="fs-1 w-100">
                            @if (Auth::check())
                                <h2 class="fs-1 w-100">{{ Auth::user()->name }}</h2>
                            @else
                                <h2 class="fs-1 w-100">Visitante</h2>
                            @endif
                        </h2>
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="divider"></div>
                    <nav class="flex-grow-1 h-100">
                        <p class="d-inline-flex gap-1 mt-5">
                            <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapseExample"
                                role="button" aria-expanded="false" aria-controls="collapseExample">
                                Cadastrar
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                </svg>
                            </a>
                        </p>
                        <div class="collapse mb-4" id="collapseExample">
                            <div class="card card-body border border-0">
                                <a href="{{ route('dashboard') }}" onclick="showSection('publicacoes')">
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
                    </nav>
                    <button
                        class="button__exit mt-auto w-100 fs-3 p-4 rounded-3 border-0 text-light d-flex gap-4 justify-content-center align-items-center">
                        <i class="bi bi-box-arrow-right"></i> <a href="{{ route('logout') }}"
                            class="text-light text-decoration-none">Sair</a>
                    </button>
                </aside>
                <section class="col-md-10 bg-light hide" class="createPublication">
                    <div class="p-4 container-fluid">
                        <h1 class="mb-4 text-dark w-100">Publicações</h1>

                        <div class="bg-white p-4 shadow-sm rounded">
                            <form action="{{ route('dashboard-publication.store') }}" method="POST"
                                enctype="multipart/form-data" class="row g-5">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputTitle4" class="form-label fs-3">Título da publicação</label>
                                    <input type="text" name="title" class="form-control h-75 fs-3" id="inputTitle4"
                                        placeholder="Modelagem 3D com Blender" />
                                </div>

                                <div class="col-md-6">
                                    <label for="inputAuthor4" class="form-label fs-3">Autores</label>
                                    <input type="text" name="author" class="form-control h-75 fs-3"
                                        id="inputAuthor4" placeholder="France Ferreira Arnaut" />
                                </div>

                                <div class="col-md-6">
                                    <label for="inputResume" class="form-label fs-3">Resumo</label>
                                    <textarea class="form-control fs-3 h-75" name="resume" id="inputResume" placeholder="Descrição da publicação"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="itemType" class="form-label fs-3">Tipo de Item</label>
                                    <select class="form-select form-select-lg fs-3 h-75" name="type"
                                        id="itemType">
                                        <option value="0">Selecionar tipo de item</option>
                                        <option value="1">Artigo</option>
                                        <option value="2">Jogo APK</option>
                                        <option value="3">Jogo Builder</option>
                                        <option value="4">Modelagens</option>
                                        <option value="5">Participação em Eventos</option>
                                        <option value="6">Outros</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <fieldset class="mb-3">
                                        <legend class="col-form-label pt-0 fs-3">Status</legend>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="status1" value="produced" checked />
                                            <label class="form-check-label fs-3" for="status1">Produção
                                                Interna</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status"
                                                id="status2" value="external" />
                                            <label class="form-check-label fs-3" for="status2">Participação
                                                Externa</label>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="col-md-3">
                                    <fieldset class="mb-3">
                                        <legend class="col-form-label pt-0 fs-3">Linha de Pesquisa</legend>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="research_lines[]"
                                                value="automation" id="research1" />
                                            <label class="form-check-label" for="research1">
                                                Automação e Robótica Educacional
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="research_lines[]"
                                                value="ai_engineering" id="research2" />
                                            <label class="form-check-label" for="research2">
                                                Engenharia e IA Aplicada
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="research_lines[]"
                                                value="computing_education" id="research3" />
                                            <label class="form-check-label" for="research3">
                                                Computação, Educação e Sustentabilidade
                                            </label>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <label for="formFileMultiple" class="form-label fs-3">Imagens da
                                        publicação</label>
                                    <input class="form-control form-control-lg p-3 h-auto fs-3" type="file"
                                        name="files[]" id="formFileMultiple" multiple>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputYear4" class="form-label fs-3">Ano</label>
                                    <input type="number" name="year" class="form-control fs-3" id="inputYear4"
                                        placeholder="2024" />
                                </div>

                                <div class="col-md-6">
                                    <label for="inputLocation4" class="form-label fs-3">Local da Publicação</label>
                                    <input type="text" name="location" class="form-control fs-3"
                                        id="inputLocation4" placeholder="Lauro de Freitas, BA" />
                                </div>

                                <div class="col-12 text-end">
                                    <button type="submit"
                                        class="border-0 rounded text-light fs-3 shadow">Cadastrar</button>
                                    <div class="col-12 text-end">
                                        <button type="submit"
                                            class="border-0 rounded text-light fs-3 shadow">Cadastrar</button>
                                        <button type="button"
                                            class="border-1 rounded-3 text-dark fs-3 shadow bg-light"
                                            data-bs-toggle="modal"
                                            data-bs-target="#previewModal">Pré-Visualização</button>
                                    </div>

                                    <!-- Modal de Pré-Visualização -->
                                    <div class="modal fade" id="previewModal" tabindex="-1"
                                        aria-labelledby="previewModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title fs-3" id="previewModalLabel">
                                                        Pré-Visualização</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Conteúdo do preview -->
                                                    <p>
                                                        Aqui será exibida uma pré-visualização do conteúdo preenchido no
                                                        formulário.
                                                        Você pode personalizar essa seção para exibir dados específicos.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary fs-2"
                                                        data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <script src="public/js/DashboardPublicationController.js"></script>
    </body>

</x-internal-layout>
