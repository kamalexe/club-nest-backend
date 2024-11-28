@extends('layout.app')

@section('content')
    <!-- ***** About Us Page ***** -->
    <div class="page-heading-shows-events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <h2>Tickets On Sale Now!</h2> --}}
                    <h2>{{ $event->club ? $event->club->name : 'No Club Assigned' }}</h2>
                    <span>Check out upcoming and past shows & events and grab your ticket right now.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="ticket-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="left-image">

                        <img src="{{ asset('front/images/about-map-image.jpg') }}" alt={{ $event->image }}
                            class="img-fluid w-100">
                        {{-- <img src={{ $event->image }} alt={{ $event->image }} class="img-fluid w-100"> --}}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="right-content">
                        <h4>{{ $event->name }}</h4>

                        <span>{{ $event->tickets->sum('tickets_available') }} Tickets still available</span>

                        <ul>
                            {{-- <li><i class="fa fa-clock-o"></i> Thursday 18:00 to 22:00</li> --}}
                            <li>
                                <i class="fa fa-clock-o"></i>{{ $event->day_name }} {{ $event->date }}
                            </li>
                            <li><i class="fa fa-map-marker"></i>{{ $event->description }}
                            </li>
                        </ul>
                        <div class="quantity-content">
                            <div class="left-content">
                                <h6>Standard Ticket</h6>
                                <p>$ {{ $event->tickets->sum('price') }} per ticket</p>
                            </div>
                            <div class="right-content">
                                <div class="quantity buttons_added">
                                    <input type="button" value="-" class="minus"><input type="number" step="1"
                                        min="1" max="" name="quantity" value="1" title="Qty"
                                        class="input-text qty text" size="4" pattern="" inputmode=""><input
                                        type="button" value="+" class="plus">
                                </div>
                            </div>
                        </div>
                        <div class="total">
                            <h4>Total: $210.00</h4>
                            <div class="main-dark-button"><a href="https://www.paytmbank.com/">Purchase Tickets</a></div>
                        </div>
                        <div class="warn">
                            <p>*You Can Only Buy 10 Tickets For This Show</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div>
        <div class="page-heading-about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>{{ $event->club->name }}</h2>
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
                            <img src="http://127.0.0.1:8000/front/images/about-image.jpg" alt="party time">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        @if ($event->club && $event->club->members->isNotEmpty())
                            <div class="right-content">
                                <div class="about-map-image">
                                    <img src="{{ asset('front/images/about-map-image.jpg') }}" alt="party location">

                                    {{-- <img src="{{ $event->club->inchargeMember()->image }}" alt="party location"> --}}
                                </div>
                                <div class="down-content">
                                    <h4>{{ $event->club->inchargeMember()->name }}</h4>
                                    <ul>
                                        <li>{{ $event->club->inchargeMember()->email }}</li>
                                        <li>{{ $event->club->inchargeMember()->post }}</li>
                                    </ul>
                                </div>
                            </div>
                        @else
                            <div class="right-content">
                                <h4>No Incharge Found</h4>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="also-like">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Meet Our Members...</h2>
                </div>
                @foreach ($event->club->clubMembers as $members)
                    @livewire('small-you-might-also-like', [
                        // 'eventImage' => $members->image,
                        'eventImage' => 'front/images/about-map-image.jpg',
                        'eventDateRange' => $members->email,
                        'eventName' => $members->name,
                        //  'eventDetailsRoute' => 'event-details',
                        'eventDetailsRoute' => '#',
                        'ticketDetailsRoute' => 'ticket-details',
                    ])
                @endforeach

            </div>
        </div>
    </div>
@endsection
