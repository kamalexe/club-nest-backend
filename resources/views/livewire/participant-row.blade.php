{{-- <div class="p-4 border-b">
    <h1 class="text-lg font-semibold">{{ $participant->branch }}</h1>
</div>
 --}}
<li>
    <div class="row">
        <div class="col-lg-4">
            <div class="title">
                <h4 class="max-lines">{{ $participant->name }}</h4>
                <span>{{ $participant->course }}</span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="time">
                {{-- <span><i class="fa fa-envelope"></i> {{ $participant->email }} </span><br>
                <span><i class="fa fa-phone"></i> {{ $participant->phone }} </span> --}}
                <span><i class="fa fa-envelope"></i> ******@****.com</span><br>
                <span><i class="fa fa-phone"></i> +91 ********** </span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="place">
                <span><i class="fa fa-graduation-cap"></i> {{ $participant->branch }}</span><br>
                <span><i class="fa fa-book"></i> {{ $participant->subject ?? 'N/A' }}</span>
            </div>
        </div>
    </div>
</li>
