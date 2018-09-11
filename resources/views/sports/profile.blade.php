@extends('layouts.app',array('data' => $sport))

@section('content')

    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


    @include('includes.pushy-panel')


    <!-- Player Heading
    ================================================== -->
        <div class="player-heading">
            <div class="container">

                <div class="player-info__title player-info__title--mobile">
                    <h1 class="player-info__name">
                        <span class="player-info__first-name"></span>
                        <span class="player-info__last-name">FK Sve Za Sport</span>
                    </h1>
                </div>

                <div class="player-info">

                    <!-- Player Photo -->
                    <div class="player-info__item player-info__item--photo">
                        <figure class="player-info__photo">
                            <img class="frontend-profilna-slika" src="{{url('assets/images/'.$sport->icon)}}" alt="">
                        </figure>
                    </div>
                    <!-- Player Photo / End -->

                    <!-- Player Details -->
                    <div class="player-info__item player-info__item--details">

                        <div class="player-info__title player-info__title--desktop">
                            <h1 class="player-info__name">
                                <span class="player-info__first-name">{{--{{$sport->nature}}--}}</span>
                                <span class="player-info__last-name">{{--{{$sport->name}}--}}</span>
                            </h1>
                        </div>

                        <div class="player-info-details">
                            {{-- @if(Auth::check())
                                 @if(Auth::user()->id == $sport->creator->id)
                                     <a href="{{ url('/clubs/' . $sport->id . '/edit' ) }}" class="btn btn-primary-inverse btn-icon product__add-to-cart stats-klub-middle"><i class="fa fa-edit"></i> Uredi</a>
                                 @endif
                             @endif--}}
                        </div>

                    </div>
                    <!-- Player Details / End -->

                    <!-- Player Stats -->
                    <div class="player-info__item player-info__item--stats">
                        <div class="player-info__item--stats-inner">

                            <!-- Profil stats -->
                            <aside class="widget widget--sidebar widget-social short-stats-bars">
                                <a class="btn-widget-stats">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title brojac-profil">{{$sport->sportDetails->number_of_views}}</h6>
                                    <span class="btn-social-counter__count"><span
                                                class="btn-social-counter__count-num"></span> Pregleda</span>
                                </a>
                                <a class="btn-widget-stats">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-share-alt"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title brojac-profil">4645</h6>
                                    <span class="btn-social-counter__count"><span
                                                class="btn-social-counter__count-num"></span> Podjela</span>
                                </a>
                                <a class="btn-widget-stats">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title brojac-profil">55212</h6>
                                    <span class="btn-social-counter__count"><span
                                                class="btn-social-counter__count-num"></span> Sviđanja</span>
                                </a>
                            </aside>
                            <!-- Profil stats / End -->
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Content
        ================================================== -->

        <div class="site-content">
            <div class="container">

                <div class="row profil-content-b06">

                    <!-- Content -->
                    <div class="content col-md-4 overscreen">

                        <!-- Widget: Osnovne info -->
                        <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                            <div class="widget__title card__header">
                                <h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
                            </div>
                            <div class="widget__content card__content">

                                <!-- Osnovne info -->
                                <div class="table-responsive">
                                    <table class="table lineup-table">
                                        <tbody>

                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012"
                                                     src="{{asset('images/icons/small-calendar.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">God. osnivanja</td>
                                            <td class="lineup__name">{{$sport->sportDetails->creation_year}}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/hotel.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">Sjedište</td>
                                            <td class="lineup__name">{{$sport->sportDetails->place}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/savez.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">Savez</td>
                                            <td class="lineup__name">{{$sport->sportDetails->alliance}}
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Osnovne info / End -->
                        </aside>
                        <!-- Widget: Osnovne info / End -->

                        <!-- Widget: Socijalne mreze -->

                        <!-- Socijalne mreze -->

                        <div class="col-md-6 profili-soc-mreza">
                            <a href="#" class="btn-social-counter btn-social-counter--fb" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Facebook</h6>
                            </a>
                        </div>
                        <div class="col-md-6 profili-soc-mreza">
                            <a href="#" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Twitter</h6>
                            </a>
                        </div>
                        <div class="col-md-6 profili-soc-mreza">
                            <a href="#" class="btn-social-counter btn-social-counter--instagram" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fa fa-instagram"></i>
                                </div>
                                <h6 class="btn-social-counter__title">Instagram</h6>
                            </a>
                        </div>
                        <div class="col-md-6 profili-soc-mreza">
                            <a href="#" class="btn-social-counter btn-social-counter--yt" target="_blank">
                                <div class="btn-social-counter__icon">
                                    <i class="fa fa-youtube-play"></i>
                                </div>
                                <h6 class="btn-social-counter__title">YouTUBE</h6>
                            </a>
                        </div>

                        <!-- Socijalne mreze / End -->
                        <!-- Widget: Socijalne mreze / End -->


                        <!-- Widget: Kontakt info -->
                        <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                            <div class="widget__title card__header">
                                <h4><i class="fa fa-info-circle"></i> Kontakt informacije</h4>
                            </div>
                            <div class="widget__content card__content">

                                <!-- Kontakt info -->
                                <div class="table-responsive">
                                    <table class="table lineup-table">
                                        <tbody>

                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012"
                                                     src="{{asset('images/icons/phone-call.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Telefon 1</td>
                                            <td class="lineup__name">{{$sport->sportDetails->telephone}}</td>
                                        </tr>

                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012"
                                                     src="{{asset('images/icons/fax-with-phone.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Fax</td>
                                            <td class="lineup__name">{{$sport->sportDetails->fax}}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/envelope.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">E-mail</td>
                                            <td class="lineup__name"><a
                                                        href="mailto:{{$sport->sportDetails->email}}?Subject=Pozdrav"
                                                        target="_top"> {{$sport->sportDetails->email}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012"
                                                     src="{{asset('images/icons/worldwide.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Web stranica</td>
                                            <td class="lineup__name"><a class="profil-poveznica"
                                                                        href="#">{{$sport->sportDetails->website}}</a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- Kontakt info / End -->
                            </div>
                        </aside>
                        <!-- Widget: Kontakt info / End -->

                        <!-- Widget: Marketing sidebar -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{asset('images/reklama-sidebar.png')}}" class="reklama-klubovi-sidebar"/>
                            </div>
                        </div>
                        <!-- Widget: Marketing sidebar / End -->

                    </div>

                    <!-- Main content -->
                    <div class="sidebar col-md-8 overscreen">

                        <!-- Single Product Tabbed Content -->
                        <div class="product-tabs card card--xlg">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified nav-product-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab"
                                                                          data-toggle="tab"><i
                                                class="fa fa-info-circle"></i>
                                        <small>O sportu</small>
                                        Općenito</a></li>
                                <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i
                                                class="fa fa-history"></i>
                                        <small>Istaknuti</small>
                                        Događaji</a></li>
                                <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i
                                                class="fa fa-trophy"></i>
                                        <small>Trofejna</small>
                                        Vitrina</a></li>
                                <li role="presentation"><a href="#tab-igraci" role="tab" data-toggle="tab"><i
                                                class="fa fa-users"></i>
                                        <small>Istaknute</small>
                                        Osobe</a></li>
                                <li role="presentation"><a href="#tab-menadzment1" role="tab" data-toggle="tab"><i
                                                class="fa fa-user-secret"></i>
                                        <small>Savezni</small>
                                        Menadžment</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content card__content">
                                <!-- Tab: Općenito -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <!-- Article -->
                                    <article class="card card--lg post post--single">

                                        <header class="post__header">
                                            <h2 class="post__title">Općenito o sportu {{$sport->name}} u BiH</h2>
                                        </header>

                                        <div class="post__content">
                                            {{$sport->about_sport}}
                                        </div>
                                    </article>
                                    <!-- Article / End -->

                                </div>


                                <!-- Tab: Vremeplov -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vremeplov">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <!-- Article -->
                                    <article class="card card--lg post post--single">

                                        <header class="post__header">
                                            <h2 class="post__title text-center">Događaji koji su obilježili sport u
                                                BiH</h2>
                                        </header>

                                        <div class="post__content">
                                            @foreach($sport->sportsEvents as $event)
                                                <p class="pull-right">{!!$event->date_of_event!!}</p>
                                                <h3 class="pull-left">{!!$event->name_of_event!!}</h3>
                                                <div class="clearfix"></div>
                                                <img src="{{asset('images/'.$event->img)}}" class="img-responsive">
                                                <p>{!!$event->description_of_event!!}</p>
                                                <hr>
                                            @endforeach
                                        </div>
                                    </article>
                                    <!-- Article / End -->

                                </div>
                                <!-- Tab: Vremeplov / End -->
                                <!-- Tab: Vitrina -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vitrina">
                                    <!-- Widget: Awards -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach($sport->sportTrophies as $t)

                                            <div class="col-md-3">
                                                <div class="awards__item">
                                                    <figure class="awards__figure awards__figure--space">
                                                        <img src="{{asset('images/trophies/trofej.svg')}}" alt="">
                                                    </figure>
                                                    <div class="awards__desc">
                                                        <h5 class="awards__name">{{$t->name}}</h5>
                                                        <div class="awards__date">Sezona {{$t->date}}</div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                    <!-- Widget: Awards / End -->
                                </div>
                                <!-- Tab: Vitrina / End -->

                                <!-- Tab: Igraci -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-igraci">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>
                                    <div class="row igraci-grid">
                                        @if($sport->sportPeople->count())
                                            @foreach($sport->sportPeople as $sportPerson)
                                                <div class="post-grid__item col-sm-4">
                                                    <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                        <figure class="posts__thumb">
                                                            <img src="{{asset('images/staff_avatars/' . $sportPerson->img)}}"
                                                                 alt="">
                                                        </figure>
                                                        <div class="posts__inner card__content">
                                                            <h6 class="posts__title ime-sportiste-klub-lista">{{ $sportPerson->fName . ' ' . $sportPerson->lName }}</h6>
                                                            <div class="posts__excerpt">{{ $sportPerson->dob }}</div>
                                                        </div>
                                                        <footer class="posts__footer card__footer">
                                                            <p>
                                                                <i class="fa fa-pencil-square-o"></i> {{ $sportPerson->description }}
                                                            </p>
                                                        </footer>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <p class="text-center">Sport trenutno nema istaknutih osoba na Sve
                                                Za Sport mreži.</p>
                                        @endif
                                    </div>

                                    <div class="text-center">
                                        {{--{{ $players->links() }}--}}
                                    </div>

                                </div>
                                <!-- Tab: Igraci / End -->
                                <!-- Tab: Menadzment -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-menadzment1">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>

                                    <div class="row igraci-grid">
                                        @if($sport->sportsMenagement->count())
                                            @foreach($sport->sportsMenagement as $staf)
                                                <div class="post-grid__item col-sm-4">
                                                    <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                        <figure class="posts__thumb">
                                                            <img src="{{asset('images/staff_avatars/' . $staf->img)}}"
                                                                 alt="">
                                                        </figure>
                                                        <div class="posts__inner card__content">
                                                            <h6 class="posts__title ime-sportiste-klub-lista">{{ $staf->fName . ' ' . $staf->lName }}</h6>
                                                            <div class="posts__excerpt">{{ $staf->dob }}</div>
                                                        </div>
                                                        <footer class="posts__footer card__footer">
                                                            <i class="fa fa-pencil-square-o"></i> {{$staf->description}}
                                                        </footer>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <p class="text-center">Sport trenutno nema aktivnih stručnih kadrova na Sve
                                                Za Sport mreži.</p>
                                        @endif

                                    </div>

                                    <div class="text-center">
                                        {{--{{ $staff->links() }}--}}
                                    </div>

                                </div>
                                <!-- Tab: Menadzment / End -->
                                <!-- Tab: Vijesti -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vijesti2">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>


                                    <!-- Posts List -->
                                    <div class="posts posts--cards posts--cards-thumb-left post-list">

                                        <div class="post-list__item">
                                            <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                                                <figure class="vijesti__thumb">
                                                    <a href="#"><img class="slika-vijest-tab"
                                                                     src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}"
                                                                     alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao
                                                                četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar,
                                                            2017.
                                                        </time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}"
                                                                     alt="Post Author Avatar">
                                                            </figure>
                                                            <div class="post-author__info">
                                                                <h4 class="post-author__name">Tarik Jašarević</h4>
                                                            </div>
                                                        </div>
                                                        <ul class="post__meta vijesti_profili meta">
                                                            <li class="meta__item meta__item--views">2369</li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-list__item">
                                            <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                                                <figure class="vijesti__thumb">
                                                    <a href="#"><img class="slika-vijest-tab"
                                                                     src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}"
                                                                     alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao
                                                                četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar,
                                                            2017.
                                                        </time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}"
                                                                     alt="Post Author Avatar">
                                                            </figure>
                                                            <div class="post-author__info">
                                                                <h4 class="post-author__name">Tarik Jašarević</h4>
                                                            </div>
                                                        </div>
                                                        <ul class="post__meta vijesti_profili meta">
                                                            <li class="meta__item meta__item--views">2369</li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-list__item">
                                            <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                                                <figure class="vijesti__thumb">
                                                    <a href="#"><img class="slika-vijest-tab"
                                                                     src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}"
                                                                     alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao
                                                                četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar,
                                                            2017.
                                                        </time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}"
                                                                     alt="Post Author Avatar">
                                                            </figure>
                                                            <div class="post-author__info">
                                                                <h4 class="post-author__name">Tarik Jašarević</h4>
                                                            </div>
                                                        </div>
                                                        <ul class="post__meta vijesti_profili meta">
                                                            <li class="meta__item meta__item--views">2369</li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-list__item">
                                            <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                                                <figure class="vijesti__thumb">
                                                    <a href="#"><img class="slika-vijest-tab"
                                                                     src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}"
                                                                     alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao
                                                                četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar,
                                                            2017.
                                                        </time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}"
                                                                     alt="Post Author Avatar">
                                                            </figure>
                                                            <div class="post-author__info">
                                                                <h4 class="post-author__name">Tarik Jašarević</h4>
                                                            </div>
                                                        </div>
                                                        <ul class="post__meta vijesti_profili meta">
                                                            <li class="meta__item meta__item--views">2369</li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="post-list__item">
                                            <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                                                <figure class="vijesti__thumb">
                                                    <a href="#"><img class="slika-vijest-tab"
                                                                     src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}"
                                                                     alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao
                                                                četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar,
                                                            2017.
                                                        </time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}"
                                                                     alt="Post Author Avatar">
                                                            </figure>
                                                            <div class="post-author__info">
                                                                <h4 class="post-author__name">Tarik Jašarević</h4>
                                                            </div>
                                                        </div>
                                                        <ul class="post__meta vijesti_profili meta">
                                                            <li class="meta__item meta__item--views">2369</li>
                                                        </ul>
                                                    </footer>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    <!-- Vijesti stranice -->
                                    <nav class="post-pagination text-center">
                                        <ul class="pagination pagination--condensed pagination--lg">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Vijesti stranice / End -->

                                    <!-- Posts List / End -->
                                </div>
                                <!-- Tab: Vijesti / End -->
                                <!-- Tab: Galerija -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        {{--	@foreach($sport->images as $g)

                                            <div class="album__item col-xs-6 col-sm-4">
                                                <div class="album__item-holder">
                                                    <a href="{{asset('images/galerija_klub/' . $g->image)}}" class="album__item-link mp_gallery">
                                                    <figure class="album__thumb">
                                                        <img src="{{asset('images/galerija_klub/' . $g->image)}}" alt="">
                                                    </figure>
                                                    <div class="album__item-desc">
                                                        <img src="{{asset('images/galerija_klub/' . $g->image)}}" class="pregled-slike" alt="">
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>

                                            @endforeach
                                            --}}


                                    </div>

                                </div>
                                <!-- Tab: Galerija / End -->

                                <!-- Single Product Tabbed Content / End -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Content / End -->


@endsection