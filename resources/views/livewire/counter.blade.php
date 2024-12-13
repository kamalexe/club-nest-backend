<li>
    <div class="row">
        <div class="col-lg-3">
            <div class="title">
                <h4 class="max-lines">{{ $event->name }}</h4>
                <span>{{ $event->max_capacity }} Tickets Available</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="time">
                <span><i class="fa fa-clock-o"></i> {{ $event->start_date }} <br> {{ $event->duration }}</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="place">
                <span><i class="fa fa-map-marker"></i> {{ $event->location }}</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="main-dark-button">
                <a href="{{ route('events.show', $event->id) }}">View in detail</a>
            </div>
        </div>
    </div>
</li>
