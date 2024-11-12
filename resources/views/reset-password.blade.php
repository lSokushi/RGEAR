{{-- resources/views/auth/reset-password.blade.php --}}

@extends('layouts.app')

@section('title', 'RGEAR | Recuperação de Senha')

@section('content')
<main class="d-flex flex-column justify-content-center align-items-center my-5 mt-md-5">
    <!-- Formulário de Solicitação de E-mail para Redefinição -->
    <div class="card container-fluid col-12 mx-auto">
        <h5 class="card-header fs-1 p-3 text-center">Recuperação de Senha</h5>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label for="InputEmail" class="form-label fs-3 fw-bold">Insira o endereço de e-mail associado à conta</label>
                <input class="form-control fs-3 p-3" id="InputEmail" type="email" name="email" placeholder="Digite o endereço de e-mail" required autofocus>

                <div class="text-end">
                    <button type="submit" class="mt-3 fs-4 text-light p-3 w-25 rounded border-0">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Formulário de Redefinição de Senha com Token -->
    <div class="card container-fluid col-12 mx-auto mt-4">
        <h5 class="card-header fs-1 p-3 text-center">Crie uma nova senha</h5>
        <div class="card-body">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ request()->route('token') }}">

                <label for="InputNewPassword" class="form-label fs-3 fw-bold">Nova Senha</label>
                <input class="form-control fs-3 p-3" id="InputNewPassword" type="password" name="password" placeholder="Digite a nova senha" required>

                <label for="InputRepeatNewPassword" class="form-label fs-3 fw-bold">Repita a Nova Senha</label>
                <input class="form-control fs-3 p-3" id="InputRepeatNewPassword" type="password" name="password_confirmation" placeholder="Repita a nova senha" required>

                <div class="text-end">
                    <button type="submit" class="mt-3 fs-4 text-light p-3 w-25 rounded border-0">Confirmar</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
