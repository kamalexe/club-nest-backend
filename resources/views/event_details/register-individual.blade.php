@extends('layout.app')

@section('content')
    @livewireStyles
    <div class="page-heading-rent-venue">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Register for Competition</h2>
                    <span>Register Here as individual for competition {{ $competition->event->name }} </span>
                </div>
            </div>
        </div>
    </div>
    <div class="rent-venue-application">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="heading-text">
                        <h4>Enter your individual detail</h4>
                    </div>
                    <div class="contact-form">
                        <form id="contact"
                            action="{{ route('register.store.individual', ['competition' => $competition->id]) }}"
                            method="post">
                            @csrf
                            <input type="hidden" name="competition_id" value="{{ $competition->id }}">

                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" id="email" placeholder="Your Email*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="course" type="text" id="course" placeholder="Course*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="branch" type="text" id="branch" placeholder="Branch*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subject*"
                                            required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-dark-button">Submit
                                            Request</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @if ($participants->isNotEmpty()) --}}
    <div class="shows-events-schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Participant Listing</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <ul>
                        @foreach ($participants as $participant)
                            @livewire('participant-row', ['participant' => $participant], key($participant->id))
                        @endforeach
                    </ul>
                </div>
                <!-- Pagination Links -->
                <div class="col-lg-12">
                    <div class="pagination">
                        <!-- Render pagination links -->
                        {{-- {{ $events->links('pagination::bootstrap-4') }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @else
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Be first participant to join</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif --}}
@endsection
