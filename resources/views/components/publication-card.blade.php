{{-- resources/views/components/publication-card.blade.php --}}
<div class="publication-card">
    <figure>
        <img src="{{ $image }}" alt="{{ $image_caption }}">
        <figcaption>{{ $image_caption }}</figcaption>
    </figure>
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <p><small>{{ $author }} | Atualizado {{ $updated_at->diffForHumans() }}</small></p>
</div>