<div class="col-lg-4 mt-4">
    <div class="event-item">
        <div class="thumb">
            <a href="{{ route('event-details') }}">
                <img src="{{ $eventImage }}" alt="">
            </a>
        </div>
        <div class="down-content">
            <a href="{{ route('event-details') }}">
                <h4>{{ $eventName }}</h4>
            </a>
            <ul>
                <li><i class="fa fa-clock-o"></i> {{ $eventTime }}</li>
                <li><i class="fa fa-map-marker"></i> {{ $eventLocation }}</li>
            </ul>
        </div>
    </div>
</div>
