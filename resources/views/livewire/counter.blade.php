<li>
    <div class="row">
        <div class="col-lg-3">
            <div class="title">
                <h4>{{ $label }}</h4>
                <h4>{{ $eventName }}</h4>
                <span>{{ $ticketsAvailable }} Tickets Available</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="time">
                <span><i class="fa fa-clock-o"></i> {{ $eventDate }}<br>{{ $eventTime }}</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="place">
                <span><i class="fa fa-map-marker"></i> {{ $location }}</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="main-dark-button">
                <a href="{{ route('ticket-details') }}">Purchase Tickets</a>
            </div>
        </div>
    </div>
</li>
