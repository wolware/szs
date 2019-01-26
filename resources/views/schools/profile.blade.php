@extends('layouts.app',array('data' => $school))

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
                        <span class="player-info__first-name">{{ $school->nature }}</span>
                        <span class="player-info__last-name">{{ $school->name }}</span>
                    </h1>
                </div>

                <div class="player-info">

                    <!-- Player Photo -->
                    <div class="player-info__item player-info__item--photo">
                        <figure class="player-info__photo">
                            <img class="frontend-profilna-slika" src="{{ asset('images/school_logo/' . $school->logo) }}" alt="">
                        </figure>
                    </div>
                    <!-- Player Photo / End -->

                    <!-- Player Details -->
                    <div class="player-info__item player-info__item--details">

                        <div class="player-info__title player-info__title--desktop">
                            <h1 class="player-info__name">
                                <span class="player-info__first-name">{{ $school->nature }}</span>
                                <span class="player-info__last-name">{{ $school->name }}</span>
                            </h1>
                        </div>

                        <div class="player-info-details">
                            @if(Auth::check())
                                @if(Auth::user()->id == $school->user->id)
                                    <a href="{{ url('schools/' . $school->id . '/edit') }}" class="btn btn-primary-inverse btn-icon product__add-to-cart stats-klub-middle"><i class="fa fa-edit"></i> Uredi</a>
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
                                    <h6 class="btn-social-counter__title brojac-profil">{{$school->number_of_views}}</h6>
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
                                            <td class="lineup__num">God. osnivanja</td>
                                            <td class="lineup__name">{{ $school->established_in }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/stadium-icon.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Domaći teren</td>
                                            <td class="lineup__name"><a class="profil-poveznica" href="#">{{ $school->home_field }}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/trophy.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Takmičenje/Liga</td>
                                            <td class="lineup__name"><a class="profil-poveznica" href="#">{{ $school->competition }}</a></td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/gender-symbols.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Kategorija</td>
                                            <td class="lineup__name"><a class="profil-poveznica">{{ $school->category->name }}</a></td>
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
                                @if($school->facebook)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $school->facebook }}" class="btn-social-counter btn-social-counter--fb" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Facebook</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($school->twitter)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $school->twitter }}" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Twitter</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($school->instagram)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $school->instagram }}" class="btn-social-counter btn-social-counter--instagram" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-instagram"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Instagram</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($school->youtube)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $school->youtube }}" class="btn-social-counter btn-social-counter--yt" target="_blank">
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


                        <!-- Widget: Uzrasti info -->
                        <aside class="widget card card--has-table widget--sidebar widget-lineup-table">
                            <div class="widget__title card__header">
                                <h4><i class="fa fa-info-circle"></i> Uzrasti</h4>
                            </div>
                            <div class="widget__content card__content">

                                <!-- Uzrasti info -->
                                <div class="table-responsive">
                                    <table class="table lineup-table">
                                        <tbody>

                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/pionir.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Pioniri</td>
                                            <td class="lineup__name">{{ $school->pioniri ? 'Da' : 'Ne' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/kadet.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Kadeti</td>
                                            <td class="lineup__name">{{ $school->kadeti ? 'Da' : 'Ne' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{ asset('images/icons/junior.svg') }}" alt="">
                                            </td>
                                            <td class="lineup__num">Juniori</td>
                                            <td class="lineup__name">{{ $school->juniori ? 'Da' : 'Ne' }}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- Uzrasti info / End -->
                            </div>
                        </aside>
                        <!-- Widget: Uzrasti info / End -->

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
                                                <img class="flow-icons-012" src="{{asset('images/icons/phone-call.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Telefon 1</td>
                                            <td class="lineup__name">{{ $school->phone_1 or 'Nije ubačeno' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/phone-call.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Telefon 2</td>
                                            <td class="lineup__name">{{ $school->phone_2 or 'Nije ubačeno' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/fax-with-phone.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Fax</td>
                                            <td class="lineup__name">{{ $school->fax or 'Nije ubačeno' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/envelope.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">E-mail</td>
                                            <td class="lineup__name">{{ $school->email or 'Nije ubačeno' }}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/worldwide.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Web stranica</td>
                                            <td class="lineup__name"><a class="profil-poveznica" href="{{ $school->website }}">{{ $school->website or 'Nije ubačeno' }}</a></td>
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
                                                <img class="flow-icons-012" src="{{asset('images/icons/calendar-add-event-button-with-plus-sign.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Dio SveZaSport</td>
                                            <td class="lineup__name">{{date('d.m.Y',$school->created_at->timestamp)}}</td>
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
                                                        <img src="{{asset('images/avatars/' . ($school->user->avatar ? $school->user->avatar : 'default_avatar.png'))}}" class="user-picture" alt="">
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <a href="{{url('/profile/'.$school->user->id)}}"> <h5 class="team-leader__player-name autor-slika">{{$school->user->name}}</h5></a>
                                                        @if(Auth::check() && Auth::user()->id != $school->user->id)
                                                            <a href="{{url('/messages/create?user='.$school->user->id.'&email='.$school->user->email)}}"><i
                                                                        class="fa fa-envelope"></i> Pošalji poruku</a>
                                                        @endif
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
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O školi</small>Općenito</a></li>
                                <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Školski</small>Vremeplov</a></li>
                                <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i class="fa fa-trophy"></i><small>Trofejna</small>Vitrina</a></li>
                                <li role="presentation"><a href="#tab-igraci" role="tab" data-toggle="tab"><i class="fa fa-users"></i><small>Naši</small>Igrači</a></li>
                                <li role="presentation"><a href="#tab-menadzment1" role="tab" data-toggle="tab"><i class="fa fa-user-secret"></i><small>Školski</small>Menadžment</a></li>
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
                                                                <td class="lineup__name gadget-no-border">{{$school->city}}</td>
                                                            </tr>
                                                            @if($school->regions->has('municipality'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/opcina.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Općina</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $school->regions->get('municipality') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($school->regions->has('region'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/placeholder.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Kanton/Regija</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $school->regions->get('region') }}</td>
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
                                                            @if($school->regions->has('province'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/map.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Entitet/Pokrajina</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $school->regions->get('province') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($school->regions->has('country'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/earth.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Država</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $school->regions->get('country') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($school->regions->has('continent'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/international-delivery.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Kontinent</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $school->regions->get('continent') }}</td>
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


                                    <!-- Izdvojene licnosti -->

                                    <div class="widget__title card__header istaknute-licnosti-naslov">
                                        <h4><i class="fa fa-certificate"></i> Naša djeca</h4>
                                    </div>

                                    <!-- Izdvojena licnost - Kartica -->
                                    <div class="team-roster team-roster--card team-roster--card-slider">
                                        @foreach($school->members as $member)
                                            <!-- Izdvojena licnost -->
                                                <div class="team-roster__item card card--no-paddings">
                                                    <div class="team-roster__content-wrapper">

                                                        <!-- Izdvojena licnost sika -->
                                                        <figure class="team-roster__player-img">
                                                            <img class="izdvojene-licnosti-slika" src="{{ asset('images/avatar_licnost/' . $member->avatar) }}" alt="">
                                                        </figure>
                                                        <!-- Izdvojena licnost slika / End-->

                                                        <!-- Izdvojena licnost sadrzaj -->
                                                        <div class="team-roster__content">

                                                            <!-- Izdvojena licnost detalji -->
                                                            <div class="team-roster__player-details">
                                                                <div class="team-roster__player-info">
                                                                    <h3 class="team-roster__player-name">
                                                                        <span class="team-roster__player-first-name">{{ $member->firstname }}</span>
                                                                        <span class="team-roster__player-last-name">{{ $member->lastname }}</span>
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                            <!-- Izdvojena licnost detalji / End -->

                                                            <!-- Izdvojena licnost info -->
                                                            <div class="team-roster__player-excerpt">
                                                                {{ $member->biography }}
                                                            </div>
                                                            <!-- Izdvojena licnost info / End -->
                                                        </div>
                                                        <!-- Izdvojena licnost sadrzaj / End -->

                                                    </div>
                                                </div>
                                                <!-- Izdvojena licnost / End -->
                                        @endforeach
                                    </div>
                                    <!-- Izdvojena licnost - Kartica / End -->

                                    <!-- Izdvojene licnosti / End -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ asset('images/REKLAMA-752-100.png') }}" class="reklama-klubovi"/>
                                        </div>
                                    </div>

                                    @if($school->video)
                                        @php
                                            $query_str = parse_url($school->video, PHP_URL_QUERY);
                                            parse_str($query_str, $query_params);
                                            $youtubeUrlId = $query_params['v'];
                                        @endphp
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget__title card__header istaknute-licnosti-naslov">
                                                    <h4><i class="fa fa-play-circle-o"></i> Video prezentacija</h4>
                                                </div>
                                                <iframe class="video-home" src="{{'https://www.youtube.com/embed/'.$youtubeUrlId}}"
                                                        width="560" height="315" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    @else
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="widget__title card__header istaknute-licnosti-naslov">
                                                    <h4><i class="fa fa-play-circle-o"></i> Video prezentacija</h4>
                                                </div>
                                                <iframe class="video-home" src="{{'https://www.youtube.com/embed/fKugdghAqVU'}}"
                                                        width="560" height="315" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    @endif
                                </div>


                                <!-- Tab: Vremeplov -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vremeplov">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ asset('images/REKLAMA-752-100.png') }}" class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <!-- Article -->
                                    <article class="card card--lg post post--single">
                                        {{ $school->history or 'Historija škole nije unesena' }}
                                    </article>
                                    <!-- Article / End -->

                                </div>
                                <!-- Tab: Vremeplov / End -->
                                <!-- Tab: Vitrina -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vitrina">
                                    <!-- Widget: Awards -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{ asset('images/REKLAMA-752-100.png') }}" class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach($school->trophies as $t)

                                            <div class="col-md-3">
                                                <div class="awards__item">
                                                    <figure class="awards__figure awards__figure--space">
                                                        <img src="{{asset('images/trophies/trofej.svg')}}" alt="">
                                                    </figure>
                                                    <div class="awards__desc">
                                                        <h5 class="awards__name">{{$t->competition_name}}</h5>
                                                        <div class="awards__date">Sezona {{$t->season}}</div>
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
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Zatvori obavijest"><span aria-hidden="true">&times;</span></button>
                                            <strong>Prikazuju se samo igrači koji posjeduju profile na Sve Za Sport mreži.</strong>
                                        </div>
                                    </div>

                                    <div class="row igraci-grid">
                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">Tuzla, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/dino-secic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Dino Šečić</a></h6>
                                                    <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/edin-music.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Edin Musić</a></h6>
                                                    <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/irfan-garic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Irfan Garić</a></h6>
                                                    <div class="posts__excerpt">Tešanj, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/profilna.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Nedim Tufekčić</a></h6>
                                                    <div class="posts__excerpt">Tuzla, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">Tuzla, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/dino-secic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Dino Šečić</a></h6>
                                                    <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/edin-music.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Edin Musić</a></h6>
                                                    <div class="posts__excerpt">Sarajevo, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/irfan-garic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Irfan Garić</a></h6>
                                                    <div class="posts__excerpt">Tešanj, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/profilna.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Nedim Tufekčić</a></h6>
                                                    <div class="posts__excerpt">Tuzla, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">Tuzla, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">Tuzla, Federacija BiH</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila igrača</a>
                                                </footer>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Igrači stranice -->
                                    <nav class="post-pagination text-center">
                                        <ul class="pagination pagination--condensed pagination--lg">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Igrači stranice / End -->

                                </div>
                                <!-- Tab: Igraci / End -->
                                <!-- Tab: Menadzment -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-menadzment1">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('images/REKLAMA-752-100.png')}}" class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="alert alert-warning alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Zatvori obavijest"><span aria-hidden="true">&times;</span></button>
                                            <strong>Prikazuju se samo kadrovi koji posjeduju profile na Sve Za Sport mreži.</strong>
                                        </div>
                                    </div>

                                    <div class="row igraci-grid">
                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">Sportski direktor</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/dino-secic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Dino Šečić</a></h6>
                                                    <div class="posts__excerpt">PR Menadžer</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/edin-music.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Edin Musić</a></h6>
                                                    <div class="posts__excerpt">Direktor</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/irfan-garic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Irfan Garić</a></h6>
                                                    <div class="posts__excerpt">Projekt menadžer</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/profilna.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Nedim Tufekčić</a></h6>
                                                    <div class="posts__excerpt">Trener</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">Računovođa</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/dino-secic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Dino Šečić</a></h6>
                                                    <div class="posts__excerpt">Asistent trenera</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/edin-music.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Edin Musić</a></h6>
                                                    <div class="posts__excerpt">Asistent direktora</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/irfan-garic.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Irfan Garić</a></h6>
                                                    <div class="posts__excerpt">Ekonom</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/profilna.JPG')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Nedim Tufekčić</a></h6>
                                                    <div class="posts__excerpt">Kondicioni trener</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">Asistent računovođe</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                        <div class="post-grid__item col-sm-4">
                                            <div class="posts__item posts__item--card posts__item--category-1 card kartica-igraca-klub">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="{{asset('images/tarik.jpg')}}" alt=""></a>
                                                </figure>
                                                <div class="posts__inner card__content">
                                                    <h6 class="posts__title ime-sportiste-klub-lista"><a href="#">Tarik Jašarević</a></h6>
                                                    <div class="posts__excerpt">HR menadžer</div>
                                                </div>
                                                <footer class="posts__footer card__footer">
                                                    <a href="#" class="btn btn-warning btn-profil-igraca"><i class="fa fa-eye"></i> Pregled profila kadra</a>
                                                </footer>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Menadzment stranice -->
                                    <nav class="post-pagination text-center">
                                        <ul class="pagination pagination--condensed pagination--lg">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </nav>
                                    <!-- Menadzment stranice / End -->

                                </div>
                                <!-- Tab: Menadzment / End -->
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
                                        @foreach($school->images as $g)

                                            <div class="album__item col-xs-6 col-sm-4">
                                                <div class="album__item-holder">
                                                    <a href="{{asset('images/galerija_skola/' . $g->image)}}" class="album__item-link mp_gallery">
                                                        <figure class="album__thumb">
                                                            <img src="{{asset('images/galerija_skola/' . $g->image)}}" alt="">
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

    <!-- Content / End -->

@endsection