<style>
    .max-lines {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
        -webkit-line-clamp: 2;
        text-overflow: ellipsis;
    }
</style>

<li>
    <div class="row">
        <div class="col-lg-3">
            <div class="title">
                <h4 class="max-lines">{{ $label }}</h4>
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
                <a href="{{ $urlPath }}">Purchase Tickets</a>
            </div>
        </div>
    </div>
</li>
