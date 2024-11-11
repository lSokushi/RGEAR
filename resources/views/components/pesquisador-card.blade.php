@props(['name', 'image', 'bio', 'direction' => 'start'])

<div class="card mb-3 border w-100" style="max-width: 780px">
    <div class="row g-0 d-flex text-md-start text-center justify-content-{{ $direction }}">
        <div class="col-md-4 d-flex justify-content-center align-items-center">
            <figure>
                <img src="{{ asset($image) }}" class="img-fluid" alt="Foto de Perfil do Pesquisador {{ $name }}">
            </figure>
        </div>
        <div class="col-md-8 d-flex flex-column justify-content-center align-items-center">
            <div class="card-body">
                <h3 class="card-title fs-2 mb-5 fw-bold highlight">{{ $name }}</h3>
                <p class="card-text w-100" style="text-align: justify;">
                    {{ $bio }}
                </p>
            </div>
        </div>
    </div>
</div>
