<li>
    @php
        use App\CompetitionType;

        $routes = match ($competition->competition_type) {
            CompetitionType::INDIVIDUAL => [['route' => 'register.individual', 'label' => 'Register as individual']],
            CompetitionType::TEAM => [['route' => 'register.team', 'label' => 'Register as team']],
            CompetitionType::BOTH => [
                ['route' => 'register.individual', 'label' => 'Register as individual'],
                ['route' => 'register.team', 'label' => 'Register as team'],
            ],
            default => [],
        };
        $bothBtn = CompetitionType::BOTH === $competition->competition_type ? 'col-lg-2' : 'col-lg-3';

    @endphp
    <div class="row">
        <div class="col-lg-3">
            <div class="title">
                <h4 class="max-lines">{{ $competition->event->name }}</h4>
                <span>{{ $competition->event->max_capacity }} Tickets Available</span>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="time">
                <span><i class="fa fa-clock-o"></i> {{ $competition->event->start_date }} <br>
                    {{ $competition->duration }}</span>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="place">
                <span><i class="fa fa-map-marker"></i> {{ $competition->event->location }}</span>
            </div>
        </div>

        @foreach ($routes as $route)
            <div class={{ $bothBtn }}>
                <div class="main-dark-button">
                    <a
                        href="{{ route($route['route'], ['competition' => $competition->id]) }}">{{ $route['label'] }}</a>
                </div>
            </div>
        @endforeach



    </div>
</li>
