<aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
    <div class="d-flex align-items-center gap-3 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
        </svg>
        <h2 class="fs-1 w-100">{{ Auth()->user()->name }}</h2>
    </div>
    <div class="divider"></div>
    <p class="d-inline-flex gap-1 mt-5">
        <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Cadastrar
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
            </svg>
        </a>
    </p>
    <!-- Restante do código do sidebar -->
</aside>
