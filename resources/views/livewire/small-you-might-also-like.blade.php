<div class="col-lg-4 mt-4">
    <div class="like-item">
        <div class="thumb">
            <a href="{{ $this->eventDetailsRoute }}">
                <img src="{{ asset($this->eventImage) }}" alt="">
            </a>
            <div class="icons">
                <ul>
                    <li><a href="{{ $this->eventDetailsRoute }}"><i class="fa fa-arrow-right"></i></a></li>
                    <li><a href="{{ $this->ticketDetailsRoute }}"><i class="fa fa-ticket"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="down-content">
            <span>{{ $this->eventDateRange }}</span>
            <a href="{{ $this->eventDetailsRoute }}">
                <h4>{{ $this->eventName }}</h4>
            </a>
        </div>
    </div>
</div>
