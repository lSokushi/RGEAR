<x-internal-layout title="Dashboard">


  <body>
    <main class="container-fluid w-100">
      <div class="row">
        <aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
          <div class="d-flex align-items-center gap-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill"
              viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
            </svg>
            <h2 class="fs-1 w-100">{{Auth()->user()->name}}</h2>
          </div>
          <div class="divider"></div>
          <nav class="flex-grow-1 h-100">
            <p class="d-inline-flex gap-1 mt-5">
              <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample">
                Cadastrar
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                  <path
                    d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                </svg>
              </a>
            </p>
            <div class="collapse mb-4" id="collapseExample">
              <div class="card card-body border border-0">
                <a href="{{route("dashboard")}}" onclick="showSection('publicacoes')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-add" viewBox="0 0 16 16">
                    <path
                      d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                    <path
                      d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                  </svg>
                  Usuário
                </a>
                <a href="{{route("dashboard-publication")}}" onclick="showSection('publicacoes')">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check2-square" viewBox="0 0 16 16">
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
            <i class="bi bi-box-arrow-right"></i> <a href="{{route('logout')}}"
              class="text-light text-decoration-none">Sair</a>
          </button>
        </aside>
        <section class="col-md-10 bg-light hide" class="createPublication">
          <div class="p-4 container-fluid">
            <h1 class="mb-4 text-dark w-100">Publicações</h1>

            <div class="bg-white p-4 shadow-sm rounded">
              <form class="row g-5" method="POST" action="{{route("publication.store")}}">
                @csrf
                <div class="col-md-6">
                  <label for="inputTitle4" class="form-label fs-3">Título da publicação</label>
                  <input type="text" class="form-control h-75 fs-3" id="inputTitle4"
                    placeholder="Modelagem 3D com Blender" name="title" required />
                </div>

                <div class="col-md-6">
                  <label for="inputAuthor4" class="form-label fs-3">Autores</label>
                  <input type="text" class="form-control h-75 fs-3" id="inputAuthor4"
                    placeholder="France Ferreira Arnaut" name="author" required />
                </div>

                <div class="col-md-6">
                  <label for="inputResume" class="form-label fs-3">Resumo</label>
                  <textarea class="form-control fs-3 h-75" id="inputResume"
                    aria-label="O evento de modelagem 3D com Blender ensina a criar objetos e cenários em 3D, abordando..."
                    name="resume" required></textarea>
                </div>

                <div class="col-md-6">
                  <label for="itemType" class="form-label fs-3">Tipo de Item</label>
                  <select class="form-select form-select-lg fs-3 h-75" id="itemType"
                    aria-label="Selecionar tipo de item" name="item_type" required>
                    <option value="">Selecionar tipo de item</option>
                    <option value="Artigo">Artigo</option>
                    <option value="Jogo APK">Jogo APK</option>
                    <option value="Jogo Builder">Jogo Builder</option>
                    <option value="Modelagensawa">Modelagens</option>
                    <option value="Participação em Eventos">Participação em Eventos</option>
                    <option value="Outros">Outros</option>
                  </select>
                </div>

                <div class="col-md-3">
                  <fieldset class="mb-3">
                    <legend class="col-form-label pt-0 fs-3">Status</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="userType" id="userType1" value="supervisor"
                        checked required />
                      <label class="form-check-label fs-3" for="userType1">Produção Interna</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="userType" id="userType2" value="student" />
                      <label class="form-check-label fs-3" for="userType2">Participação Externa</label>
                    </div>
                  </fieldset>
                </div>

                <div class="col-md-3">
                  <fieldset class="mb-3">
                    <legend class="col-form-label pt-0 fs-3">Linha de Pesquisa</legend>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Automação e Robótica Educacional"
                        id="flexCheckDefault" name="linha_pesquisa[]">
                      <label class="form-check-label" for="flexCheckDefault">
                        Automação e Robótica Educacional
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Engenharia e IA Aplicada"
                        id="checkbox_engenharia" name="linha_pesquisa[]">
                      <label class="form-check-label" for="checkbox_engenharia">
                        Engenharia e IA Aplicada
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Computação, Educação e Sustentabilidade"
                        id="checkbox_computacao" name="linha_pesquisa[]">
                      <label class="form-check-label" for="checkbox_computacao">
                        Computação, Educação e
                        Sustentabilidade
                      </label>
                    </div>
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <label for="formFileMultiple" class="form-label fs-3">Imagens da publicação</label>
                  <input class="form-control form-control-lg p-3 h-auto fs-3" type="file" id="formFileMultiple" multiple
                    name="imagem">
                </div>
                <div class="col-md-6">
                  <label for="formFileMultiple" class="form-label fs-3">Arquivo</label>
                  <input class="form-control form-control-lg p-3 h-auto fs-3" type="file" id="formFileMultiple" multiple
                    name="file">
                </div>
                <!-- <div class="d-flex justify-content-end">
                <div class="col-md-2">
                  <label for="inputYear4" class="form-label fs-3">Ano</label>
                  <input type="number" class="form-control fs-3" id="inputYear4" placeholder="2024" />
                </div> -->

                <div class="col-md-2 ms-3">
                  <label for="inputYear4" class="form-label fs-3">Local da Publicação</label>
                  <input type="text" class="form-control fs-3" id="inputYear4" placeholder="Lauro de Freitas, BA"
                    required name="local" />
                </div>
            </div>

            <div class="col-12 text-end">
              <button type="submit" class="border-0 rounded text-light fs-3 shadow">Cadastrar</button>
              <button type="button" class="border-1 rounded-3 text-dark fs-3 shadow bg-light" data-bs-toggle="modal"
                data-bs-target="#previewModal">Pré-Visualização</button>
            </div>

            <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title fs-3" id="previewModalLabel">Pré-Visualização</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam ipsam libero eaque error iusto
                      fugit sint ut quaerat aut, voluptatem magni distinctio veniam nemo inventore beatae saepe iste.
                      Ex, cumque.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary fs-2" data-bs-dismiss="modal">Fechar</button>
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

    <script src="../../js/dashboard.js"></script>
  </body>

  </html>
</x-internal-layout>