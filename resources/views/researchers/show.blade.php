@extends('layouts.app')
 
@section('title', 'Detalhes do Developer')
 
@section('content')
<h1>Detalhes do Developer</h1>
 
    <p><strong>Nome:</strong> {{ $developer->name }}</p>
<p><strong>Email:</strong> {{ $developer->email }}</p>
<p><strong>Especialidade:</strong> {{ $developer->specialty ?? 'Não especificada' }}</p>
<p><strong>Criado em:</strong> {{ $developer->created_at->format('d/m/Y H:i') }}</p>
<p><strong>Última atualização:</strong> {{ $developer->updated_at->format('d/m/Y H:i') }}</p>
 
    <a href="{{ route('developers.edit', $developer->id) }}">Editar</a>
<form action="{{ route('developers.destroy', $developer->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
<button type="submit">Excluir</button>
</form>
<br><br>
<a href="{{ route('developers.index') }}">Voltar para a lista de developers</a>
@endsection