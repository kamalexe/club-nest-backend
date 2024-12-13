<style>

</style>
<div class="col-lg-4">
    <div class="venue-item">
        <div class="thumb">
            <img src="{{ Storage::url($club->image) }}" alt={{ $club->name }}>
        </div>
        <div class="down-content">
            <div class="left-content">
                <div class="main-white-button">
                    <a href="{{ route('club.show', $club->id) }}">Purchase Tickets</a>
                </div>
            </div>
            <div class="right-content">
                <h4 class="max-lines" style="-webkit-line-clamp:1">{{ $club->name }}</h4>
                <p class="max-lines" style="-webkit-line-clamp:6">{{ $club->description }}</p>

                <ul>
                    <li><i class="fa fa-sitemap"></i>{{ $club->events->count() }}</li>
                    <li><i class="fa fa-user"></i>{{ $club->members->count() }}</li>
                </ul>
                <div class="price">
                    <span>1 ticket<br>from <em>Free</em></span>
                </div>
            </div>
        </div>
    </div>
</div>
