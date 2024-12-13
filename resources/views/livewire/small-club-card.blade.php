<div class="col-lg-4">
    <div class="ticket-item">
        <div class="thumb">
            <img src="{{ Storage::url($club->image) }}" alt="{{ $club->image }}" class="img-fluid">

        </div>
        <div class="down-content">
            <span>We hosted {{ $club->events->count() }} event</span>
            <h4>{{ $club->name }}</h4>
            <ul>
                {{-- <li><i class="fa fa-user"></i> <span> Incharge:</span> {{ $club->inchargeMember->name }}</li> --}}
                <li><i class="fa fa-users"></i><span> Members:</span> {{ $club->clubMembers->count() ?? 0 }}</li>
            </ul>
            <div class="main-dark-button">
                <a href={{ route('club.show', $club->id) }} class="btn btn-primary">Check Out</a>
            </div>
        </div>
    </div>
</div>
