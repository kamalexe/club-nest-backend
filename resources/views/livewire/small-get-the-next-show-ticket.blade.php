<li>
    <h5>{{ $eventName }}</h5>
    <span>{{ $eventDate }}<br>{{ $eventTime }}</span>
    <div class="icon-button">
        <a href="{{ route($ticketRoute) }}">
            <i class="fa fa-shopping-cart"></i>
        </a>
    </div>
</li>
