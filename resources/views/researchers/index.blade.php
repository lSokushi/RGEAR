@foreach($developers as $developer)
<p>{{ $developer->name }}</p>
<a href="{{ route('developers.edit', $developer->id) }}">Editar</a>
<form action="{{ route('developers.destroy', $developer->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
<button type="submit">Excluir</button>
</form>
@endforeach
<a href="{{ route('developers.create') }}">Adicionar Novo Developer</a>