<div class="card">
    <div class="card-body">
        <i class="fas fa-arrows-alt float-right js-show-map-modal"
           data-lat="{{$post->lat}}"
           data-lng="{{$post->lng}}">
        </i>
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->comments}}</p>
        <p class="card-text">
            <small class="text-muted">
                {{$post->username}}
                ({{ Carbon\Carbon::parse($post->created_at)->format('d-m-y') }})
            </small>
        </p>
    </div>
</div>