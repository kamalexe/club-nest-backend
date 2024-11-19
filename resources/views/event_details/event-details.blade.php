@extends('layout.app')

@section('content')
    @livewireStyles
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Event Details</h2>
                    <span>Check out our latest Shows & Events and be part of us.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="shows-events-schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Event Listing</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul>

                        @livewire('counter', [
                            'label' => 'Sunny Hill Festival',
                            'ticketsAvailable' => 140,
                            'eventDate' => 'Sep 16, 2021',
                            'eventTime' => '18:00 to 22:00',
                            'location' => 'Copacabana Beach, Rio de Janeiro',
                        ])


                        @livewire('counter', [
                            'label' => 'Hip Hop Farm',
                            'ticketsAvailable' => 160,
                            'eventDate' => 'Sep 20, 2021',
                            'eventTime' => '18:00 to 22:00',
                            'location' => 'Copacabana Beach, Rio de Janeiro',
                        ])



                        @livewire('counter', [
                            'label' => 'Gala Rock Festival',
                            'ticketsAvailable' => 128,
                            'eventDate' => 'Sep 18, 2021',
                            'eventTime' => '18:00 to 22:00',
                            'location' => 'Copacabana Beach, Rio de Janeiro',
                        ])


                        @livewire('counter', [
                            'label' => 'Balada Music',
                            'ticketsAvailable' => 240,
                            'eventDate' => 'Oct 14, 2021',
                            'eventTime' => '18:00 to 22:00',
                            'location' => 'Copacabana Beach, Rio de Janeiro',
                        ])
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="pagination">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
