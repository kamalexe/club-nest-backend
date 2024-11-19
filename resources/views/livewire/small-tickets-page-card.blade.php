<div class="col-lg-4">
    <div class="ticket-item">
        <div class="thumb">
            <img src="{{ asset($image) }}" alt="">
            <div class="price">
                <span>1 ticket<br>from <em>${{ $price }}</em></span>
            </div>
        </div>
        <div class="down-content">
            <span>There Are {{ $ticketsLeft }} Tickets Left For This Show</span>
            <h4>{{ $eventName }}</h4>
            <ul>
                <li><i class="fa fa-clock-o"></i> {{ $eventTime }}</li>
                <li><i class="fa fa-map-marker"></i> {{ $eventLocation }}</li>
            </ul>
            <div class="main-dark-button">
                <a href="{{ route($ticketDetailsRoute) }}">Purchase Tickets</a>
            </div>
        </div>
    </div>
</div>
