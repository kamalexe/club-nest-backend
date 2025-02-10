<div class="ticket-details-page">
    @php
        use App\EventType;

        $routes = match ($event->event_type) {
            EventType::WORKSHOP => [
                'route' => 'register.workshop.individual', // Store only the route name
                'label' => 'Join Workshop ',
            ],
            default => [
                'route' => 'show.showCompetition.list',
                'label' => 'Join competition',
            ],
        };

    @endphp
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-image">
                    <img src="{{ asset('front/images/about-map-image.jpg') }}" alt="{{ $event->image }}"
                        class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{ $event->name }}</h4>
                    <span>Event Type: {{ $event->event_type }}</span>
                    <ul>
                        <li><i class="fa fa-clock-o"></i> {{ $event->day_name }} {{ $event->formattedTimeRange }}
                        </li>
                        <li><i class="fa fa-info-circle"></i> {{ $event->description }}</li>
                        <li><i class="fa fa-map-marker"></i> {{ $event->location }}</li>
                    </ul>
                    <div class="total">
                        <h4>Total: Free to join</h4>
                        <div class="main-dark-button">


                            {{-- <a href="#">View More {{ $route['label'] }}</a> --}}
                            <a href="{{ route($routes['route'], ['event' => $event->id]) }}">{{ $routes['label'] }}</a>
                        </div>
                    </div>
                    <div class="warn">
                        <p>*You Can Only Buy 10 Tickets For This Show</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
