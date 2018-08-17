<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<li class="comments__item {{ $class }}">
    <div class="comments__inner">
        <header class="comment__header">
            <div class="comment__author">
                <figure class="comment__author-avatar">
                    {{----}}
                    <a href="#"><img src="{{asset(isset($thread->latestMessage->user->avatar) ? asset('images/avatars/'.$thread->latestMessage->user->avatar) : asset('images/default_avatar.png'))}}"></a>
                </figure>
                <div class="comment__author-info">
                    <a href="#"><h5 class="comment__author-name">{{ $thread->participantsString(Auth::id()) }}</h5></a>
                   {{-- <time class="comment__post-date" datetime="2016-08-23">Prije 3 dana</time> --}}
                    <time class="comment__post-date" >({{ $thread->userUnreadMessagesCount(Auth::id()) }} nepročitanih)</time>
                </div>
            </div>
            <div class="comment__reply">
                <a href="{{ route('messages.show', $thread->id) }}" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-reply"></i></a>
{{--
                <a href="#" class="comment__reply-link btn btn-link btn-messages"><i class="fa fa-trash-o"></i></a>
--}}
            </div>
        </header>
        <div class="comment__body">
            <a href="{{ route('messages.show', $thread->id) }}">
                Poruka: {{ $thread->latestMessage->body }}
            </a>
        </div>
    </div>
</li>