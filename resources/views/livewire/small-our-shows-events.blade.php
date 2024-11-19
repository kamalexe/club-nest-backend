<div class="col-lg-12">
    <div class="event-item">
        <div class="row">
            <div class="col-lg-4">
                <div class="left-content">
                    <h4>{{ $eventName }}</h4>
                    <p>{{ $eventDescription }}</p>
                    <div class="main-dark-button">
                        <a href="{{ route($eventDetailsRoute) }}">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="thumb">
                    <img src="{{ asset($eventImage) }}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <ul>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            <h6>{{ $eventDate }}</h6>
                        </li>
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <span>{{ $eventLocation }}</span>
                        </li>
                        <li>
                            <i class="fa fa-users"></i>
                            <span>{{ $eventGuests }} Total Guests Attending</span>
                        </li>
                    </ul>
                    <div class="main-dark-button">
                        <a href="{{ route($ticketPurchaseRoute) }}">Purchase Tickets</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
