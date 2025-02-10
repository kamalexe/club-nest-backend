@extends('layout.app')

@section('content')
    @livewireStyles
    <div class="page-heading-rent-venue">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Register for Competition</h2>
                    <span>Register Here as team for competition {{ $competition->event->name }} </span>
                </div>
            </div>
        </div>
    </div>
    <div class="rent-venue-application">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="heading-text">
                        <h4>Enter your team detail</h4>
                    </div>
                    <div class="contact-form">
                        <form id="team_registration" action="{{ route('register.store.team') }}" method="post">
                            @csrf
                            <div class="row">
                                <!-- Team Name -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="team_name" type="text" id="team_name" placeholder="Team Name*"
                                            required>
                                    </fieldset>
                                </div>

                                <!-- Leader Name -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="leader_name" type="text" id="leader_name" placeholder="Leader Name*"
                                            required>
                                    </fieldset>
                                </div>

                                <!-- Leader Email -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="leader_email" type="email" id="leader_email"
                                            placeholder="Leader Email*" required>
                                    </fieldset>
                                </div>

                                <!-- Leader Phone -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="leader_phone" type="text" id="leader_phone"
                                            placeholder="Leader Phone*" required>
                                    </fieldset>
                                </div>

                                <!-- Leader Semester -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select name="leader_semester" id="leader_semester" required>
                                            <option value="" disabled selected>Select Semester*</option>
                                            @foreach (\App\Semester::all() as $semester)
                                                <option value="{{ $semester }}">{{ $semester }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <!-- Leader Branch -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <select name="leader_branch" id="leader_branch" required>
                                            <option value="" disabled selected>Select Branch*</option>
                                            @foreach (\App\Branch::all() as $branch)
                                                <option value="{{ $branch }}">{{ $branch }}</option>
                                            @endforeach
                                        </select>
                                    </fieldset>
                                </div>

                                <!-- Event -->
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input readonly name="event_id" id="event_id" hidden
                                            value="{{ $competition->event->id }}">
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="{{ $competition->event->name }}*" hidden
                                            value="{{ $competition->event->name }}">
                                    </fieldset>
                                </div>

                                <!-- Submit Button -->
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
@endsection
