<div class="article-box">
  <figure>
    <img src="{{ $image ?? 'https://placehold.co/294x276' }}" alt="Imagem do Artigo" class="image-placeholder">
    <figcaption>{{$caption}}</figcaption>
  </figure>
  <div class="title-cards-art">
    <h2>{{ $title }}</h2>
  </div>
  <p>{{ $summary }}</p>
  <p class="info-cards"><small>{{ $author }} | {{ $updatedAt }}</small></p>
</div>
