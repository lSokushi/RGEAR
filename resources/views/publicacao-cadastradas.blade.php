<x-internal-layout title="Dashboard">
<main class="container-fluid w-100">
    <div class="row flex flex">
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
              <a href="{{route("dashboard")}}"" onclick="showSection('usuario')">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-add" viewBox="0 0 16 16">
                  <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                  <path
                    d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                </svg>
                Usuário
              </a>
              <a href="{{route("dashboard-publication")}}"  onclick="showSection('publicacoes')">
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
          <br>
          <p class="d-inline-flex gap-1 mt-5">
            <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapse2Example" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              Ver Publicados
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path
                  d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
              </svg>
            </a>
          </p>
          <div class="collapse mb-4" id="collapse2Example">
            <div class="card card-body border border-0">
              <a href="{{route("editaruser")}}" onclick="showSection('usuario')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-add" viewBox="0 0 16 16">
                  <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                  <path
                    d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                </svg>
                Usuários
              </a>
              <a href="{{route("editarpubli")}}"  onclick="showSection('publicacoes')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check2-square" viewBox="0 0 16 16">
                  <path
                    d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                  <path
                    d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                </svg>
                Publicações
              </a>
            </div>
          </div>

        </nav>
        <button
          class="button__exit mt-auto w-100 fs-3 p-4 rounded-3 border-0 text-light d-flex gap-4 justify-content-center align-items-center">
          <i class="bi bi-box-arrow-right"></i><a href="{{route('logout')}}" class="text-light text-decoration-none">Sair</a>
        </button>
      </aside>
<section class="col-md-10 bg-light " class="listPublications">
        <div class="p-4 container-fluid">
          <h1 class="mb-4 text-dark w-100">Publicações Cadastradas</h1>

          <div class="bg-white p-4 shadow-sm rounded">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Título</th>
                  <th scope="col">Autores</th>
                  <th scope="col">Tipo</th>
                  <th scope="col">Status</th>
                  <th scope="col">Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-group-divider">
                  <th scope="row">1</th>
                  <td>Modelagem 3D</td>
                  <td>Dermerval Heigtor | Joacir Simões</td>
                  <td>Artigo</td>
                  <td>Participação Externa</td>
                  <td><button type="button" class="btn btn-warning w-auto" id="edit"><i
                        class="bi bi-pencil-square fs-3"></i></button></td>
                  <td><button type="button" class="btn btn-danger w-auto" data-bs-toggle="modal"
                      data-bs-target="#deletePublicationModal" id="delete"><i
                        class="bi bi-trash3-fill fs-3"></i></button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Robótica para Iniciantes</td>
                  <td>Andrique Figueirêdo | Joacir Simões</td>
                  <td>Artigo</td>
                  <td>Produção Interna</td>
                  <td><button type="button" class="btn btn-warning w-auto" id="edit"><i
                        class="bi bi-pencil-square fs-3"></i></button></td>
                  <td><button type="button" class="btn btn-danger w-auto" id="delete" data-bs-toggle="modal"
                      data-bs-target="#deletePublicationModal"><i class="bi bi-trash3-fill fs-3"></i></button></td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Computação em Nuvem</td>
                  <td>João Pedro Moraes</td>
                  <td>Artigo</td>
                  <td>Produção Interna</td>
                  <td><button type="button" class="btn btn-warning w-auto" id="edit"><i
                        class="bi bi-pencil-square fs-3"></i></button></td>
                  <td><button type="button" class="btn btn-danger w-auto" data-bs-toggle="modal"
                      data-bs-target="#deletePublicationModal" id="delete"><i
                        class="bi bi-trash3-fill fs-3"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>

        <nav aria-label="Page navigation example" class="pagination-centered">
          <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Anterior">
                <span aria-hidden="true">«</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Próximo">
                <span aria-hidden="true">»</span>
              </a>
            </li>
          </ul>
        </nav>
      </section>
    </div>
  </main>

  <!-- Modal Pré-Visualização Cadastro de Publicações -->
  <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
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

  <!-- Modal Excluir Publicação - Ver Publicados -->
  <div class="modal" id="deletePublicationModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir Publicação</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja excluir essa publicação?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary w-auto fs-4" data-bs-dismiss="modal">Não, Cancelar</button>
          <button type="button" class="btn btn-danger w-auto fs-4">Sim, Excluir</button>
        </div>
      </div>
    </div>
  </div>

  <!--  Modal Excluir Usuário - Ver Publicados -->
  <div class="modal" id="deleteUserModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Excluir Usuário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Tem certeza que deseja excluir esse usuário?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary w-auto fs-4" data-bs-dismiss="modal">Não, Cancelar</button>
          <button type="button" class="btn btn-danger w-auto fs-4">Sim, Excluir</button>
        </div>
      </div>
    </div>
  </div>
</x-internal-layout>