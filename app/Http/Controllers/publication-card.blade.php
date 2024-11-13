{{-- resources/views/components/publication-card.blade.php --}}
<div class="article-box">
    <figure class="image-placeholder">
        <img src="{{ $image }}" alt="{{ $image_caption }}" />
        <figcaption>{{ $image_caption }}</figcaption>
    </figure>
    <div class="title-cards-art">
        <h2>{{ $title }}</h2>
    </div>
    <p>{{ $description }}</p>
    <p class="info-cards">
        <small>{{ $author }} | {{ $updated_at }}</small>
    </p>
</div>
