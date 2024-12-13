
@props(['name', 'image', 'bio', 'link', 'direction' => 'start'])

<div class="card mb-4 shadow-lg border-0 w-100" style="max-width: 780px;">
    <div class="row g-0 d-flex text-md-start text-center align-items-center flex-md-row flex-column-reverse justify-content-{{ $direction }}">
        <!-- Imagem -->
        <div class="col-md-4 d-flex justify-content-center align-items-center p-3">
            <figure class="rounded-circle overflow-hidden shadow" style="width: 150px; height: 150px;">
                <img src="{{ asset($image) }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="Foto de Perfil do Pesquisador {{ $name }}">
            </figure>
        </div>
        <!-- Texto -->
        <div class="col-md-8 d-flex flex-column justify-content-center align-items-center p-3">
            <div class="card-body">
                <a href="{{ $link }}" class="card-title text-primary fs-4 mb-3 fw-bold highlight d-block">
                    {{ $name }}
                </a>
                <p class="card-text text-muted" style="text-align: justify;">
                    {{ $bio }}
                </p>
            </div>
        </div>
    </div>
</div>


{{-- <div class="card shadow-sm border-0 h-100">
    <img src="{{ asset($image) }}" alt="{{ $name }}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">{{ $name }}</h5>
        <p class="card-text">{{ $bio }}</p>
        <a href="{{ $link }}" class="btn btn-primary">Saiba mais</a>
    </div>
</div> --}}

