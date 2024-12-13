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

                        <span>Event Type: {{ $event->event_type->getDetails()['label'] }}</span>

                        <ul>
                            {{-- <li><i class="fa fa-clock-o"></i> Thursday 18:00 to 22:00</li> --}}
                            <li> <i class="fa fa-clock-o"></i>{{ $event->day_name }} {{ $event->formattedTimeRange }}</li>
                            <li><i class="fa fa-info-circle"></i>{{ $event->description }} </li>
                            <li><i class="fa fa-map-marker"></i>{{ $event->location }} </li>

                        </ul>

                        <div class="total">
                            {{-- <h4>Total: $210.00</h4> --}}
                            <div class="main-dark-button">
                                <a href="{{ route($event->event_type->getDetails()['route']) }}">
                                    {{ $event->event_type->getDetails()['button_message'] }}
                                </a>
                            </div>

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
                        <h2>Our Club Incharge</h2>
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

                                    <img src="{{ Storage::url($event->club->inchargeMember()->image) }}" alt=""
                                        loading="lazy">
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
                    @livewire('member-card', ['member' => $member])
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
                    <style>
                        .caption-overlay {
                            display: none;
                            position: absolute;
                            bottom: 0;
                            left: 0;
                            width: 100%;
                            background-color: rgba(0, 0, 0, 0.638);
                            color: rgb(250, 8, 8);
                            padding: 10px;
                            text-align: center;
                            font-size: 14px;
                            opacity: 0;
                            transition: opacity 1s ease;
                        }

                        .item:hover .caption-overlay {
                            display: block;
                            opacity: 1;
                        }
                    </style>
                    <div class="owl-show-events owl-carousel" style="margin:0%">
                        @foreach ($event->pictures as $picture)
                            <div class="item position-relative img-thumbnail border rounded">
                                <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal"
                                    data-bs-image="{{ asset($picture->picture) }}">
                                    <img style="aspect-ratio:1;object-fit:cover"
                                        src="{{ Storage::url($picture->picture) }}"
                                        alt="{{ $picture->picture ?? 'Default Picture' }}" loading="lazy">
                                    <div class="caption-overlay position-absolute bottom-0 start-0 w-100 text-white p-2">
                                        {{ $picture->caption ?? 'No Caption' }}
                                    </div>
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
