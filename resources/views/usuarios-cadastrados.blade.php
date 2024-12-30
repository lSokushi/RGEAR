<x-internal-layout title="Usuários Cadastrados">
  <main class="container-fluid w-100">
    <div class="row flex">
      <!-- Sidebar -->
      <aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
        <div class="d-flex align-items-center gap-3 mb-4">
          <i class="bi bi-person-circle fs-1"></i>
          <h2 class="fs-4">{{ Auth()->user()->name }}</h2>
        </div>
        <hr class="my-3">
        <nav class="flex-grow-1">
          <button class="btn btn-dark w-100 text-start mb-3" data-bs-toggle="collapse" data-bs-target="#createMenu">
            <i class="bi bi-plus-circle me-2"></i>Cadastrar
          </button>
          <div class="collapse" id="createMenu">
            <a href="{{ route('dashboard') }}" class="d-block text-light py-2 ps-4">Usuário</a>
            <a href="{{ route('dashboard-publication') }}" class="d-block text-light py-2 ps-4">Publicação</a>
          </div>
          <button class="btn btn-dark w-100 text-start mb-3" data-bs-toggle="collapse" data-bs-target="#viewMenu">
            <i class="bi bi-eye me-2"></i>Ver Publicados
          </button>
          <div class="collapse" id="viewMenu">
            <a href="{{ route('editaruser') }}" class="d-block text-light py-2 ps-4">Usuários</a>
            <a href="{{ route('editarpubli') }}" class="d-block text-light py-2 ps-4">Publicações</a>
          </div>
        </nav>
        <a href="{{ route('logout') }}" class="btn btn-danger mt-auto w-100">
          <i class="bi bi-box-arrow-right"></i> Sair
        </a>
      </aside>

      <!-- Main Content -->
      <section class="col-md-10 bg-light p-4">
        <h1 class="mb-4 fs-3">Usuários Cadastrados</h1>
        <div class="bg-white p-4 shadow-sm rounded">
          <!-- User Table -->
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome Completo</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->phone ?? 'N/A' }}</td>
                  <td>{{ $user->cpf ?? 'N/A' }}</td>
                  <td>
                    <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-sm btn-outline-warning">
                      <i class="bi bi-pencil"></i>
                    </a>
                    <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST" style="display:inline;">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-outline-danger">
                        <i class="bi bi-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="6" class="text-center">Nenhum usuário encontrado.</td>
                </tr>
              @endforelse
            </tbody>
          </table>

          <!-- Pagination -->
          <div class="mt-3">
            {{ $users->links() }}
          </div>
        </div>
      </section>
    </div>
  </main>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteUserModalLabel">Excluir Usuário</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Tem certeza que deseja excluir este usuário?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Excluir</button>
        </div>
      </div>
    </div>
  </div>
</x-internal-layout>
