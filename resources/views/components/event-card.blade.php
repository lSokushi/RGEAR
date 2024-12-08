<div class="event-card">
    <h4><a href="{{ route('events.details', $event->id) }}">{{ $event->title }}</a></h4>
    <p>{{ Str::limit($event->description, 100) }}</p>
    <p>
        <small>{{ $event->location }} | {{ \Carbon\Carbon::parse($event->date)->format('d/m/Y') }}</small>
    </p>
</div>
