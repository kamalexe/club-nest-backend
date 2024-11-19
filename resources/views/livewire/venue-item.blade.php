<div class="col-lg-4">
    <div class="venue-item">
        <div class="thumb">
            <img src="{{ $venueImage }}" alt="">
        </div>
        <div class="down-content">
            <div class="left-content">
                <div class="main-white-button">
                    <a href="{{ route('ticket-details') }}">Purchase Tickets</a>
                </div>
            </div>
            <div class="right-content">
                <h4>{{ $venueName }}</h4>
                <p>{{ $venueDescription }}</p>
                <ul>
                    <li><i class="fa fa-sitemap"></i>{{ $maxCapacity }}</li>
                    <li><i class="fa fa-user"></i>{{ $ticketsSold }}</li>
                </ul>
                <div class="price">
                    <span>1 ticket<br>from <em>${{ $ticketPrice }}</em></span>
                </div>
            </div>
        </div>
    </div>
</div>
