@extends('layout.app')

@section('content')
    <!-- ***** About Us Page ***** -->
    <div class="page-heading-shows-events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Shows & Events</h2>
                    <span>Check out upcoming and past shows & events.</span>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="about-upcoming-shows">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Welcome to {{ $club->name }}</h2>

                    <p>{{ $club->description }}</p>
                </div>

                <div class="col-lg-3">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <div class="next-shows">
                                <h4><i class="fa fa-clock-o"></i> Get The Next Show Tickets</h4>
                                <ul>
                                    @foreach ($events as $event)
                                        @livewire('small-get-the-next-show-ticket', [
                                            'eventName' => $event->name,
                                            'eventDate' => $event->formattedDate1,
                                            'eventTime' => '08:30 AM - 11:00 PM',
                                            'ticketRoute' => '#',
                                        ])
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>

    {{--  --}}

    <div class="also-like">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Meet Our Members...</h2>
                </div>
                @foreach ($event->club->clubMembers as $members)
                    @livewire('small-you-might-also-like', [
                        // 'eventImage' => $members->image,
                        'eventImage' => 'front/images/icon-person.png',
                        'eventDateRange' => $members->email,
                        'eventName' => $members->name,
                        //  'eventDetailsRoute' => 'event-details',
                        'eventDetailsRoute' => '#',
                        'ticketDetailsRoute' => '#',
                    ])
                @endforeach

            </div>
        </div>
    </div>
@endsection
