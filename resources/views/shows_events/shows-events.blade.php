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

    <div class="shows-events-tabs">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="tabs">
                        <div class="col-lg-12">
                            <div class="heading-tabs">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <ul>
                                            <li><a href='#tabs-1'>Upcoming</a></li>
                                            <li><a href='#tabs-2'>Past</a></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="main-dark-button">
                                            <a href="https://www.paytmbank.com/">Purchase Tickets</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="heading">
                                                <h2>Upcoming</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sidebar">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="heading-sidebar">
                                                            <h4>Sort The Upcoming Shows & Events By:</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="month">
                                                            <h6>Month</h6>
                                                            <ul>
                                                                <li><a href="#">July</a></li>
                                                                <li><a href="#">August</a></li>
                                                                <li><a href="#">September</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="category">
                                                            <h6>Category</h6>
                                                            <ul>
                                                                <li><a href="#">Pop Music</a></li>
                                                                <li><a href="#">Rock Music</a></li>
                                                                <li><a href="#">Hip Hop Music</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="venues">
                                                            <h6>Venues</h6>
                                                            <ul>
                                                                <li><a href="#">Radio City Musical Hall</a></li>
                                                                <li><a href="#">Madison Square Garden</a></li>
                                                                <li><a href="#">Royce Hall</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">

                                            <div class="row">
                                                @if ($upCommingEvents->isEmpty())
                                                    <h1>No upcoming events.</h1>
                                                @else
                                                    @foreach ($upCommingEvents as $event)
                                                        @livewire('small-our-shows-events', [
                                                            'eventName' => $event->name,
                                                            'eventDescription' => $event->description,
                                                            'eventImage' => 'front/images/about-map-image.jpg',
                                                            // 'eventImage' => $event->image,
                                                            'eventDate' => $event->date,
                                                            'eventLocation' => $event->location,
                                                            'eventGuests' => $event->max_capacity,
                                                            'eventDetailsRoute' => 'event-details',
                                                            'ticketPurchaseRoute' => '#',
                                                        ])
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="heading">
                                                <h2>Upcoming</h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sidebar">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="heading-sidebar">
                                                            <h4>Sort The Upcoming Shows & Events By:</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="month">
                                                            <h6>Month</h6>
                                                            <ul>
                                                                <li><a href="#">July</a></li>
                                                                <li><a href="#">August</a></li>
                                                                <li><a href="#">September</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="category">
                                                            <h6>Category</h6>
                                                            <ul>
                                                                <li><a href="#">Pop Music</a></li>
                                                                <li><a href="#">Rock Music</a></li>
                                                                <li><a href="#">Hip Hop Music</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="venues">
                                                            <h6>Venues</h6>
                                                            <ul>
                                                                <li><a href="#">Radio City Musical Hall</a></li>
                                                                <li><a href="#">Madison Square Garden</a></li>
                                                                <li><a href="#">Royce Hall</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-9">

                                            @if ($pastEvents->isEmpty())
                                                <h1>No past events.</h1>
                                            @else
                                                @foreach ($pastEvents as $event)
                                                    @livewire('small-our-shows-events', [
                                                        'eventName' => $event->name,
                                                        'eventDescription' => $event->description,
                                                        'eventImage' => 'front/images/about-map-image.jpg',
                                                        // 'eventImage' => $event->image,
                                                        'eventDate' => $event->date,
                                                        'eventLocation' => $event->location,
                                                        'eventGuests' => $event->max_capacity,
                                                        'eventDetailsRoute' => 'event-details',
                                                    
                                                        'ticketPurchaseRoute' => route('tickets.show', $event->id),
                                                    ])
                                                @endforeach

                                        </div>
                                        @endif
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
