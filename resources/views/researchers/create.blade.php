<form action="{{ route('developers.store') }}" method="POST">
    @csrf
<div>
<label for="name">Nome:</label>
<input type="text" name="name" required>
</div>
<div>
<label for="email">Email:</label>
<input type="email" name="email" required>
</div>
<div>
<label for="specialty">Especialidade:</label>
<input type="text" name="specialty">
</div>
<button type="submit">Salvar</button>
</form>