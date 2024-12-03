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

                        <span>{{ $event->max_capacity }} Tickets still available</span>

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
                                <p>$ {{ $event->ticket_price }} per ticket</p>
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
                @foreach ($event->club->clubMembers as $member)
                    @livewire('member-card', [
                        // 'eventImage' => $members->image,
                        // 'eventImage' => 'front/images/about-map-image.jpg',
                        'member' => $member,
                        // 'eventName' => $members->name,
                        // //  'eventDetailsRoute' => 'event-details',
                        // 'eventDetailsRoute' => '#',
                        // 'ticketDetailsRoute' => '#',
                    ])
                @endforeach

            </div>
        </div>
    </div>

    <div class="show-events-carousel also-like">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Discover the Visual Stories</h2>
                </div>
                <div class="col-lg-12">
                    <div class="owl-show-events owl-carousel" style="margin:0%">
                        @foreach ($event->pictures as $picture)
                            <div class="item">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-bs-image="{{ asset($picture->picture) }}">
                                    <img src="{{ asset('front/images/like-01.jpg') }}" alt="{{ $picture->picture }}"
                                        loading="lazy">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel">Event Image</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Modal Image -->
                                <img id="modalImage" src="" alt="Event Image" class="img-fluid">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize Owl Carousel
            $('.owl-show-events').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });

            // JavaScript to handle the modal image change
            const imageLinks = document.querySelectorAll('[data-bs-toggle="modal"]');

            imageLinks.forEach(link => {
                link.addEventListener('click', function() {
                    // Get the image URL from the data-bs-image attribute
                    const imageUrl = this.getAttribute('data-bs-image');
                    // Update the modal image's src
                    const modalImage = document.getElementById('modalImage');
                    modalImage.src = imageUrl;
                });
            });
        });
    </script>
@endsection
