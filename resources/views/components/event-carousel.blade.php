<div class="splide" aria-label="Eventos em Destaque">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach ($events as $event)
                <li class="splide__slide">
                    <div class="card-carrosel">
                        <div class="container texto-cards">
                            <h4 class="titulo-artigo">
                                <a href="{{ route('events.show', $event->id) }}">{{ $event->title }}</a>
                            </h4>
                            <p>{{ $event->description }}</p>
                            <p>
                                <small>{{ $event->location }} | 
                                {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</small>
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
