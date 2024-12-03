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
                        @foreach ($events as $event)
                            @livewire('counter', ['event' => $event])
                        @endforeach
                    </ul>
                </div>
                <!-- Pagination Links -->
                <div class="col-lg-12">
                    <div class="pagination">
                        <!-- Render pagination links -->
                        {{ $events->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
