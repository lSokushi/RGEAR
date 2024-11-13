<form action="{{ route('developers.update', $developer->id) }}" method="POST">
    @csrf
    @method('PUT')
<div>
<label for="name">Nome:</label>
<input type="text" name="name" value="{{ old('name', $developer->name) }}" required>
</div>
<div>
<label for="email">Email:</label>
<input type="email" name="email" value="{{ old('email', $developer->email) }}" required>
</div>
<div>
<label for="specialty">Especialidade:</label>
<input type="text" name="specialty" value="{{ old('specialty', $developer->specialty) }}">
</div>
<button type="submit">Atualizar</button>
</form>