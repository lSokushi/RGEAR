<x-internal-layout title="Configurações">
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
            <a href="{{ route('dashboard') }}" class="btn btn-dark w-100 text-start mb-3">
              <i class="bi bi-house-door me-2"></i>Dashboard
            </a>
            <a href="{{ route('relatorios') }}" class="btn btn-dark w-100 text-start mb-3">
              <i class="bi bi-bar-chart me-2"></i>Relatórios
            </a>
            <a href="{{ route('configuracoes') }}" class="btn btn-dark w-100 text-start mb-3 active">
              <i class="bi bi-gear me-2"></i>Configurações
            </a>
          </nav>
          <a href="{{ route('logout') }}" class="btn btn-danger mt-auto w-100">
            <i class="bi bi-box-arrow-right"></i> Sair
          </a>
        </aside>
  
        <!-- Main Content -->
        <section class="col-md-10 bg-light p-4">
          <h1 class="mb-4 fs-3">Configurações</h1>
  
          <!-- Profile Settings -->
          <div class="bg-white p-4 shadow-sm rounded mb-4">
            <h5 class="mb-3">Informações do Perfil</h5>
            <form action="{{ route('configuracoes.atualizar') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth()->user()->name }}">
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth()->user()->email }}">
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Nova Senha</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Deixe vazio para não alterar">
              </div>
              <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </form>
          </div>
  
          <!-- Preferences -->
          <div class="bg-white p-4 shadow-sm rounded mb-4">
            <h5 class="mb-3">Preferências</h5>
            <form action="{{ route('configuracoes.preferencias') }}" method="POST">
              @csrf
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="darkMode" name="darkMode" {{ $preferences->darkMode ? 'checked' : '' }}>
                <label class="form-check-label" for="darkMode">Modo Escuro</label>
              </div>
              <div class="form-check form-switch mb-3">
                <input class="form-check-input" type="checkbox" id="notifications" name="notifications" checked>
                <label class="form-check-label" for="notifications">Ativar Notificações</label>
              </div>
              <button type="submit" class="btn btn-primary">Salvar Preferências</button>
            </form>
          </div>
  
          <!-- Security Settings -->
          <div class="bg-white p-4 shadow-sm rounded">
            <h5 class="mb-3">Configurações de Segurança</h5>
            <form action="{{ route('configuracoes.seguranca') }}" method="POST">
              @csrf
              <div class="mb-3">
                <label for="currentPassword" class="form-label">Senha Atual</label>
                <input type="password" class="form-control" id="currentPassword" name="currentPassword" required>
              </div>
              <div class="mb-3">
                <label for="newPassword" class="form-label">Nova Senha</label>
                <input type="password" class="form-control" id="newPassword" name="newPassword" required>
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirmar Nova Senha</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
              </div>
              <button type="submit" class="btn btn-danger">Atualizar Senha</button>
            </form>
          </div>
        </section>
      </div>
    </main>
  </x-internal-layout>
  