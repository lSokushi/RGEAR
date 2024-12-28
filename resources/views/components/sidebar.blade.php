<aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
    <!-- User Profile -->
    <div class="d-flex align-items-center gap-3 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
            class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
        </svg>
        <h2 class="fs-1 w-100">{{ Auth()->user()->name }}</h2>
    </div>
    <div class="divider"></div>
    
    <!-- Create Section -->
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-add" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                    <path
                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                </svg>
                Usuário
            </a>
            <a href="{{ route('dashboard-publication') }}" onclick="showSection('publicacoes')">
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

    <!-- Published Section -->
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
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-person-add" viewBox="0 0 16 16">
                    <path
                        d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                    <path
                        d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                </svg>
                Usuários
            </a>
            <a href="{{ route('editarpubli') }}" onclick="showSection('publicacoes')">
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

    <!-- Logout -->
    <button
        class="button__exit mt-auto w-100 fs-3 p-4 rounded-3 border-0 text-light d-flex gap-4 justify-content-center align-items-center">
        <i class="bi bi-box-arrow-right"></i> <a href="{{ route('logout') }}"
            class="text-light text-decoration-none">Sair</a>
    </button>
</aside>
