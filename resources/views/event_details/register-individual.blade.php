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
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <h4>Enter your individual detail</h4>
                    </div>
                    <div class="contact-form">
                        <form id="contact"
                            action="{{ route('register.store.individual', ['competition' => $competition->id]) }}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="competition_id" value="{{ $competition->id }}">

                            <div class="row">
                                <!-- Name -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name*"
                                            required>
                                    </fieldset>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="email" type="email" id="email" placeholder="Your Email*"
                                            required>
                                    </fieldset>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" id="phone" placeholder="Phone Number*"
                                            required>
                                    </fieldset>
                                </div>

                                <!-- Course (select) -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select name="course" id="course" required>
                                            <option value="" disabled selected>Select Course*</option>
                                            @foreach (\App\Semester::all() as $semester)
                                                <option value="{{ $semester }}">{{ $semester }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <!-- Subject (Branch select) -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select name="subject" id="subject" required>
                                            <option value="" disabled selected>Select Branch*</option>
                                            @foreach (\App\Branch::all() as $branch)
                                                <option value="{{ $branch }}">{{ $branch }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <!-- Submit -->
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="main-dark-button">
                                            Submit Request
                                        </button>
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
