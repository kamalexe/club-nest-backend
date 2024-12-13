<div class="col-lg-4 mt-4">
    <div class="like-item">
        <div class="thumb">

            <img src="{{ Storage::url($faculty->image) }}" alt="">

            <div class="icons">
                <ul>
                    <span>
                        {{ $faculty->post }}
                    </span>
                </ul>
            </div>
        </div>
        <div class="down-content">
            <h4>{{ $faculty->name }}</h4>
            <span>From department of {{ $faculty->department }}</span>
        </div>
    </div>
</div>
