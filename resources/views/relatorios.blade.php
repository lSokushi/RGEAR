<x-internal-layout title="Relatórios">
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
            <a href="{{ route('relatorios') }}" class="btn btn-dark w-100 text-start mb-3 active">
              <i class="bi bi-bar-chart me-2"></i>Relatórios
            </a>
            <a href="{{ route('configuracoes') }}" class="btn btn-dark w-100 text-start mb-3">
              <i class="bi bi-gear me-2"></i>Configurações
            </a>
          </nav>
          <a href="{{ route('logout') }}" class="btn btn-danger mt-auto w-100">
            <i class="bi bi-box-arrow-right"></i> Sair
          </a>
        </aside>
  
        <!-- Main Content -->
        <section class="col-md-10 bg-light p-4">
          <h1 class="mb-4 fs-3">Relatórios</h1>
  
          <!-- Chart Section -->
          <div class="row g-4">
            <div class="col-md-6">
              <div class="card shadow-sm">
                <div class="card-body">
                  <h5 class="card-title">Usuários por Mês</h5>
                  <canvas id="usersChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card shadow-sm">
                <div class="card-body">
                  <h5 class="card-title">Publicações por Categoria</h5>
                  <canvas id="publicationsChart"></canvas>
                </div>
              </div>
            </div>
          </div>
  
          <!-- Data Table Section -->
          <div class="mt-5">
            <h2 class="fs-4">Resumo de Dados</h2>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Métrica</th>
                  <th>Valor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Total de Usuários</td>
                  <td>150</td>
                </tr>
                <tr>
                  <td>Total de Publicações</td>
                  <td>340</td>
                </tr>
                <tr>
                  <td>Publicações Pendentes</td>
                  <td>12</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
      </div>
    </main>
  
    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
      const ctx1 = document.getElementById('usersChart').getContext('2d');
      const usersChart = new Chart(ctx1, {
        type: 'line',
        data: {
          labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho'],
          datasets: [{
            label: 'Usuários',
            data: [5, 10, 15, 20, 25, 30],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
          }]
        }
      });
  
      const ctx2 = document.getElementById('publicationsChart').getContext('2d');
      const publicationsChart = new Chart(ctx2, {
        type: 'pie',
        data: {
          labels: ['Educação', 'Tecnologia', 'Sustentabilidade'],
          datasets: [{
            data: [40, 30, 30],
            backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe']
          }]
        }
      });
    </script>
  </x-internal-layout>
  