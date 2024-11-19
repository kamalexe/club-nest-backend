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
                                            <a href="{{ route('ticket-details') }}">Purchase Tickets</a>
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
                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Monkey Dance Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-01.jpg',
                                                    'eventDate' => 'July 14 Friday 08:30 AM - 09:30 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 450,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])
                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Water Splash Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-04.jpg',
                                                    'eventDate' => 'April 24 Friday 12:00 AM - 12:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 528,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])

                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Sunny Hill Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-01.jpg',
                                                    'eventDate' => 'April 24 Friday 12:00 AM - 12:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 528,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])
                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Sunny Hill Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-02.jpg',
                                                    'eventDate' => 'April 24 Friday 12:00 AM - 12:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 528,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])
                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'New Rock Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-02.jpg',
                                                    'eventDate' => 'June 12 Friday 09:00 AM - 09:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 360,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])


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
                                            <div class="row">

                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Water Splash Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-04.jpg',
                                                    'eventDate' => 'April 24 Friday 12:00 AM - 12:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 528,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])

                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Sunny Hill Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-01.jpg',
                                                    'eventDate' => 'April 24 Friday 12:00 AM - 12:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 528,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])
                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Sunny Hill Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-02.jpg',
                                                    'eventDate' => 'April 24 Friday 12:00 AM - 12:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 528,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])
                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'New Rock Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-02.jpg',
                                                    'eventDate' => 'June 12 Friday 09:00 AM - 09:00 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 360,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])
                                                @livewire('small-our-shows-events', [
                                                    'eventName' => 'Monkey Dance Festival',
                                                    'eventDescription' => 'Lorem ipsum dolor sit amet, consectetur do adipiscing eliterirt sed eiusmod alori...',
                                                    'eventImage' => 'front/images/event-page-01.jpg',
                                                    'eventDate' => 'July 14 Friday 08:30 AM - 09:30 PM',
                                                    'eventLocation' => 'Copacabana Beach, Rio de Janeiro',
                                                    'eventGuests' => 450,
                                                    'eventDetailsRoute' => 'event-details',
                                                    'ticketPurchaseRoute' => 'ticket-details',
                                                ])
                                            </div>
                                        </div>
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
