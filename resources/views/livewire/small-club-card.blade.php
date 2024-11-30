<div class="col-lg-4">
    <div class="ticket-item">
        <div class="thumb">
            <img src="{{ asset($image) }}" alt="{{ $name }}" class="img-fluid">
        </div>
        <div class="down-content">
            <span>We hosted {{ $eventCount }} event</span>
            <h4>{{ $name }}</h4>
            <ul>
                <li><i class="fa fa-user"></i> <span> Incharge:</span> {{ $incharge }}</li>
                <li><i class="fa fa-users"></i><span> Members:</span> {{ $memberCount }}</li>
            </ul>
            <div class="main-dark-button">
                <a href="#" class="btn btn-primary">Check Out</a>
            </div>
        </div>
    </div>
</div>
