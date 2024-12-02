<div class="col-lg-4 mt-4">
    <div class="like-item">
        <div class="thumb">

            <img src="{{ asset($member->image) }}" alt="">

            <div class="icons">
                <ul>
                    <span>
                        {{ $member->post }}
                    </span>
                </ul>
            </div>
        </div>
        <div class="down-content">
            <h4>{{ $member->name }}</h4>
            <span>You can contact with {{ $member->email }}</span>
        </div>
    </div>
</div>
