@extends('layouts.app',array('data' => $player))

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
                        <span class="player-info__first-name">{{$player->nature->name}}</span>
                        <span class="player-info__last-name">{{$player->firstname}} {{$player->lastname}}</span>
                    </h1>
                </div>

                <div class="player-info">

                    <!-- Player Photo -->
                    <div class="player-info__item player-info__item--photo">
                        <figure class="player-info__photo">
                            <img class="frontend-profilna-slika-a1"
                                 src="{{asset('images/athlete_avatars/' . $player->avatar)}}" alt="">
                        </figure>
                    </div>
                    <!-- Player Photo / End -->

                    <!-- Player Details -->
                    <div class="player-info__item player-info__item--details">

                        <div class="player-info__title player-info__title--desktop">
                            <h1 class="player-info__name">
                                <span class="player-info__first-name">{{$player->nature->name}}</span>
                                <span class="player-info__last-name">{{$player->firstname}} {{$player->lastname}}</span>
                            </h1>
                        </div>

                        <div class="player-info-details">
                            @if(Auth::check())
                                @if(Auth::user()-> id == $player->user->id)
                                    <a href="{{ url('/athletes/' . $player->id . '/edit' ) }}"
                                       class="btn btn-primary-inverse btn-icon product__add-to-cart stats-klub-middle"><i
                                                class="fa fa-edit"></i> Uredi</a>
                                @endif
                            @endif
                            <a href="#" class="btn btn-primary-inverse btn-icon product__add-to-cart"><i
                                        class="fa fa-share-alt"></i> Podijeli</a>

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
                                    <h6 class="btn-social-counter__title brojac-profil">{{$player->number_of_views}}</h6>
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
                                            <td class="lineup__num">Datum rođenja</td>
                                            <td class="lineup__name">{{\Carbon\Carbon::parse($player->date_of_birth)->format('d.m.Y.')}}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012"
                                                     src="{{asset('images/icons/klubovi-icon.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Klub</td>
                                            <td class="lineup__name"><a class="profil-poveznica"
                                                                        href="#">{{$player->club->name or 'Nema klub'}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/trophy.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">Takmičenje/Liga</td>
                                            <td class="lineup__name">{{$player->club->competition or 'Nema takmičenja'}}</td>
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
                        <div class="row">
                            <div class="col-md-12">
                                @if($player->facebook)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $player->facebook }}"
                                           class="btn-social-counter btn-social-counter--fb" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Facebook</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($player->twitter)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $player->twitter }}"
                                           class="btn-social-counter btn-social-counter--twitter" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Twitter</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($player->instagram)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $player->instagram }}"
                                           class="btn-social-counter btn-social-counter--instagram" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-instagram"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Instagram</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($player->youtube)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $player->youtube }}"
                                           class="btn-social-counter btn-social-counter--yt" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-youtube-play"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">YouTUBE</h6>
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- Socijalne mreze / End -->
                        <!-- Widget: Socijalne mreze / End -->


                        <!-- Widget: Kontakt info -->
                        <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                            <div class="widget__title card__header">
                                <h4><i class="fa fa-user-circle-o"></i> Predispozicije</h4>
                            </div>
                            <div class="widget__content card__content">

                                <!-- Kontakt info -->
                                <div class="table-responsive">
                                    <table class="table lineup-table">
                                        <tbody>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/height.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">Visina</td>
                                            <td class="lineup__name">{{$player->height}} cm</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/weight.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">Težina</td>
                                            <td class="lineup__name">{{$player->weight}} kg</td>
                                        </tr>
                                        @if($player->player_data)
                                            @foreach($player->player_data as $name => $player_data)
                                                <tr>
                                                    <td class="lineup__info">
                                                        <img class="flow-icons-012"
                                                             src="{{asset('images/icons/' . $player->player_data_names[$name]['icon'])}}"
                                                             alt="">
                                                    </td>
                                                    <td class="lineup__num">{{ $player->player_data_names[$name]['label']['bs'] }}</td>
                                                    <td class="lineup__name">{{ $player_data }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Kontakt info / End -->
                            </div>
                        </aside>
                        <!-- Widget: Kontakt info / End -->

                        <!-- Widget: SZS info -->
                        <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                            <div class="widget__title card__header">
                                <h4><i class="fa fa-id-card-o"></i> SveZaSport karta</h4>
                            </div>
                            <div class="widget__content card__content">

                                <!-- SZS info -->
                                <div class="table-responsive">
                                    <table class="table lineup-table">
                                        <tbody>

                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/tag.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">ID igrača</td>
                                            <td class="lineup__name">{{$player->id}}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012"
                                                     src="{{asset('images/icons/calendar-add-event-button-with-plus-sign.svg')}}"
                                                     alt="">
                                            </td>
                                            <td class="lineup__num">Dio SveZaSport</td>
                                            <td class="lineup__name">{{ \Carbon\Carbon::parse($player->created_at)->format('d. F, Y.') }}</td>
                                        </tr>
                                       {{-- <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012"
                                                     src="{{asset('images/icons/security-badge.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">SZS Klub mjeseca</td>
                                            <td class="lineup__name">5</td>
                                        </tr>--}}

                                        </tbody>
                                    </table>
                                </div>
                                <!-- SZS info / End -->
                            </div>
                        </aside>
                        <!-- Widget: SZS info / End -->
                        <!-- Widget: Marketing sidebar -->
                        <div class="row">
                            <div class="col-md-12">
                                <img src="{{ asset('images/reklama-sidebar.png') }}" class="reklama-klubovi-sidebar"/>
                            </div>
                        </div>
                        <!-- Widget: Marketing sidebar / End -->

                        <!-- Widget: Autor -->
                        <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                            <div class="widget__title card__header">
                                <h4><i class="fa fa-id-badge"></i> Objavio</h4>
                            </div>
                            <div class="widget__content card__content">

                                <!-- SZS info -->
                                <div class="table-responsive">
                                    <table class="table lineup-table">
                                        <tbody>

                                        <tr>
                                            <td class="team-leader__player">
                                                <div class="team-leader__player-info">
                                                    <figure class="team-leader__player-img team-leader__player-img--sm">
                                                        <img src="{{asset('images/avatars/' . ($player->user->avatar ? $player->user->avatar : 'default_avatar.png'))}}"
                                                             class="user-picture" alt="">
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="{{url('/profile/'.$player->user->id)}}"><h5
                                                                    class="team-leader__player-name autor-slika">{{ $player->user->name }}</h5>
                                                        </a>
                                                        @if(Auth::check() && Auth::user()->id != $player->user->id)
                                                            <a href="{{url('/messages/create?user='.$player->user->id.'&email='.$player->user->email)}}"><i class="fa fa-envelope"></i> Pošalji poruku</a>
                                                        @endif
                                                        <span class="team-leader__player-position"><i
                                                                    class="fa fa-tag"></i> {{$player->user->id}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- SZS info / End -->
                            </div>
                        </aside>
                        <!-- Widget: Autor / End -->

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
                                        <small>O klubu</small>
                                        Općenito</a></li>
                                <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i
                                                class="fa fa-history"></i>
                                        <small>Auto</small>
                                        Biografija</a></li>
                                <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i
                                                class="fa fa-trophy"></i>
                                        <small>Osobna</small>
                                        Vitrina</a></li>
                                <li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i
                                                class="fa fa-picture-o"></i>
                                        <small>Foto</small>
                                        Galerija</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content card__content">
                                <!-- Tab: Općenito -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">

                                    <div class="row grupa-gadgets">
                                        <div class="col-md-6">
                                            <!-- Widget: Lokacija info -->
                                            <aside class="widget card card--has-table widget--sidebar widget-lineup-table">

                                                <div class="widget__content card__content main-info-profil-start-01 gadget-padding">

                                                    <!-- Lokacija info -->
                                                    <div class="table-responsive">
                                                        <table class="table lineup-table">
                                                            <tbody>

                                                            <tr>
                                                                <td class="lineup__info gadget-no-border">
                                                                    <img class="flow-icons-012"
                                                                         src="{{asset('images/icons/office-block.svg')}}"
                                                                         alt="">
                                                                </td>
                                                                <td class="lineup__num gadget-no-border">Grad/Mjesto
                                                                </td>
                                                                <td class="lineup__name gadget-no-border">{{$player->city}}</td>
                                                            </tr>
                                                            @if($player->regions->has('municipality'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012"
                                                                             src="{{asset('images/icons/opcina.svg')}}"
                                                                             alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Općina</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $player->regions->get('municipality') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($player->regions->has('region'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012"
                                                                             src="{{asset('images/icons/placeholder.svg')}}"
                                                                             alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">
                                                                        Kanton/Regija
                                                                    </td>
                                                                    <td class="lineup__name gadget-no-border">{{ $player->regions->get('region') }}</td>
                                                                </tr>
                                                            @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- Lokacija info / End -->
                                                </div>
                                            </aside>
                                            <!-- Widget: Lokacija info / End -->

                                        </div>

                                        <div class="col-md-6">
                                            <!-- Widget: SZS info -->
                                            <aside class="widget card card--has-table widget--sidebar widget-lineup-table">

                                                <div class="widget__content card__content main-info-profil-start-01 gadget-padding">

                                                    <!-- SZS info -->
                                                    <div class="table-responsive">
                                                        <table class="table lineup-table">
                                                            <tbody>
                                                            @if($player->regions->has('province'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012"
                                                                             src="{{asset('images/icons/map.svg')}}"
                                                                             alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">
                                                                        Entitet/Pokrajina
                                                                    </td>
                                                                    <td class="lineup__name gadget-no-border">{{ $player->regions->get('province') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($player->regions->has('country'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012"
                                                                             src="{{asset('images/icons/earth.svg')}}"
                                                                             alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Država</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $player->regions->get('country') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($player->regions->has('continent'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012"
                                                                             src="{{asset('images/icons/international-delivery.svg')}}"
                                                                             alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Kontinent
                                                                    </td>
                                                                    <td class="lineup__name gadget-no-border">{{ $player->regions->get('continent') }}</td>
                                                                </tr>
                                                            @endif
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- SZS info / End -->
                                                </div>
                                            </aside>
                                            <!-- Widget: SZS info / End -->

                                        </div>
                                        <!-- Tab: Općenito / End -->

                                    </div>

                                    <!-- Widget: Game Result -->
                                    <aside class="widget card widget--sidebar widget-game-result">
                                        <div class="widget__content card__content no-border-alt">
                                            <!-- Game Score -->
                                            <div class="widget-game-result__section">
                                                <div class="widget-game-result__section-inner">
                                                    <header class="widget-game-result__header">
                                                        <h3 class="widget-game-result__title">Klupska historija</h3>
                                                        <time class="widget-game-result__date" datetime="2016-03-24">
                                                            Timeline promjena klubova
                                                        </time>
                                                    </header>
                                                </div>
                                            </div>
                                            <!-- Game Score / End -->

                                            <!-- Timeline -->
                                            <div class="widget-game-result__section">

                                                <div class="df-timeline-wrapper">
                                                    <div class="df-timeline">

                                                        <div class="df-timeline__event df-timeline__event--empty"></div>

                                                        @foreach($player->club_history as $key => $club)

                                                            <div class="df-timeline__event">
                                                                <div class="df-timeline__team-{{ $key % 2 == 0 ? '1' : '2' }}">
                                                                    <div class="df-timeline__event-info">
                                                                        <div class="df-timeline__event-name">{{$club->club}}</div>
                                                                        <div class="df-timeline__event-desc">{{$club->season}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="df-timeline__time"><img
                                                                            src="{{asset('images/SZS-club-logo.png')}}"
                                                                            width="70" height="70" alt=""
                                                                            class="df-timeline__event-icon"></div>
                                                            </div>

                                                        @endforeach

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Timeline / End -->

                                            <div class="widget-game-result__section">
                                                <header class="widget-game-result__subheader card__subheader-alt card__subheader card__subheader--sm card__subheader--nomargins">
                                                    <h5 class="widget-game-result__subtitle">Aktuelni klub: <a
                                                                href="{{ isset($player->club->id) ? url('clubs/'.$player->club->id) : '#' }}">{{$player->club->name or 'Nema klub'}}</a></h5>
                                                </header>
                                            </div>

                                        </div>
                                    </aside>
                                    <!-- Widget: Game Result / End -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-alt1"/>
                                        </div>
                                    </div>

                                    @if($player->video)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget__title card__header istaknute-licnosti-naslov">
                                                    <h4><i class="fa fa-play-circle-o"></i> Video prezentacija</h4>
                                                </div>
                                                <embed class="video-home"
                                                       src="{{ $player->video }}">
                                            </div>
                                        </div>
                                    @endif


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

                                        <figure class="post__thumbnail">
                                            <img class="vitrina-slika" src="{{asset('images/a1-photo-vremeplov.png')}}"
                                                 alt="">
                                        </figure>
                                        <header class="post__header">
                                            <h2 class="post__title">Auto biografija</h2>
                                        </header>

                                        <div class="post__content">
                                            {{  $player->biography or 'Biografija nije unesena.' }}
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
                                        @foreach($player->trophies as $trophy)

                                            <div class="col-md-3">
                                                <div class="awards__item">
                                                    <figure class="awards__figure awards__figure--space">
                                                        <img src="{{asset('images/trophies/trofej.svg')}}" alt="">
                                                    </figure>
                                                    <div class="awards__desc">
                                                        <h5 class="awards__name">{{$trophy->competition_name}}</h5>
                                                        <div class="awards__date">{{$trophy->season}}</div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                    </div>
                                    <!-- Widget: Awards / End -->
                                </div>
                                <!-- Tab: Vitrina / End -->


                                <!-- Tab: Galerija -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}"
                                                 class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach($player->images as $image)

                                            <div class="album__item col-xs-6 col-sm-4">
                                                <div class="album__item-holder">
                                                    <a href="{{asset('images/galerija_sportista/' . $image->image)}}"
                                                       class="album__item-link mp_gallery">
                                                        <figure class="album__thumb">
                                                            <img src="{{asset('images/galerija_sportista/' . $image->image)}}"
                                                                 alt="">
                                                        </figure>
                                                        <div class="album__item-desc">
                                                            <img src="{{asset('images/icons/expand-square.svg')}}"
                                                                 class="pregled-slike" alt="">
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>

                                        @endforeach

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