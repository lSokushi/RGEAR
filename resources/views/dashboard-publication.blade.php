<x-internal-layout title="Dashboard">
    <link href="/public/css/dashboard.css" rel="stylesheet">
  
    <body>
      <main class="container-fluid w-100">
        <div class="row flex">
          <!-- 1. Sidebar -->
          <aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
            <div class="d-flex align-items-center gap-3 mb-4">
              <i class="bi bi-person-circle fs-1"></i>
              <h2 class="fs-4">{{ Auth()->user()->name }}</h2>
            </div>
            <hr class="my-3">
  
            <nav class="flex-grow-1">
              <div class="mb-3">
                <button class="btn btn-dark w-100 text-start" data-bs-toggle="collapse" data-bs-target="#createMenu">
                  <i class="bi bi-plus-circle me-2"></i>Cadastrar
                </button>
                <div class="collapse" id="createMenu">
                  <a href="{{ route('dashboard') }}" class="d-block text-light py-2 ps-4">Usuário</a>
                  <a href="{{ route('dashboard-publication') }}" class="d-block text-light py-2 ps-4">Publicação</a>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-dark w-100 text-start" data-bs-toggle="collapse" data-bs-target="#viewMenu">
                  <i class="bi bi-eye me-2"></i>Ver Publicados
                </button>
                <div class="collapse" id="viewMenu">
                  <a href="{{ route('editaruser') }}" class="d-block text-light py-2 ps-4">Usuários</a>
                  <a href="{{ route('editarpubli') }}" class="d-block text-light py-2 ps-4">Publicações</a>
                </div>
              </div>
              <div class="mb-3">
                <a href="{{ route('relatorios') }}" class="btn btn-dark w-100 text-start">
                  <i class="bi bi-bar-chart me-2"></i>Relatórios
                </a>
              </div>
              <div class="mb-3">
                <a href="{{ route('configuracoes') }}" class="btn btn-dark w-100 text-start">
                  <i class="bi bi-gear me-2"></i>Configurações
                </a>
              </div>
            </nav>
  
            <a href="{{ route('logout') }}" class="btn btn-danger mt-auto w-100">
              <i class="bi bi-box-arrow-right"></i> Sair
            </a>
          </aside>
  
          <!-- 2. Main Content -->
          <section class="col-md-10 bg-light p-4">
            <!-- Dashboard Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
              <h1 class="fs-3">Dashboard</h1>
              <button class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Nova Publicação
              </button>
            </div>
  
            <!-- Cards Section -->
            <div class="row g-4">
              <div class="col-md-4">
                <div class="card text-center shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <p class="card-text fs-4">150</p>
                    <a href="{{ route('editaruser') }}" class="btn btn-outline-primary">Gerenciar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">Publicações</h5>
                    <p class="card-text fs-4">340</p>
                    <a href="{{ route('editarpubli') }}" class="btn btn-outline-primary">Gerenciar</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card text-center shadow-sm">
                  <div class="card-body">
                    <h5 class="card-title">Relatórios</h5>
                    <p class="card-text fs-4">12</p>
                    <a href="#" class="btn btn-outline-primary">Visualizar</a>
                  </div>
                </div>
              </div>
            </div>
  
            <!-- Recent Publications Section -->
            <div class="mt-5">
              <h2 class="fs-4">Publicações Recentes</h2>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Status</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Modelagem 3D com Blender</td>
                    <td>France Ferreira Arnaut</td>
                    <td><span class="badge bg-success">Publicado</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">Editar</button>
                      <button class="btn btn-sm btn-outline-danger">Excluir</button>
                    </td>
                  </tr>
                  <tr>
                    <td>IA e Sustentabilidade</td>
                    <td>Maria Silva</td>
                    <td><span class="badge bg-warning">Em revisão</span></td>
                    <td>
                      <button class="btn btn-sm btn-outline-primary">Editar</button>
                      <button class="btn btn-sm btn-outline-danger">Excluir</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </main>
    </body>
  </x-internal-layout>
  