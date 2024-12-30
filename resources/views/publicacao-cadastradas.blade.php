<x-internal-layout title="Dashboard">
  <main class="container-fluid w-100">
    <div class="row flex">
      <!-- 1. Sidebar -->
      <aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
        <div class="d-flex align-items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
          </svg>
          <h2 class="fs-1">{{ Auth()->user()->name }}</h2>
        </div>
        <nav class="flex-grow-1">
          <div class="mt-4">
            <button class="btn text-light fs-4" data-bs-toggle="collapse" data-bs-target="#registerMenu">
              Cadastrar <i class="bi bi-caret-down-fill"></i>
            </button>
            <div class="collapse" id="registerMenu">
              <a href="{{ route('dashboard') }}" class="d-block mt-2">Usuário</a>
              <a href="{{ route('dashboard-publication') }}" class="d-block mt-2">Publicação</a>
            </div>
          </div>
          <div class="mt-4">
            <button class="btn text-light fs-4" data-bs-toggle="collapse" data-bs-target="#publishedMenu">
              Ver Publicados <i class="bi bi-caret-down-fill"></i>
            </button>
            <div class="collapse" id="publishedMenu">
              <a href="{{ route('editaruser') }}" class="d-block mt-2">Usuários</a>
              <a href="{{ route('editarpubli') }}" class="d-block mt-2">Publicações</a>
            </div>
          </div>
        </nav>
        <a href="{{ route('logout') }}" class="btn btn-danger mt-auto w-100">Sair</a>
      </aside>

      <!-- 2. Main Content -->
      <section class="col-md-10 bg-light p-4">
        <div>
          <h1 class="mb-4">Publicações Cadastradas</h1>

  <!-- 2. Table of Publications -->
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


<!-- 1. Pagination Navigation -->
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

<!-- 2. Modal for Previewing Publication -->
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

<!-- 3. Modal for Deleting Publication -->
<!-- Modal for Deleting Publication -->
<div class="modal fade" id="deletePublicationModal" tabindex="-1" aria-labelledby="deletePublicationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deletePublicationModalLabel">Excluir Publicação</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form id="delete-form" method="POST">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                  <p>Tem certeza que deseja excluir essa publicação?</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary fs-4" data-bs-dismiss="modal">Não, Cancelar</button>
                  <button type="submit" class="btn btn-danger fs-4">Sim, Excluir</button>
              </div>
          </form>
      </div>
  </div>
</div>


<!-- 4. Modal for Deleting User -->
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