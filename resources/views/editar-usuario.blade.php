<x-dashboard-layout title="Editar Usuário">
    <div class="container mt-4">
        <h1>Editar Usuário</h1>

        <form action="{{ route('user.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo de Usuário</label>
                <select name="type" id="type" class="form-select" required>
                    <option value="Administrador" {{ $user->type == 'Administrador' ? 'selected' : '' }}>Administrador</option>
                    <option value="Supervisor" {{ $user->type == 'Supervisor' ? 'selected' : '' }}>Supervisor</option>
                    <option value="Usuario" {{ $user->type == 'Usuario' ? 'selected' : '' }}>Usuário</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="{{ route('user.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</x-dashboard-layout>
