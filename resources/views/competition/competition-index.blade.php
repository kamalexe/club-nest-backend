@extends('layout.app')

@section('content')
    @livewireStyles
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Competitions</h2>
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
                        <h2>Competitions Listing</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    @if ($competitions->isEmpty())
                        <p class="text-center">No competitions found.</p>
                    @else
                        <ul>
                            @foreach ($competitions as $competition)
                                @livewire('competition-card', ['competition' => $competition])
                            @endforeach
                        </ul>
                    @endif
                </div>
                <!-- Pagination Links -->
                <div class="col-lg-12">
                    <div class="pagination">
                        {{ $competitions->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
