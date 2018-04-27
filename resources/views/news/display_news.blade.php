@extends('layouts.app')

@section('content')
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <!-- Header
            ================================================== -->

        <!-- Header / End -->

        <!-- Pushy Panel - Dark -->
        <aside class="pushy-panel pushy-panel--dark">
            <div class="pushy-panel__inner">
                <header class="pushy-panel__header">
                    <div class="pushy-panel__logo">
                        <a href="{{url('/')}}"><img src="{{asset('images/soccer/logo.png')}}" alt="Alchemists"></a>
                    </div>
                </header>
                <div class="pushy-panel__content">

                    <a href="#" class="push-rekreacija btn-social-counter" target="_blank">
                        <div class="btn-social-counter__icon">
                            <i class="fa fa-futbol-o"></i>
                        </div>
                        <h6 class="btn-social-counter__title">SZS Rekreacija</h6>
                    </a>

                    <a href="#" class="push-aplikacije btn-social-counter" target="_blank">
                        <div class="btn-social-counter__icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <h6 class="btn-social-counter__title">SZS Aplikacije</h6>
                    </a>

                    <a href="#" class="push-turizam btn-social-counter" target="_blank">
                        <div class="btn-social-counter__icon">
                            <i class="fa fa-bus"></i>
                        </div>
                        <h6 class="btn-social-counter__title">Sportski turizam</h6>
                    </a>

                </div>
                <a href="#" class="pushy-panel__back-btn"></a>
            </div>
        </aside>
        <!-- Pushy Panel - Dark / End -->


    </div>


    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="content col-md-8">

                    <!-- Article -->
                    <article class="card card--lg post post--single">
                        <div class="card__content no-border">
                            <header class="post__header">
                                <ul class="post__meta meta">
                                    <li class="meta__item meta__item--date"><i class="fa fa-calendar-o"></i>
                                        <time datetime="{{ Carbon\Carbon::parse($novost->created_at)->format('Y-m-d') }}">{{ Carbon\Carbon::parse($novost->created_at)->format('d. F, Y.') }}</time>
                                    </li>
                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes"><i class="meta-like icon-heart"></i> 530
                                    </li>
                                    <li class="meta__item meta__item--comments">18</li>
                                </ul>
                            </header>
                        </div>

                        <figure class="post__thumbnail">
                            @if($novost->slika)
                                <img class="image-responsive-width" src="{{ asset('images/vijesti/galerija/' . $novost->slika) }}" alt="">
                            @else
                                <img class="image-responsive-width" src="{{ asset('images/vijesti/' . 'vijesti-dodaj-sliku.png') }}" alt="">
                            @endif
                        </figure>

                        <div class="card__content">
                            <div class="post__category">
                                <span class="label posts__cat-label">{{ $novost->kategorija->naziv }}</span>
                            </div>
                            <header class="post__header">
                                <h2 class="post__title">{{ $novost->naslov }}</h2>
                            </header>

                            <div class="post__content">
                                {!! $novost->sadrzaj !!}
                            </div>

                        </div>
                    </article>
                    <!-- Article / End -->

                    <!-- Post Sharing Buttons -->
                    <div class="post-sharing">
                        <a href="#" class="btn btn-default btn-facebook btn-icon btn-block"><i
                                    class="fa fa-facebook"></i> <span class="post-sharing__label hidden-xs">Podijeli na Facebook</span></a>
                        <a href="#" class="btn btn-default btn-twitter btn-icon btn-block"><i class="fa fa-twitter"></i>
                            <span class="post-sharing__label hidden-xs">Podijeli na Twitter</span></a>
                        <a href="#" class="btn btn-default btn-gplus btn-icon btn-block"><i
                                    class="fa fa-google-plus"></i> <span class="post-sharing__label hidden-xs">Podijeli na Google+</span></a>
                    </div>
                    <!-- Post Sharing Buttons / End -->


                    <!-- Post Author -->
                    <div class="post-author card card--lg">
                        <div class="card__content">
                            <header class="post-author__header">
                                <figure class="post-author__avatar">
                                    <img src="{{ asset('images/avatars/' . $novost->user->avatar) }}" alt="Post Author Avatar">
                                </figure>
                                <div class="post-author__info">
                                    <h4 class="post-author__name">{{ $novost->user->name }}</h4>
                                    <span class="post-author__slogan">The Alchemists Ninja</span>
                                </div>
                                <ul class="post-author__social-links social-links social-links--btn">
                                    <li class="social-links__item">
                                        <a href="#" class="social-links__link social-links__link--fb"><i
                                                    class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="social-links__item">
                                        <a href="#" class="social-links__link social-links__link--twitter"><i
                                                    class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </header>
                            <div class="post-author__description">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                                sit aspernatur.
                            </div>
                        </div>
                    </div>
                    <!-- Post Author / End -->


                    <!-- Related Posts -->
                    <div class="post-related row">
                        <div class="col-xs-6">
                            <!-- Prev Post -->
                            <div class="card post-related__prev">
                                <div class="card__content">

                                    <!-- Prev Post Links -->
                                    <a href="#" class="btn-nav">
                                        <i class="fa fa-chevron-left"></i>
                                    </a>
                                    <!-- Prev Post Links / End -->

                                    <ul class="posts posts--simple-list">
                                        <li class="posts__item posts__item--category-1">
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">Injuries</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The new eco friendly stadium won a
                                                        Leafy Award in 2016</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">23. Avgust, 2018.</time>
                                            </div>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                            <!-- Prev Post / End -->
                        </div>
                        <div class="col-xs-6">
                            <div class="card post-related__next">
                                <!-- Next Post -->
                                <div class="card__content">

                                    <ul class="posts posts--simple-list">
                                        <li class="posts__item posts__item--category-1">
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">Injuries</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The team is starting a new power
                                                        breakfast regimen</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">23. Avgust, 2018.</time>
                                            </div>
                                        </li>
                                    </ul>

                                    <!-- Next Post Link -->
                                    <a href="#" class="btn-nav">
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                    <!-- Next Post Link / End -->

                                </div>
                                <!-- Next Post / End -->
                            </div>
                        </div>
                    </div>
                    <!-- Related Posts / End -->


                    <!-- Post Comments -->
                    <div class="post-comments card card--lg">
                        <header class="post-commments__header card__header">
                            <h4>Komentari (18)</h4>
                        </header>
                        <div class="post-comments__content card__content">

                            <ul class="comments">
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-9.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Jake Casspon</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">prije 2
                                                        sata
                                                    </time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Odgovori</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore etolor dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco laboris.
                                        </div>
                                    </div>
                                </li>
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-10.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Jennifer Stevens</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">prije 5
                                                        sati
                                                    </time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Odgovori</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt
                                            ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                                            veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                                        </div>
                                    </div>
                                    <ul class="comments--children">
                                        <li class="comments__item">
                                            <div class="comments__inner">
                                                <header class="comment__header">
                                                    <div class="comment__author">
                                                        <figure class="comment__author-avatar">
                                                            <img src="assets/images/samples/avatar-7.jpg" alt="">
                                                        </figure>
                                                        <div class="comment__author-info">
                                                            <h5 class="comment__author-name">The Speedtester</h5>
                                                            <time class="comment__post-date" datetime="2016-08-23">prije
                                                                3 sata
                                                            </time>
                                                        </div>
                                                    </div>
                                                    <div class="comment__reply">
                                                        <a href="#" class="comment__reply-link btn btn-link btn-xs">Odgovori</a>
                                                    </div>
                                                </header>
                                                <div class="comment__body">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                    quae ab illo inventore veritatis et quasi architecto.
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="comments__item">
                                    <div class="comments__inner">
                                        <header class="comment__header">
                                            <div class="comment__author">
                                                <figure class="comment__author-avatar">
                                                    <img src="assets/images/samples/avatar-11.jpg" alt="">
                                                </figure>
                                                <div class="comment__author-info">
                                                    <h5 class="comment__author-name">Marina Universe</h5>
                                                    <time class="comment__post-date" datetime="2016-08-23">prije 5
                                                        sati
                                                    </time>
                                                </div>
                                            </div>
                                            <div class="comment__reply">
                                                <a href="#" class="comment__reply-link btn btn-link btn-xs">Odgovori</a>
                                            </div>
                                        </header>
                                        <div class="comment__body">
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt
                                            ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                                            veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <!-- Comments Pagination -->
                            <nav aria-label="Comments Pavigation" class="post__comments-pagination">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><span>...</span></li>
                                    <li><a href="#">16</a></li>
                                </ul>
                            </nav>
                            <!-- Comments Pagination / End -->

                        </div>
                    </div>
                    <!-- Post Comments / End -->


                    <!-- Post Comment Form -->
                    <div class="post-comment-form card card--lg">
                        <header class="post-comment-form__header card__header">
                            <h4>Ostavi svoj komentar</h4>
                        </header>
                        <div class="post-comment-form__content card__content">
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="input-name">Ime</label>
                                            <input type="text" id="input-name" name="input-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label" for="input-email">E-mail</label>
                                            <input type="email" id="input-email" name="input-email"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="textarea-comment">Sadržaj komentara</label>
                                    <textarea name="textarea-comment" id="textarea-comment" rows="7"
                                              class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block btn-lg">Objavi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Post Comment Form / End -->


                </div>
                <!-- Content / End -->

                <!-- Sidebar -->
                <div id="sidebar" class="sidebar col-md-4">


                    <!-- Widget: Popular News -->
                    <aside class="widget widget--sidebar card widget-popular-posts">
                        <div class="widget__title card__header">
                            <h4>Oznake na vijest</h4>
                        </div>
                        <div class="widget__content card__content">
                            <ul class="posts posts--simple-list">
                                <li class="posts__item posts__item--category-2">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img1-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Sportski objekt</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Bjelašnica</a></h6>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img2-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Sportista</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Edin Džeko</a></h6>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <figure class="posts__thumb">
                                        <a href="#"><img src="assets/images/samples/post-img3-xs.jpg" alt=""></a>
                                    </figure>
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Škola sporta</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Škola skijanja VUČKO</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- Widget: Popular News / End -->


                    <!-- Widget: Tag Cloud -->
                    <aside class="widget widget--sidebar card widget-tagcloud">
                        <div class="widget__title card__header">
                            <h4>Tagovi</h4>
                        </div>
                        <div class="widget__content card__content">
                            <div class="tagcloud">
                                @foreach($novost->tagovi as $tag)
                                    <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">{{ $tag->tag }}</a>
                                @endforeach
                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Tag Cloud / End -->


                    <!-- Widget: Marketing sidebar -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="assets/images/reklama-sidebar.png" class="reklama-klubovi-sidebar"/>
                        </div>
                    </div>
                    <!-- Widget: Marketing sidebar / End -->


                    <!-- Widget: Trending News -->
                    <aside class="widget widget--sidebar card widget-tabbed">
                        <div class="widget__title card__header">
                            <h4>TOP 8 vijesti ove sedmice</h4>
                        </div>
                        <div class="widget__content card__content">
                            <ul class="posts posts--simple-list">
                                <li class="posts__item posts__item--category-1">
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Kategorija vijesti</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring
                                                next mnonth</a></h6>
                                        <time datetime="2016-08-23" class="posts__date">23. Avgust, 2018.</time>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Kategorija vijesti</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring
                                                next mnonth</a></h6>
                                        <time datetime="2016-08-23" class="posts__date">23. Avgust, 2018.</time>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Kategorija vijesti</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring
                                                next mnonth</a></h6>
                                        <time datetime="2016-08-23" class="posts__date">23. Avgust, 2018.</time>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Kategorija vijesti</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring
                                                next mnonth</a></h6>
                                        <time datetime="2016-08-23" class="posts__date">23. Avgust, 2018.</time>
                                    </div>
                                </li>
                                <li class="posts__item posts__item--category-1">
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">Kategorija vijesti</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring
                                                next mnonth</a></h6>
                                        <time datetime="2016-08-23" class="posts__date">23. Avgust, 2018.</time>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </aside>
                    <!-- Widget: Trending News / End -->

                    <!-- Widget: Newsletter -->
                    <aside class="widget widget--sidebar card widget-newsletter">
                        <div class="widget__title card__header">
                            <h4>SZS Magazin</h4>
                        </div>
                        <div class="widget__content card__content">
                            <h5 class="widget-newsletter__subtitle">Pretplatite se!</h5>
                            <div class="widget-newsletter__desc">
                                <p>Primajte novosti i obavijesti od strane SveZaSport.ba dnevno putem e-mail usluge.</p>
                            </div>
                            <form action="#" id="newsletter" class="inline-form">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Vaša e-mail adresa">
                                    <span class="input-group-btn">
                      <button class="btn btn-lg btn-default" type="button">PRETPLATA</button>
                    </span>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <!-- Widget: Newsletter / End -->

                    <!-- Widget: Marketing sidebar -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="assets/images/reklama-sidebar.png" class="reklama-klubovi-sidebar"/>
                        </div>
                    </div>
                    <!-- Widget: Marketing sidebar / End -->
                    <!-- Widget: Marketing sidebar -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="assets/images/reklama-sidebar.png" class="reklama-klubovi-sidebar"/>
                        </div>
                    </div>
                    <!-- Widget: Marketing sidebar / End -->

                </div>
                <!-- Sidebar / End -->
            </div>

        </div>
    </div>

    <!-- Content / End -->


    <!-- Javascript Files
    ================================================== -->
    <!-- Core JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function () {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
            var container = $('form').length > 0 ? $('form').parent() : "body";
            var options = {
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        })
    </script>
@endsection