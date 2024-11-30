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
                    <h2>Welcome to Club-Nest IET Khandari</h2>

                    <p>CGreetings and welcome to Club-Nest, the vibrant hub of innovation and creativity within the IET
                        Khandari community! As an integral part of the Institution of Engineering and Technology, Khandari
                        Chapter, Club-Nest is where passion meets technology, and ideas take flight.
                    </p>

                    <h4>What We Offer</h4>
                    <ul>
                        <li>* Innovation Workshops</li>
                        <li>* Tech Talks and Seminars</li>
                        <li>* Project Collaborations</li>
                        <li>* Networking Opportunities</li>
                    </ul>
                    <h4>Our Vision</h4>
                    <p>Club-Nest envisions a future where every student is empowered to think critically, innovate
                        fearlessly, and contribute meaningfully to the world of technology. We strive to create an inclusive
                        community that nurtures talent, celebrates diversity, and prepares students for success in their
                        engineering careers.
                    </p>
                    <div class="text-button">
                        <a href="https://maps.app.goo.gl/mb1yCEZbDiKE28MU9">Need Directions? <i
                                class="fa fa-arrow-right"></i></a>
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
                                'ticketRoute' => '#',
                            ])

                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Rock Music Festival',
                                'eventDate' => 'Sep 22 Wed',
                                'eventTime' => '11:00 AM - 09:00 PM',
                                'ticketRoute' => '#',
                            ])

                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Water Splash Festival',
                                'eventDate' => 'July 18 Friday',
                                'eventTime' => '10:00 AM - 11:00 PM',
                                'ticketRoute' => '#',
                            ])
                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Copacabana Festival',
                                'eventDate' => 'Sep 24 Fri',
                                'eventTime' => '08:30 AM - 11:00 PM',
                                'ticketRoute' => '#',
                            ])

                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Rock Music Festival',
                                'eventDate' => 'Sep 22 Wed',
                                'eventTime' => '11:00 AM - 09:00 PM',
                                'ticketRoute' => '#',
                            ])

                            @livewire('small-get-the-next-show-ticket', [
                                'eventName' => 'Water Splash Festival',
                                'eventDate' => 'July 18 Friday',
                                'eventTime' => '10:00 AM - 11:00 PM',
                                'ticketRoute' => '#',
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
                    <h2>Meet Our Faculty...</h2>
                </div>

                @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-01.jpg',
                    'eventDateRange' => 'Sept 10 to 14, 2021',
                    'eventName' => 'Wonder Land Music and Arts Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => '#',
                ])
                @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-02.jpg',
                    'eventDateRange' => 'Oct 11 to 16, 2021',
                    'eventName' => 'Big Water Splashing Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => '#',
                ])

                @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-03.jpg',
                    'eventDateRange' => 'Nov 10 to 18, 2021',
                    'eventName' => 'Tiger Dance Hip Hop Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => '#',
                ]) @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-02.jpg',
                    'eventDateRange' => 'Oct 11 to 16, 2021',
                    'eventName' => 'Big Water Splashing Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => '#',
                ])

                @livewire('small-you-might-also-like', [
                    'eventImage' => 'front/images/like-03.jpg',
                    'eventDateRange' => 'Nov 10 to 18, 2021',
                    'eventName' => 'Tiger Dance Hip Hop Festival',
                    'eventDetailsRoute' => 'event-details',
                    'ticketDetailsRoute' => '#',
                ])

            </div>
        </div>
    </div>
@endsection
