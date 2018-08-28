<div class="media">
    <a class="pull-left" href="#">
        <img src="{{ isset($message->user->avatar) ? asset('images/avatars/'.$message->user->avatar) : asset('images/default_avatar.png')}}"
             alt="{{ $message->user->name }}" class="img-circle img-responsive">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            {{--<small>Posted {{ $message->created_at->diffForHumans() }}</small>--}}
            <small>Posted {{ $message->created_at }}</small>
        </div>
    </div>
</div>