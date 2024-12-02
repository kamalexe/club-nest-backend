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

                            @foreach ($events as $event)
                                @livewire('small-event-card', ['event' => $event])
                            @endforeach


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

                @foreach ($faculties as $faculty)
                    @livewire('small-you-might-also-like', [
                        // 'eventImage' => 'front/images/icon-person.png',
                        'faculty' => $faculty,
                        // 'eventImage' => $faculty->image,
                    
                        // 'eventDateRange' => $faculty->department,
                        // 'eventName' => $faculty->name,
                        // 'eventDetailsRoute' => 'event-details',
                        // 'ticketDetailsRoute' => '#',
                    ])
                @endforeach
            </div>
        </div>
    </div>
@endsection
