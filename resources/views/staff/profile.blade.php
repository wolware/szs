@extends('layouts.app')

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
                        <span class="player-info__first-name">{{ $staff->profession->name }}</span>
                        <span class="player-info__last-name">{{ $staff->firstname . ' ' . $staff->lastname}}</span>
                    </h1>
                </div>

                <div class="player-info">

                    <!-- Player Photo -->
                    <div class="player-info__item player-info__item--photo">
                        <figure class="player-info__photo">
                            <img class="frontend-profilna-slika-a1" src="{{ asset('images/staff_avatars/' . $staff->avatar) }}" alt="">
                        </figure>
                    </div>
                    <!-- Player Photo / End -->

                    <!-- Player Details -->
                    <div class="player-info__item player-info__item--details">

                        <div class="player-info__title player-info__title--desktop">
                            <h1 class="player-info__name">
                                <span class="player-info__first-name">{{ $staff->profession->name }}</span>
                                <span class="player-info__last-name">{{ $staff->firstname . ' ' . $staff->lastname}}</span>
                            </h1>
                        </div>

                        <div class="player-info-details">
                            @if(Auth::check())
                                @if(Auth::user()->id == $staff->user->id)
                                    <a href="{{ url('/staff/' . $staff->id . '/edit' ) }}" class="btn btn-primary-inverse btn-icon product__add-to-cart stats-klub-middle"><i class="fa fa-edit"></i> Uredi</a>
                                @endif
                            @endif
                            <a href="#" class="btn btn-primary-inverse btn-icon product__add-to-cart"><i class="fa fa-share-alt"></i> Podijeli</a>
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
                                    <h6 class="btn-social-counter__title brojac-profil">256589</h6>
                                    <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Pregleda</span>
                                </a>
                                <a class="btn-widget-stats">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-share-alt"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title brojac-profil">4645</h6>
                                    <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Podjela</span>
                                </a>
                                <a class="btn-widget-stats">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title brojac-profil">55212</h6>
                                    <span class="btn-social-counter__count"><span class="btn-social-counter__count-num"></span> Sviđanja</span>
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
                                                <img class="flow-icons-012" src="{{ asset('images/icons/small-calendar.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Datum rođenja</td>
                                            <td class="lineup__name">{{\Carbon\Carbon::parse($staff->date_of_birth)->format('d.m.Y.')}}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/klubovi-icon.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Klub</td>
                                            <td class="lineup__name"><a class="profil-poveznica" href="{{ isset($staff->current_club) ? '/clubs/' . $staff->current_club->id : '#' }}">{{ isset($staff->current_club) ? $staff->current_club->name : ( isset($staff->club_name) ? $staff->club_name : 'Nema klub')}}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/zanimanje.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Zanimanje</td>
                                            <td class="lineup__name">{{ $staff->profession->name }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/graduation-cap.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Obrazovanje</td>
                                            <td class="lineup__name">{{ $staff->education or 'Nema obrazovanje' }}</td>
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
                            @if($staff->facebook)
                            <div class="col-md-6 profili-soc-mreza">
                                <a href="{{ $staff->facebook }}" class="btn-social-counter btn-social-counter--fb" target="_blank">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title">Facebook</h6>
                                </a>
                            </div>
                            @endif
                            @if($staff->twitter)
                            <div class="col-md-6 profili-soc-mreza">
                                <a href="{{ $staff->twitter }}" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title">Twitter</h6>
                                </a>
                            </div>
                            @endif
                            @if($staff->instagram)
                            <div class="col-md-6 profili-soc-mreza">
                                <a href="{{ $staff->instagram }}" class="btn-social-counter btn-social-counter--instagram" target="_blank">
                                    <div class="btn-social-counter__icon">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                    <h6 class="btn-social-counter__title">Instagram</h6>
                                </a>
                            </div>
                            @endif
                            @if($staff->youtube)
                            <div class="col-md-6 profili-soc-mreza">
                                <a href="{{ $staff->youtube }}" class="btn-social-counter btn-social-counter--yt" target="_blank">
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
                                                <img class="flow-icons-012" src="{{ asset('images/icons/graduation-cap.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Dodatno obrazovanje</td>
                                            <td class="lineup__name">{{ $staff->education or 'Nema dodatno obrazovanje' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/certifikat.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Certifikati</td>
                                            <td class="lineup__name">{{ $staff->number_of_certificates or 'Nema' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/idea.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Sportski projekti</td>
                                            <td class="lineup__name">{{ $staff->number_of_projects or 'Nema' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/zanimanje.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Rad u struci</td>
                                            <td class="lineup__name">{{ $staff->work_experience }} godine</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/translate.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Strani jezici</td>
                                            <td class="lineup__name">
                                                @if($staff->languages)
                                                    @foreach($staff->languages as $key => $language)
                                                        @if($key < sizeof($staff->languages) - 1)
                                                            {{ $language->name . ',' }}
                                                        @else
                                                            {{ $language->name }}
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </td>
                                        </tr>

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
                                                <img class="flow-icons-012" src="{{asset('images/icons/tag.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">ID kadra</td>
                                            <td class="lineup__name">{{$staff->id}}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/calendar-add-event-button-with-plus-sign.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Dio SveZaSport</td>
                                            <td class="lineup__name">{{ \Carbon\Carbon::parse($staff->created_at)->format('d. F, Y.') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/security-badge.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">SZS Klub mjeseca</td>
                                            <td class="lineup__name">5</td>
                                        </tr>

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
                                                        <img src="{{asset('images/avatars/' . ($staff->user->avatar ? $staff->user->avatar : 'default_avatar.png'))}}" class="user-picture" alt="">
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <h5 class="team-leader__player-name autor-slika">{{ $staff->user->name }}</h5>
                                                        <span class="team-leader__player-position"><i class="fa fa-tag"></i> 00502565</span>
                                                        <a href="#"><i class="fa fa-eye"></i> Pregled profila</a>  |  <a href="#"><i class="fa fa-envelope-open-o"></i> Poruka</a>
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
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O klubu</small>Općenito</a></li>
                                <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Auto</small>Biografija</a></li>
                                <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i class="fa fa-trophy"></i><small>Osobna</small>Vitrina</a></li>
                                <li role="presentation"><a href="#tab-vijesti2" role="tab" data-toggle="tab"><i class="fa fa-newspaper-o"></i><small>Povezane</small>Vijesti</a></li>
                                <li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Foto</small>Galerija</a></li>
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
                                                                    <img class="flow-icons-012" src="{{asset('images/icons/office-block.svg')}}" alt="">
                                                                </td>
                                                                <td class="lineup__num gadget-no-border">Grad/Mjesto</td>
                                                                <td class="lineup__name gadget-no-border">{{$staff->city}}</td>
                                                            </tr>
                                                            @if($staff->regions->has('municipality'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/opcina.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Općina</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $staff->regions->get('municipality') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($staff->regions->has('region'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/placeholder.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Kanton/Regija</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $staff->regions->get('region') }}</td>
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
                                                            @if($staff->regions->has('province'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/map.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Entitet/Pokrajina</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $staff->regions->get('province') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($staff->regions->has('country'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/earth.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Država</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $staff->regions->get('country') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($staff->regions->has('continent'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/international-delivery.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Kontinent</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $staff->regions->get('continent') }}</td>
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
                                                        <h3 class="widget-game-result__title">Poslovna historija</h3>
                                                        <time class="widget-game-result__date" datetime="2016-03-24">Timeline promjene poslovnih mjesta</time>
                                                    </header>
                                                </div>
                                            </div>
                                            <!-- Game Score / End -->

                                            <!-- Timeline -->
                                            <div class="widget-game-result__section">

                                                <div class="df-timeline-wrapper">
                                                    <div class="df-timeline">

                                                        <div class="df-timeline__event df-timeline__event--empty"></div>

                                                        @foreach($staff->work_history as $key => $history)
                                                            <div class="df-timeline__event">
                                                                <div class="df-timeline__team-{{ $key % 2 == 0 ? '1' : '2' }}">
                                                                    <div class="df-timeline__event-info">
                                                                        <div class="df-timeline__event-name">{{ $history->club }}</div>
                                                                        <div class="df-timeline__event-desc">{{ $history->season }}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="df-timeline__time"><img src="{{asset('images/SZS-club-logo.png')}}" width="70" height="70" alt="" class="df-timeline__event-icon"></div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- Timeline / End -->

                                            <div class="widget-game-result__section">
                                                <header class="widget-game-result__subheader card__subheader-alt card__subheader card__subheader--sm card__subheader--nomargins">
                                                    <h5 class="widget-game-result__subtitle">Aktuelni klub/organizacija: <a href="{{ isset($staff->current_club) ? '/clubs/' . $staff->current_club->id : '#' }}">{{ isset($staff->current_club) ? $staff->current_club->name : ( isset($staff->club_name) ? $staff->club_name : 'Nema klub')}}</a></h5>
                                                </header>
                                            </div>

                                        </div>
                                    </aside>
                                    <!-- Widget: Game Result / End -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-alt1"/>
                                        </div>
                                    </div>

                                    @if($staff->video)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget__title card__header istaknute-licnosti-naslov">
                                                    <h4><i class="fa fa-play-circle-o"></i> Video prezentacija</h4>
                                                </div>
                                                <embed class="video-home"
                                                       src="{{ $staff->video }}">
                                            </div>
                                        </div>
                                    @endif


                                </div>


                                <!-- Tab: Vremeplov -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vremeplov">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <!-- Article -->
                                    <article class="card card--lg post post--single">

                                        <figure class="post__thumbnail">
                                            <img class="vitrina-slika" src="{{asset('images/a1-photo-vremeplov.png')}}" alt="">
                                        </figure>
                                        <header class="post__header">
                                            <h2 class="post__title">Auto biografija</h2>
                                        </header>

                                        <div class="post__content">
                                            {{  $staff->biography or 'Biografija nije unesena.' }}
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
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach($staff->trophies as $trophy)

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


                                <!-- Tab: Vijesti -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vijesti2">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>


                                    <!-- Posts List -->
                                    <div class="posts posts--cards posts--cards-thumb-left post-list">

                                        <div class="post-list__item">
                                            <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                                                <figure class="vijesti__thumb">
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="card__content osn-vijest-tab">
                                                        <div class="posts__cat">
                                                            <span class="label posts__cat-label">Premier Liga BiH</span>
                                                        </div>
                                                        <h6 class="posts__title"><a href="#">FK Sve Za Sport nanizao četiri ligaške pobjede za redom</a></h6>
                                                        <time datetime="2016-08-23" class="posts__date">25. Oktobar, 2017.</time>
                                                    </div>
                                                    <footer class="posts__footer card__footer">
                                                        <div class="post-author">
                                                            <figure class="post-author__avatar">
                                                                <img src="{{asset('images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach($staff->images as $image)

                                            <div class="album__item col-xs-6 col-sm-4">
                                                <div class="album__item-holder">
                                                    <a href="{{asset('images/galerija_kadrovi/' . $image->image)}}" class="album__item-link mp_gallery">
                                                        <figure class="album__thumb">
                                                            <img src="{{asset('images/galerija_kadrovi/' . $image->image)}}" alt="">
                                                        </figure>
                                                        <div class="album__item-desc">
                                                            <img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt="">
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