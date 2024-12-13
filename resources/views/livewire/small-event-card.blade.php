<li>
    <h5>{{ $event->name }}</h5>
    <span>{{ $event->formattedDateOnly }}<br>{{ $event->time }}</span>
    <div class="icon-button">
        <a href="{{ route('events.show', $event->id) }}">
            <i class="fa fa-shopping-cart"></i>
        </a>
    </div>
</li>
