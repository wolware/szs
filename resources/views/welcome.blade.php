@extends('layouts.app', ['notifications' => $notifications])

@section('content')

    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>

    @include('includes.pushy-panel')

    <!-- Content
    ================================================== -->
        <div id="main-home-bg">
            <div class="site-content">
                <div class="container">

                    <div class="row">
                        <!-- Content -->
                        <div class="content col-md-8">

                            <!-- Featured News -->
                            <div class="card card--clean">

                                <div class="card__content">

                                    <!-- Slider -->
                                    <div class="slick posts posts--slider-featured posts-slider posts-slider--center">

                                        @foreach($vijesti as $vijest)
                                            <div class="posts__item posts__item--category-1">
                                                <a href="{{ url('/news/' . $vijest->id) }}" class="posts__link-wrapper">
                                                    <figure class="posts__thumb">
                                                        @if($vijest->slika)
                                                            <img src="{{asset('images/vijesti/galerija/' . 'naslovna' . $vijest->slika)}}"
                                                                 alt="">
                                                        @else
                                                            <img src="{{asset('images/vijesti/' . 'vijesti-dodaj-sliku.png')}}"
                                                                 alt="">
                                                        @endif
                                                    </figure>
                                                    <div class="posts__inner">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label"><i
                                                                        class="fa fa-tag"></i> {{ $vijest->kategorija->naziv }}</span>
                                                        </div>
                                                        <h3 class="posts__title">{{ $vijest->naslov }}</h3>
                                                        <time datetime="{{ Carbon\Carbon::parse($vijest->created_at)->format('Y-m-d') }}"
                                                              class="posts__date">{{ Carbon\Carbon::parse($vijest->created_at)->format('d. F, Y.') }}</time>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach


                                    </div>
                                    <!-- Slider / End -->

                                </div>
                            </div>
                            <!-- Featured News / End -->

                        </div>
                        <!-- Content / End -->

                        <!-- Sidebar -->
                        <div class="col-md-4">
                            <!-- Widget: Standings -->
                            <aside class="widget card widget--sidebar widget-standings szs-dan-sport">
                                <div class="widget__title card__header card__header--has-btn">
                                    <h4><i class="fa fa-cloud"></i> Dan za sport</h4>
                                    <a href="{{ url('/objects') }}" class="btn btn-default btn-outline btn-xs card-header__button">Nađi
                                        termin za rekreaciju</a>
                                </div>
                                <div class="widget__content card__content">
                                    <div class="row text-center szs-dan-margin">
                                        <h4 class="szs-dan-dan" id="dan"></h4>
                                        <p class="szs-dan-call">Danas je savršen dan za</p>
                                        <img src="{{asset('images/cardiogram.png')}}" class="szs-dan-icon"/>
                                        <h2 class="szs-dan-title">BodyBuilding &amp; Fitness</h2>
                                        <p class="szs-dan-opis">Iskoristite današnji dan u sportskom duhu</p>
                                        <img src="{{asset('images/straight-letters-szs.png')}}" class="szs-dan-footer"/>
                                        <script>
                                            var today = new Date();
                                            var dd = today.getDate();
                                            var mm = today.getMonth() + 1; //January is 0!
                                            var yyyy = today.getFullYear();

                                            if (dd < 10) {
                                                dd = '0' + dd
                                            }

                                            if (mm < 10) {
                                                mm = '0' + mm
                                            }

                                            today = dd + '.' + mm + '.' + yyyy;
                                            document.getElementById('dan').innerHTML = today;
                                        </script>
                                    </div>
                                </div>
                            </aside>
                        </div>
                        <!-- Sidebar / End -->
                    </div>

                </div>
            </div>
        </div>
        <div class="razmak"></div>
        <div class="site-content">
            <div class="container">

                <div class="row">
                    <!-- Content -->
                    <div class="content col-md-8">

                        <!-- Single Product Tabbed Content -->
                        <div class="product-tabs card card--xlg">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified nav-product-tabs index-tabs-layout" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-klubovi" role="tab"
                                                                          data-toggle="tab">
                                        <small>Zadnji dodani</small>
                                        Klubovi</a></li>
                                <li role="presentation"><a href="#tab-skole" role="tab" data-toggle="tab">
                                        <small>Zadnje dodane</small>
                                        Škole</a></li>
                                <li role="presentation"><a href="#tab-sportisti" role="tab" data-toggle="tab">
                                        <small>Zadnji dodani</small>
                                        Sportisti</a></li>
                                <li role="presentation"><a href="#tab-objekti" role="tab" data-toggle="tab">
                                        <small>Zadnji dodani</small>
                                        Objekti</a></li>
                                <li role="presentation"><a href="#tab-kadrovi" role="tab" data-toggle="tab">
                                        <small>Zadnji dodani</small>
                                        Kadrovi</a></li>
                            </ul>

                            <!-- Tabovi -->

                            <div class="tab-content card__content card-home-tabs">
                                <!-- Tab: Klubovi -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-klubovi">
                                    <div class="row igraci-grid">
                                        @foreach($klubovi as $klub)
                                            <div class="post-grid__item col-sm-4">
                                                <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                    <figure class="posts__thumb club-thumb-backgr">
                                                        <a href="{{url('/clubs/'.$klub->id)}}"><img
                                                                    class="logo-club-tab-index"
                                                                    src="{{asset('images/club_logo/'.$klub->logo)}}"
                                                                    alt=""></a>
                                                    </figure>
                                                    <div class="posts__inner card__content">
                                                        <h6 class="posts__title ime-sportiste-klub-lista"><a
                                                                    href="#">{{$klub->name}}</a></h6>
                                                        <div class="posts__excerpt">{{$klub->city}}</div>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <a href="{{url('/clubs/'.$klub->id)}}"
                                                           class="btn btn-warning btn-profil-igraca"><i
                                                                    class="fa fa-eye"></i> Pregled profila kluba</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>

                                </div>
                                <!-- Tab: Klubovi / End -->

                                <!-- Tab: Škole -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-skole">
                                    <div class="row igraci-grid">
                                        @foreach($schools as $school)
                                            <div class="post-grid__item col-sm-4">
                                                <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                    <figure class="posts__thumb club-thumb-backgr">
                                                        <a href="{{url('/schools/'.$school->id)}}"><img
                                                                    class="logo-club-tab-index"
                                                                    src="{{asset('images/school_logo/'. $school->logo)}}"
                                                                    alt=""></a>
                                                    </figure>
                                                    <div class="posts__inner card__content">
                                                        <h6 class="posts__title ime-sportiste-klub-lista"><a
                                                                    href="#">{{ $school->name }}</a></h6>
                                                        <div class="posts__excerpt">{{ $school->city }}</div>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <a href="{{url('/schools/'.$school->id)}}"
                                                           class="btn btn-warning btn-profil-igraca"><i
                                                                    class="fa fa-eye"></i> Pregled profila škole</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                                <!-- Tab: Škole / End -->


                                <!-- Tab: Sportisti -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-sportisti">
                                    <div class="row igraci-grid">
                                        @foreach($sportasi as $player)
                                            <div class="post-grid__item col-sm-4">
                                                <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                    <figure class="posts__thumb">
                                                        <a href="{{url('/athletes/' . $player->id)}}"><img
                                                                    src="{{asset('images/athlete_avatars/' . $player->avatar)}}"
                                                                    alt=""></a>
                                                    </figure>
                                                    <div class="posts__inner card__content">
                                                        <h6 class="posts__title ime-sportiste-klub-lista"><a
                                                                    href="#">{{$player->firstname}} {{$player->lastname}}</a>
                                                        </h6>
                                                        <div class="posts__excerpt">{{$player->city}}</div>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <a href="{{url('/athletes/' . $player->id)}}"
                                                           class="btn btn-warning btn-profil-igraca"><i
                                                                    class="fa fa-eye"></i> Pregled profila igrača</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div>
                                <!-- Tab: Sportisti / End -->

                                <!-- Tab: Objekti -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-objekti">
                                    <div class="row igraci-grid">
                                        @foreach($objects as $object)
                                            <div class="post-grid__item col-sm-4">
                                                <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                    <figure class="posts__thumb">
                                                        <a href="{{ url('/objects/' . $object->id) }}"><img
                                                                    src="{{asset('images/object_avatars/' . $object->image)}}"
                                                                    alt=""></a>
                                                    </figure>
                                                    <div class="posts__inner card__content">
                                                        <h6 class="posts__title ime-sportiste-klub-lista"><a
                                                                    href="{{ url('/objects/' . $object->id) }}">{{ $object->name }}</a>
                                                        </h6>
                                                        <div class="posts__excerpt">{{ $object->city }}</div>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <a href="{{ url('/objects/' . $object->id) }}"
                                                           class="btn btn-warning btn-profil-igraca"><i
                                                                    class="fa fa-eye"></i> Pregled profila objekta</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                                <!-- Tab: Objekti / End -->

                                <!-- Tab: Kadrovi -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-kadrovi">
                                    <div class="row igraci-grid">
                                        @foreach($staff as $s)
                                            <div class="post-grid__item col-sm-4">
                                                <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                    <figure class="posts__thumb">
                                                        <a href="{{ url('/staff/' . $s->id) }}"><img
                                                                    src="{{asset('images/staff_avatars/' . $s->avatar)}}"
                                                                    alt=""></a>
                                                    </figure>
                                                    <div class="posts__inner card__content">
                                                        <h6 class="posts__title ime-sportiste-klub-lista"><a
                                                                    href="#">{{ $s->firstname . ' ' . $s->lastname }}</a>
                                                        </h6>
                                                        <div class="posts__excerpt">{{ $s->profession->name }}</div>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <a href="{{ url('/staff/' . $s->id) }}"
                                                           class="btn btn-warning btn-profil-igraca"><i
                                                                    class="fa fa-eye"></i> Pregled profila kadra</a>
                                                    </footer>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                                <!-- Tab: Kadrovi / End -->

                            </div>

                            <!-- Tabovi / End -->
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('images/marketing-01.png')}}" class="marketing"/>
                            </div>
                        </div>

                    </div>


                    <div class="content col-md-4">

                        <!-- Widget: Social Buttons - Condensed-->
                        <aside class="widget widget--sidebar widget-social widget-social--condensed">
                            <a href="#" class="btn-social-counter btn-social-counter--fb" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Pratite nas na Facebooku</h6>
                                <span class="btn-social-counter__count"><span
                                            class="btn-social-counter__count-num"></span></span>
                                <span class="btn-social-counter__add-icon"></span>
                            </a>
                            <a href="https://twitter.com/danfisher_dev"
                               class="btn-social-counter btn-social-counter--twitter" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Pratite nas na twitteru</h6>
                                <span class="btn-social-counter__count"><span
                                            class="btn-social-counter__count-num">142</span></span>
                                <span class="btn-social-counter__add-icon"></span>
                            </a>
                            <a href="#" class="btn-social-counter btn-social-counter--instagram" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fa fa-instagram"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Pratite naš instagram</h6>
                                <span class="btn-social-counter__count"><span
                                            class="btn-social-counter__count-num">1000</span></span>
                                <span class="btn-social-counter__add-icon"></span>
                            </a>
                        </aside>
                        <!-- Widget: Social Buttons - Condensed / End -->

                        <div class="card card--clean">
                            <header class="card__header card__header--has-filter">
                                <h4><i class="fa fa-bookmark"></i> Izdvojeni profili</h4>
                            </header>
                        </div>
                        @if(!empty($newProfiles))
                            @if($newProfiles->player)
                                <!-- kartica -->
                                <a href="{{ url('/athletes/' . $newProfiles->player->id) }}">
                                    <aside class="widget card widget--sidebar widget-player widget-player--soccer">

                                        <div class="widget__content card__content">
                                            <div class="widget-player__ribbon">
                                                <div class="fa fa-star"></div>
                                            </div>
                                            <figure class="widget-player__photo">
                                                <img src="{{asset('images/athlete_avatars/' . $newProfiles->player->avatar )}}" alt class="widget-player__photo">
                                            </figure>
                                            <header class="widget-player__header clearfix">
                                                <h4 class="widget-player__name">
                                                    <span class="widget-player__first-name">Sportista</span>
                                                    <span class="widget-player__last-name">{{ $newProfiles->player->firstname }} {{ $newProfiles->player->lastname }}</span>
                                                </h4>
                                            </header>
                                            <div class="widget-player__content">
                                                <div class="widget-player__content-inner">
                                                    <div class="posts__excerpt">
                                                        {{ $newProfiles->player->city }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </a>
                                <!-- kartica end-->
                            @endif
                            @if($newProfiles->club)
                                <!-- kartica -->
                                    <a href="{{ url('/clubs/' . $newProfiles->club->id) }}">
                                        <aside class="widget card widget--sidebar widget-player widget-player--soccer">

                                            <div class="widget__content card__content">
                                                <div class="widget-player__ribbon">
                                                    <div class="fa fa-star"></div>
                                                </div>
                                                <figure class="widget-player__photo">
                                                    <img src="{{asset('images/club_logo/' . $newProfiles->club->logo )}}" alt class="widget-player__photo">
                                                </figure>
                                                <header class="widget-player__header clearfix">
                                                    <h4 class="widget-player__name">
                                                        <span class="widget-player__first-name">{{ $newProfiles->club->nature }}</span>
                                                        <span class="widget-player__last-name">{{ $newProfiles->club->name }}</span>
                                                    </h4>
                                                </header>
                                                <div class="widget-player__content">
                                                    <div class="widget-player__content-inner">
                                                        <div class="posts__excerpt">
                                                            {{ $newProfiles->club->city }}
                                                        </div>
                                                        @if($newProfiles->club->home_field)
                                                            <div class="posts__excerpt">
                                                                {{ $newProfiles->club->home_field }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                    </a>
                                    <!-- kartica end-->
                            @endif
                            @if($newProfiles->staff)
                                <!-- kartica -->
                                    <a href="{{ url('/staff/' . $newProfiles->staff->id) }}">
                                        <aside class="widget card widget--sidebar widget-player widget-player--soccer">

                                            <div class="widget__content card__content">
                                                <div class="widget-player__ribbon">
                                                    <div class="fa fa-star"></div>
                                                </div>
                                                <figure class="widget-player__photo">
                                                    <img src="{{asset('images/staff_avatars/' . $newProfiles->staff->avatar )}}" alt class="widget-player__photo">
                                                </figure>
                                                <header class="widget-player__header clearfix">
                                                    <h4 class="widget-player__name">
                                                        <span class="widget-player__first-name">Sportski kadar</span>
                                                        <span class="widget-player__last-name">{{ $newProfiles->staff->firstname }} {{ $newProfiles->staff->lastname }}</span>
                                                    </h4>
                                                </header>
                                                <div class="widget-player__content">
                                                    <div class="widget-player__content-inner">
                                                        <div class="posts__excerpt">
                                                            {{ $newProfiles->staff->city }}
                                                        </div>
                                                        <div class="posts__excerpt">
                                                            {{ $newProfiles->staff->profession->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                    </a>
                                    <!-- kartica end-->
                            @endif
                            @if($newProfiles->object)
                                <!-- kartica -->
                                    <a href="{{ url('/object/' . $newProfiles->object->id) }}">
                                        <aside class="widget card widget--sidebar widget-player widget-player--soccer">

                                            <div class="widget__content card__content">
                                                <div class="widget-player__ribbon">
                                                    <div class="fa fa-star"></div>
                                                </div>
                                                <figure class="widget-player__photo">
                                                    <img src="{{asset('images/object_avatars/' . $newProfiles->object->image )}}" alt class="widget-player__photo">
                                                </figure>
                                                <header class="widget-player__header clearfix">
                                                    <h4 class="widget-player__name">
                                                        <span class="widget-player__first-name">{{ $newProfiles->object->type->type }}</span>
                                                        <span class="widget-player__last-name">{{ $newProfiles->object->name }}</span>
                                                    </h4>
                                                </header>
                                                <div class="widget-player__content">
                                                    <div class="widget-player__content-inner">
                                                        <div class="posts__excerpt">
                                                            {{ $newProfiles->staff->city }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </aside>
                                    </a>
                                    <!-- kartica end-->
                                @endif
                        @else
                            <p class="text-center">Trenutno nema izdvojenih profila</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-2 col-xs-6">
                    <ul class="team-stats-box">
                        <li class="team-stats__item team-stats__item--clean">
                            <div class="team-stats__icon team-stats__icon--circle">
                                <img src="{{asset('images/klubovi-fff.png')}}" alt="" class="team-stats__icon-primary">
                            </div>
                            <div class="team-stats__value">{{ $statistics->clubs or '-' }}</div>
                            <div class="team-stats__label">Sportskih Klubova</div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <ul class="team-stats-box">
                        <li class="team-stats__item team-stats__item--clean">
                            <div class="team-stats__icon team-stats__icon--circle">
                                <img src="{{asset('images/skole-fff.png')}}" alt="" class="team-stats__icon-primary">
                            </div>
                            <div class="team-stats__value">{{ $statistics->schools or '-' }}</div>
                            <div class="team-stats__label">Škola Sporta</div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <ul class="team-stats-box">
                        <li class="team-stats__item team-stats__item--clean">
                            <div class="team-stats__icon team-stats__icon--circle">
                                <img src="{{asset('images/objekti-fff.png')}}" alt="" class="team-stats__icon-primary">
                            </div>
                            <div class="team-stats__value">{{ $statistics->objects or '-' }}</div>
                            <div class="team-stats__label">Sportskih Objekata</div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <ul class="team-stats-box">
                        <li class="team-stats__item team-stats__item--clean">
                            <div class="team-stats__icon team-stats__icon--circle">
                                <img src="{{asset('images/sportisti-fff.png')}}" alt=""
                                     class="team-stats__icon-primary">
                            </div>
                            <div class="team-stats__value">{{ $statistics->players or '-' }}</div>
                            <div class="team-stats__label">BH Sportista</div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <ul class="team-stats-box">
                        <li class="team-stats__item team-stats__item--clean">
                            <div class="team-stats__icon team-stats__icon--circle">
                                <img src="{{asset('images/kadrovi-fff.png')}}" alt="" class="team-stats__icon-primary">
                            </div>
                            <div class="team-stats__value">{{ $statistics->staff or '-' }}</div>
                            <div class="team-stats__label">Stručnih Kadrova</div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-xs-6">
                    <ul class="team-stats-box">
                        <li class="team-stats__item team-stats__item--clean">
                            <div class="team-stats__icon team-stats__icon--circle">
                                <img src="{{asset('images/oprema-fff.png')}}" alt="" class="team-stats__icon-primary">
                            </div>
                            <div class="team-stats__value">{{ $statistics->news or '-' }}</div>
                            <div class="team-stats__label">Sportskih Vijesti</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
