@extends('layout.app')
@section('content')
    <!-- ***** About Us Page ***** -->
    <div class="page-heading-shows-events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tickets On Sale Now!</h2>
                    <span>Check out upcoming and past shows & events and grab your ticket right now.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="tickets-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-box">
                        <form id="subscribe" action="" method="get">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="search-heading">
                                        <h4>Sort The Upcoming Shows & Events By:</h4>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <select value="month">
                                                <option value="month">Month</option>
                                                <option name="June" id="June">June</option>
                                                <option name="July" id="July">July</option>
                                                <option name="August" id="August">August</option>
                                                <option name="September" id="September">September</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select value="location">
                                                <option value="location">Location</option>
                                                <option name="Brazil" id="Brazil">Brazil</option>
                                                <option name="Europe" id="Europe">Europe</option>
                                                <option name="US" id="US">US</option>
                                                <option name="Asia" id="Asia">Asia</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <select value="month">
                                                <option value="month">Price</option>
                                                <option name="min" id="min">$0 - $50</option>
                                                <option name="standard" id="standard">$50 - $100</option>
                                                <option name="hight" id="hight">$100 - $200</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <fieldset>
                                                <button type="submit" id="form-submit"
                                                    class="main-dark-button">Submit</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="heading">
                        <h2>Tickets Page</h2>
                    </div>
                </div>


                @livewire('small-tickets-page-card', [
                    'image' => 'front/images/ticket-01.jpg',
                    'price' => 45,
                    'ticketsLeft' => 200,
                    'eventName' => 'Golden Festival',
                    'eventTime' => 'Sunday: 06:00 PM to 09:00 PM',
                    'eventLocation' => '789 Copacabana Beach, Rio de Janeiro',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

                @livewire('small-tickets-page-card', [
                    'image' => 'front/images/ticket-02.jpg',
                    'price' => 45,
                    'ticketsLeft' => 200,
                    'eventName' => 'Golden Festival',
                    'eventTime' => 'Sunday: 06:00 PM to 09:00 PM',
                    'eventLocation' => '789 Copacabana Beach, Rio de Janeiro',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

                @livewire('small-tickets-page-card', [
                    'image' => 'front/images/ticket-03.jpg',
                    'price' => 65,
                    'ticketsLeft' => 260,
                    'eventName' => 'Water Splash Festival',
                    'eventTime' => 'Tuesday: 07:00 PM to 11:00 PM',
                    'eventLocation' => '456 Copacabana Beach, Rio de Janeiro',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

                @livewire('small-tickets-page-card', [
                    'image' => 'front/images/ticket-04.jpg',
                    'price' => 20,
                    'ticketsLeft' => 340,
                    'eventName' => 'Tiger Festival',
                    'eventTime' => 'Thursday: 06:40 PM to 11:40 PM',
                    'eventLocation' => '123 Copacabana Beach, Rio de Janeiro',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

                @livewire('small-tickets-page-card', [
                    'image' => 'front/images/ticket-05.jpg',
                    'price' => 30,
                    'ticketsLeft' => 420,
                    'eventName' => 'Woodland Festival',
                    'eventTime' => 'Wednesday: 06:00 PM to 09:00 PM',
                    'eventLocation' => '1122 Copacabana Beach, Rio de Janeiro',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

                @livewire('small-tickets-page-card', [
                    'image' => 'front/images/ticket-06.jpg',
                    'price' => 40,
                    'ticketsLeft' => 520,
                    'eventName' => 'Winter Festival',
                    'eventTime' => 'Saturday: 06:00 PM to 09:00 PM',
                    'eventLocation' => '220 Copacabana Beach, Rio de Janeiro',
                    'ticketDetailsRoute' => 'ticket-details',
                ])

            </div>
        </div>
    </div>
@endsection
