@extends('layout.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="counter-content">
            <ul>
                <li>Days<span id="days"></span></li>
                <li>Hours<span id="hours"></span></li>
                <li>Minutes<span id="minutes"></span></li>
                <li>Seconds<span id="seconds"></span></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        <div class="next-show">
                            <i class="fa fa-arrow-up"></i>
                            <span>Next Show</span>
                        </div>
                        <h6>Opening on Thursday, March 31st</h6>
                        <h2>The Sunny Hill Festival 2022</h2>
                        <div class="main-white-button">
                            <a href="https://www.paytmbank.com/">Purchase Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- *** Owl Carousel Items ***-->
    <div class="show-events-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-show-events owl-carousel">
                        @foreach ($events as $event)
                            <div class="item">
                                <a href="{{ route('events.show', $event->id) }}">
                                    <img src="{{ $event->image }}" alt="{{ $event->name }}" loading="lazy">
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Amazing Venus ***-->
    <div class="amazing-venues">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-content">
                        <h4>Three Amazing Venues for events</h4>
                        <p>ArtXibition Event Template is brought to you by Tooplate website and it included total 7 HTML
                            pages.
                            These are <a href="index.html">Homepage</a>, <a href="about.html">About</a>,
                            <a href="rent-venue.html">Rent a venue</a>, <a href="shows-events.html">shows &amp; events</a>,
                            <a href="event-details.html">event details</a>, <a href="tickets.html">tickets</a>, and <a
                                href="#">ticket details</a>.
                            You can feel free to modify any page as you like. If you have any question, please visit our <a
                                href="https://www.tooplate.com/contact" target="_blank">Contact page</a>.
                        </p>
                        <br>
                        <p>You can use this event template for your commercial or business website. You are not permitted to
                            redistribute this template ZIP file on any template download website. If you need the latest
                            HTML templates, you may visit <a href="https://www.toocss.com/" target="_blank">Too CSS</a>
                            website that features a great collection of templates in different categories.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <h5><i class="fa fa-map-marker"></i> Visit Us</h5>
                        <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                        <div class="text-button"><a href="show-events-details.html">Need Directions? <i
                                    class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Map ***-->
    <div class="map-image">
        <img src="front/images/map-image.jpg" alt="Maps of 3 Venues" loading="lazy">
    </div>


    <!-- *** Venues & Tickets ***-->
    <div class="venue-tickets">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Popular Clubs</h2>
                    </div>
                </div>
                @foreach ($clubs as $club)
                    @livewire('venue-item', [
                        'venueImage' => $club->image,
                        'venueName' => $club->name,
                        'venueDescription' => $club->description,
                        'ticketsSold' => 799,
                        'maxCapacity' => 2131,
                        'ticketPrice' => 0344,
                        'urlPath' => route('showVenueTicket', $club->id),
                    ])
                @endforeach
            </div>
        </div>
    </div>


    <!-- *** Coming Events ***-->
    <div class="coming-events">
        <div class="left-button">
            <div class="main-white-button">
                <a href="{{ route('event-details') }}">Popular Events</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($discoverMores as $discoverMore)
                    <div class="col-lg-4">
                        <div class="event-item">
                            <div class="thumb">
                                <a href="event-details.html"><img src="front/images/event-01.jpg" alt=""
                                        loading="lazy"></a>
                            </div>
                            <div class="down-content">
                                <a href="{{ route('events.show', $discoverMore->id) }}">
                                    <h4>{{ $discoverMore->name }}</h4>
                                </a>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> {{ $discoverMore->date }}</li>
                                    {{-- <li><i class="fa fa-clock-o"></i> Tuesday: 15:30-19:30</li> --}}
                                    <li><i class="fa fa-map-marker"></i> {{ $discoverMore->location }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
