@extends('layouts.app',array('data' => $novost))

@section('content')
    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        @include('includes.pushy-panel')


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
                                    <li class="meta__item meta__item--views">{{$novost->number_of_views}}</li>
                                    {{--<li class="meta__item meta__item--likes"><i class="meta-like icon-heart"></i> 530
                                    </li>
                                    <li class="meta__item meta__item--comments">18</li>--}}
                                </ul>
                            </header>
                        </div>

                        <figure class="post__thumbnail">
                            @if($novost->slika)
                                <img class="image-responsive-width"
                                     src="{{ asset('images/vijesti/galerija/' . $novost->slika) }}" alt="">
                            @else
                                <img class="image-responsive-width"
                                     src="{{ asset('images/vijesti/' . 'vijesti-dodaj-sliku.png') }}" alt="">
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
                                    @if($novost->user->avatar != null)
                                        <img src="{{ asset('images/avatars/' . $novost->user->avatar) }}"
                                             alt="Post Author Avatar">
                                    @else
                                        <img src="{{ asset('images/dino-secic.jpg') }}" alt="Post Author Avatar">
                                    @endif

                                </figure>
                                <div class="post-author__info">
                                    <h4 class="post-author__name">{{ $novost->user->name }}</h4>
                                    <span class="post-author__slogan"> </span>
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


                </div>
                <!-- Content / End -->

                <!-- Sidebar -->
                <div id="sidebar" class="sidebar col-md-4">

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
                            <img src="{{url('images/reklama-sidebar.png')}}" class="reklama-klubovi-sidebar"/>
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
                {{--<aside class="widget widget--sidebar card widget-newsletter">
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
                </aside>--}}
                <!-- Widget: Newsletter / End -->

                    <!-- Widget: Marketing sidebar -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{url('images/reklama-sidebar.png')}}" class="reklama-klubovi-sidebar"/>
                        </div>
                    </div>
                    <!-- Widget: Marketing sidebar / End -->
                    <!-- Widget: Marketing sidebar -->
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{url('images/reklama-sidebar.png')}}" class="reklama-klubovi-sidebar"/>
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