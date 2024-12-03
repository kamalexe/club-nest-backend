@extends('layout.app')

@section('content')
    <!-- ***** Main Banner Area Start ***** -->

    <div class="main-banner">
        @php
            $date = $recentEvent->date;
            $time = $recentEvent->time;
            $eventDateTime = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', "{$date} {$time}");
            $isEventEnded = $eventDateTime->isPast();
        @endphp
        @if ($recentEvent)
            <div class="counter-content">
                <ul>
                    <li>Days<span id="days"></span></li>
                    <li>Hours<span id="hours"></span></li>
                    <li>Minutes<span id="minutes"></span></li>
                    <li>Seconds<span id="seconds"></span></li>
                </ul>

            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const second = 1000,
                        minute = second * 60,
                        hour = minute * 60,
                        day = hour * 24;

                    // Set countdown date from PHP
                    let countDownDate = new Date("{{ $date }} {{ $time }}").getTime();

                    // Update the countdown every second
                    let x = setInterval(function() {
                        let now = new Date().getTime(),
                            distance = countDownDate - now;

                        document.getElementById('days').innerText = Math.floor(distance / day);
                        document.getElementById('hours').innerText = Math.floor((distance % day) / hour);
                        document.getElementById('minutes').innerText = Math.floor((distance % hour) / minute);
                        document.getElementById('seconds').innerText = Math.floor((distance % minute) / second);

                        // Stop countdown if the event is over
                        if (distance < 0) {
                            clearInterval(x);
                            const eventMessage = {!! json_encode($isEventEnded) !!} ?
                                "The event has ended!" :
                                "The event has started!";
                            document.querySelector('.counter-content').innerHTML =
                                `<p class='h2 text-white'>${eventMessage}</p>`;
                        }
                    }, 1000);
                });
            </script>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        @if ($recentEvent)
                            <div class="next-show">
                                <i class="fa fa-arrow-up"></i>
                                <span>{{ $isEventEnded ? 'Last Show' : 'Next Show' }}</span>
                            </div>
                            <h6>Opening on {{ $recentEvent->formattedDate }}</h6>
                        @endif
                        <h2>{{ $recentEvent ? $recentEvent->name : 'Welcome To Club-Nest' }}</h2>
                        <div class="main-white-button">
                            <a
                                href={{ route('events.show', $recentEvent->id) }}>{{ $isEventEnded ? 'Explore Our Club' : 'Tickets' }}</a>
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
                        <p>ClubNest Event Template is brought to you by Tooplate website and it included total 7 HTML
                            pages.
                            These are <a href="index.html">Homepage</a>, <a href="about.html">About</a>,
                            <a href="#">Rent a venue</a>, <a href="#">shows &amp;
                                events</a>,
                            <a href="event-details.html">event details</a>, <a href="tickets.html">tickets</a>, and <a
                                href="#">ticket details</a>.
                            You can feel free to modify any page as you like. If you have any question, please visit our
                            <a href="https://www.tooplate.com/contact" target="_blank">Contact page</a>.
                        </p>
                        <br>
                        <p>You can use this event template for your commercial or business website. You are not
                            permitted to
                            redistribute this template ZIP file on any template download website. If you need the latest
                            HTML templates, you may visit <a href="https://www.toocss.com/" target="_blank">Too CSS</a>
                            website that features a great collection of templates in different categories.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <h5><i class="fa fa-map-marker"></i> Visit Us</h5>
                        <span>IET Khandari, <br>Agra, Uttar Pradesh<br>India</span>
                        <div class="text-button"><a href="https://maps.app.goo.gl/mb1yCEZbDiKE28MU9">Need Directions? <i
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
                        <h2>Our Popular Nest</h2>
                    </div>
                </div>
                @foreach ($clubs as $club)
                    @livewire('venue-item', ['club' => $club])
                @endforeach
            </div>
        </div>
    </div>


    <!-- *** Coming Events ***-->
    <div class="coming-events">
        <div class="left-button">
            <div class="main-white-button">
                <a href="{{ route('events.index') }}">Popular Events</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach ($discoverMores as $discoverMore)
                    <div class="col-lg-4">
                        <div class="event-item">
                            <div class="thumb">
                                <img src="front/images/event-01.jpg" alt="" loading="lazy">
                            </div>
                            <div class="down-content">
                                <a href="{{ route('events.show', $discoverMore->id) }}">
                                    <h4 class="max-lines" style="-webkit-line-clamp:2">{{ $discoverMore->name }}</h4>
                                </a>
                                <ul>
                                    <li><i class="fa fa-clock-o"></i> {{ $discoverMore->date }}</li>
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
