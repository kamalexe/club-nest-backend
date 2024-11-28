<!-- resources/views/home.blade.php -->
@extends('layout.app')

@section('content')
    <!-- ***** About Us Page ***** -->
    <div class="page-heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Radio City Musical Hall</h2>
                    <span>September 24-28, 2021 in Rio de Janeiro</span>
                </div>
            </div>
        </div>
    </div>

    <div class="about-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-image">
                        <img src="{{ asset('front/images/about-image.jpg') }}" alt="party time">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <div class="about-map-image">
                            <img src="{{ asset('front/images/about-map-image.jpg') }}" alt="party location">
                        </div>
                        <div class="down-content">
                            <h4>Radio City Musical Hall</h4>
                            <ul>
                                <li>August 24 Friday</li>
                                <li>09:30 AM - 07:00 PM</li>
                            </ul>
                            <span><i class="fa fa-ticket"></i> Tickets Starting From $34.00</span>
                            <div class="main-dark-button">
                                <a href="#">Ticket Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-upcoming-shows">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>About The Upcoming Show</h2>
                    <p>
                    <p>ArtXibition Event Template is brought to you by Tooplate website and it included total 7 HTML pages.
                        These are <a href="/">Homepage</a>, <a href="{{ route('about') }}">About</a>,
                        <a href="{{ route('rent-venue') }}">Rent a venue</a>, <a href="{{ route('shows-events') }}">shows
                            &amp;
                            events</a>,
                        <a href="{{ route('event-details') }}">event details</a>, <a
                            href="{{ route('tickets.index') }}">tickets</a>, and <a href="#">ticket
                            details</a>.
                        You can feel free to modify any page as you like. If you have any question, please visit our <a
                            href="https://www.tooplate.com/contact" target="_blank">Contact page</a>.
                    </p>
                    </p>
                    <h4>Items That Are Restricted</h4>
                    <ul>
                        <li>* Flash Cameras</li>
                        <li>* Food & Drinks</li>
                        <li>* Any kind of flashy objects</li>
                    </ul>
                    <h4>Directions & Car Parking</h4>
                    <p>Art party vegan mixtape before they sold out raclette, cliche banh mi mumblecore ugh hell of. Art
                        party kene
                        ugh umami, readymade tbh small batch austin distillery aesthetic.Shoreditch narwhal livers edge
                        actually godar
                        affogato sartorial waistcoat ugh raw denim stumptown.
                    </p>
                    <div class="text-button">
                        <a href="{{ route('event-details') }}">Need Directions? <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="next-shows">
                        <h4><i class="fa fa-clock-o"></i> Get The Next Show Tickets</h4>
                        <ul>
                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Copacabana Festival',
                                'eventDate' => 'Sep 24 Fri',
                                'eventTime' => '08:30 AM - 11:00 PM',
                                'ticketRoute' => 'ticket-details',
                            ])

                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Rock Music Festival',
                                'eventDate' => 'Sep 22 Wed',
                                'eventTime' => '11:00 AM - 09:00 PM',
                                'ticketRoute' => 'ticket-details',
                            ])

                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Water Splash Festival',
                                'eventDate' => 'July 18 Friday',
                                'eventTime' => '10:00 AM - 11:00 PM',
                                'ticketRoute' => 'ticket-details',
                            ])
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="also-like">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>You Might Also Like...</h2>
                </div>

                @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-01.jpg',
                    'eventDateRange' => 'Sept 10 to 14, 2021',
                    'eventName' => 'Wonder Land Music and Arts Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => 'ticket-details',
                ])
                @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-02.jpg',
                    'eventDateRange' => 'Oct 11 to 16, 2021',
                    'eventName' => 'Big Water Splashing Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

                @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-03.jpg',
                    'eventDateRange' => 'Nov 10 to 18, 2021',
                    'eventName' => 'Tiger Dance Hip Hop Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

            </div>
        </div>
    </div>
@endsection
