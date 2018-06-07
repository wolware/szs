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
                        <span class="player-info__first-name">{{ $object->type->description }}</span>
                        <span class="player-info__last-name">{{ $object->name }}</span>
                    </h1>
                </div>

                <div class="player-info">

                    <!-- Player Photo -->
                    <div class="player-info__item player-info__item--photo">
                        <figure class="player-info__photo">
                            <img class="frontend-profilna-slika-a1" src="{{asset('images/object_avatars/' . $object->image)}}" alt="">
                        </figure>
                    </div>
                    <!-- Player Photo / End -->

                    <!-- Player Details -->
                    <div class="player-info__item player-info__item--details">

                        <div class="player-info__title player-info__title--desktop">
                            <h1 class="player-info__name">
                                <span class="player-info__first-name">{{ $object->type->description }}</span>
                                <span class="player-info__last-name">{{ $object->name }}</span>
                            </h1>
                        </div>

                        <div class="player-info-details">
                            @if(Auth::check())
                                @if(Auth::user()->id == $object->user->id)
                                    <a href="{{ url('/objects/' . $object->id . '/edit') }}" class="btn btn-primary-inverse btn-icon product__add-to-cart stats-klub-middle"><i class="fa fa-edit"></i> Uredi</a>
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
                                                <img class="flow-icons-012" src="{{asset('assets/images/icons/small-calendar.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Datum otvorenja</td>
                                            <td class="lineup__name">{{\Carbon\Carbon::parse($object->established_in)->format('d.m.Y.')}}</td>
                                        </tr>
                                        @foreach($object->object_data_general['data'] as $key => $data)
                                            <tr>
                                                <td class="lineup__info">
                                                    <img class="flow-icons-012" src="{{asset('images/icons/' . $object->object_data_general['names'][$key]['icon'])}}" alt="">
                                                </td>
                                                <td class="lineup__num">{{ $object->object_data_general['names'][$key]['label']['bs'] }}</td>
                                                @if(is_bool($data))
                                                    @if($data)
                                                        <td class="lineup__name">Da</td>
                                                    @else
                                                        <td class="lineup__name">Ne</td>
                                                    @endif
                                                @else
                                                    <td class="lineup__name">{{ $data or 'Nije uneseno' }}</td>
                                                @endif

                                            </tr>
                                        @endforeach
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
                                @if($object->facebook)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $object->facebook }}" class="btn-social-counter btn-social-counter--fb" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Facebook</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($object->twitter)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $object->twitter }}" class="btn-social-counter btn-social-counter--twitter" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Twitter</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($object->instagram)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $object->instagram }}" class="btn-social-counter btn-social-counter--instagram" target="_blank">
                                            <div class="btn-social-counter__icon">
                                                <i class="fa fa-instagram"></i>
                                            </div>
                                            <h6 class="btn-social-counter__title">Instagram</h6>
                                        </a>
                                    </div>
                                @endif
                                @if($object->youtube)
                                    <div class="col-md-6 profili-soc-mreza">
                                        <a href="{{ $object->youtube }}" class="btn-social-counter btn-social-counter--yt" target="_blank">
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
                                <h4><i class="fa fa-info-circle"></i> Osobine objekta</h4>
                            </div>
                            <div class="widget__content card__content">

                                <!-- Kontakt info -->
                                <div class="table-responsive">
                                    <table class="table lineup-table">
                                        <tbody>
                                        @foreach($object->object_data_additional['data'] as $key => $data)
                                            <tr>
                                                <td class="lineup__info">
                                                    <img class="flow-icons-012" src="{{asset('images/icons/' . $object->object_data_additional['names'][$key]['icon'])}}" alt="">
                                                </td>
                                                <td class="lineup__num">{{ $object->object_data_additional['names'][$key]['label']['bs'] }}</td>
                                                @if($key == 'rent_equipment')
                                                    @if($data)
                                                        <td class="lineup__name">Da</td>
                                                    @else
                                                        <td class="lineup__name">Ne</td>
                                                    @endif
                                                @else
                                                    <td class="lineup__name">{{ $data or 'Nije uneseno' }}</td>
                                                @endif
                                            </tr>
                                        @endforeach
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
                                            <td class="lineup__num">ID objekta</td>
                                            <td class="lineup__name">{{$object->id}}</td>
                                        </tr>
                                        <tr>
                                            <td class="lineup__info">
                                                <img class="flow-icons-012" src="{{asset('images/icons/calendar-add-event-button-with-plus-sign.svg')}}" alt="">
                                            </td>
                                            <td class="lineup__num">Dio SveZaSport</td>
                                            <td class="lineup__name">{{ \Carbon\Carbon::parse($object->created_at)->format('d. F, Y.') }}</td>
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
                                                        <img src="{{asset('images/avatars/' . $object->user->avatar)}}" alt="">
                                                    </figure>
                                                    <div class="team-leader__player-inner">
                                                        <h5 class="team-leader__player-name autor-slika">{{ $object->user->name }}</h5>
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
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O objektu</small>Općenito</a></li>
                                <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Vremeplov</small>Objekta</a></li>
                                @if($object->type->type == 'Balon')
                                    <li role="presentation"><a href="#tab-tereni" role="tab" data-toggle="tab"><i class="fa fa-window-restore"></i><small>Sale i</small>Tereni</a></li>
                                    <li role="presentation"><a href="#tab-cjenovnik-balon" role="tab" data-toggle="tab"><i class="fa fa-database"></i><small>Cjenovnik</small>Usluga</a></li>
                                @endif
                                @if($object->type->type == 'Skijalište')
                                    <li role="presentation"><a href="#tab-staze" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-road"></i><small>Staze i</small>Liftovi</a></li>
                                    <li role="presentation"><a href="#tab-cjenovnik-skijaliste" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-database"></i><small>Cjenovnik</small>Usluga</a></li>
                                @endif
                                <li role="presentation"><a href="#tab-eventi" role="tab" data-toggle="tab"><i class="fa fa-calendar-o"></i><small>Nadolazeći</small>Događaji</a></li>
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
                                                                <td class="lineup__name gadget-no-border">{{$object->city}}</td>
                                                            </tr>
                                                            @if($object->regions->has('municipality'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/opcina.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Općina</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $object->regions->get('municipality') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($object->regions->has('region'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/placeholder.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Kanton/Regija</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $object->regions->get('region') }}</td>
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
                                                            @if($object->regions->has('province'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/map.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Entitet/Pokrajina</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $object->regions->get('province') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($object->regions->has('country'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/earth.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Država</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $object->regions->get('country') }}</td>
                                                                </tr>
                                                            @endif
                                                            @if($object->regions->has('continent'))
                                                                <tr>
                                                                    <td class="lineup__info gadget-no-border">
                                                                        <img class="flow-icons-012" src="{{asset('images/icons/international-delivery.svg')}}" alt="">
                                                                    </td>
                                                                    <td class="lineup__num gadget-no-border">Kontinent</td>
                                                                    <td class="lineup__name gadget-no-border">{{ $object->regions->get('continent') }}</td>
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

                                    <!-- Game Scoreboard -->
                                    <div class="card">
                                        <header class="card__header card__header--has-btn podesavanje-razmaka">
                                            <h4><i class="fa fa-star-o"></i> Ocjene za sportski objekt</h4>
                                            <a href="#" class="btn btn-default btn-outline btn-xs card-header__button" data-toggle="modal" data-target="#ostaviOCJENU">Ostavi svoju ocjenu</a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="ostaviOCJENU" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">OCIJENI SPORTSKI OBJEKT</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img class="ikona-modal" src="{{asset('assets/images/icons/thumbs-up.svg')}}">
                                                        </div>

                                                        <div class="row ocijeni-modal">

                                                            <div class="col-md-4 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1">Cijena</span>
                                                                    <input type="number" min="1" max="10" class="form-control" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1">Usluga</span>
                                                                    <input type="number" min="1" max="10" class="form-control" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-xs-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon" id="basic-addon1">Uslovi</span>
                                                                    <input type="number" min="1" max="10" class="form-control" aria-describedby="basic-addon1">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 ocjena-info-alt-col2 col-xs-12">
                                                                <div class="alert alert-info">
                                                                    Jednom kada ostavite ocjenu istu više nećete moći mijenjati, zbog čega je vrlo važno da ocjena bude sportski korektna. Ocjena treba da bude isključivo stav osobe koja dodjeljuje istu.
                                                                </div>
                                                            </div>



                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default btn-zavrsi-modal-01" data-dismiss="modal"><i class="fa fa-times"></i> Odustani</button>
                                                            <button href="#" type="button" class="btn btn-default btn-close-modal-01" data-dismiss="modal"><i class="fa fa-check"></i> Objavi ocjenu</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Modal content / End -->
                                        </header>
                                        <div class="card__content">

                                            <!-- Game Result -->
                                            <div class="game-result">
                                                <section class="game-result__section">
                                                    <div class="game-result__content mb-0">
                                                        <div class="game-result__stats">
                                                            <div class="row">
                                                                <div class="col-xs-12 col-md-8">
                                                                    <div class="game-result__table-stats game-result__table-stats--soccer">
                                                                        <table class="table table-wrap-bordered table-thead-color tabela-szs-standardi">
                                                                            <thead>
                                                                            <tr>
                                                                                <th colspan="3">Standardi po SveZaSport-u</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                            @foreach($object->object_data_szs['data'] as $key => $data)
                                                                                <tr>
                                                                                    <td class="ocjena-szs-info">{{ $object->object_data_szs['names'][$key]['label']['bs'] }}</td>
                                                                                        @if($data)
                                                                                            <td class="ocjena-szs-ans">Da</td>
                                                                                        @else
                                                                                            <td class="ocjena-szs-ans">Ne</td>
                                                                                        @endif
                                                                                </tr>
                                                                            @endforeach
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xs-12 col-md-4 game-result__stats-team-2">
                                                                    <table class="table table-wrap-bordered table-thead-color">
                                                                        <thead>
                                                                        <tr>
                                                                            <th colspan="3">Ocjena korisnika</th>
                                                                        </tr>
                                                                        </thead>
                                                                    </table>
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-md-12">
                                                                            <div class="circular circular--size-100">
                                                                                <div class="circular__bar" data-percent="89" data-bar-color="#388e3c">
                                                                                    <span class="circular__percents">8,9</span>
                                                                                </div>
                                                                                <div class="col-md-12 col-xs-12 ocjena-info-alt-col">
                                                                                    <span class="ocjena-info-alt"> Max. ocjena: 10 | Ukupno ocjena: 143</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-xs-12 col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-9 col-xs-6 specs-ocjena"><img  src="{{asset('assets/images/icons/coins-money-stack.svg')}}" class="flow-icons-012 info-objekt-ikona"> Cijena termina</div>
                                                                            <div class="col-md-3 col-xs-6 info-ocjena">10.0</div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-9 col-xs-6 specs-ocjena"><img  src="{{asset('assets/images/icons/usluga.svg')}}" class="flow-icons-012 info-objekt-ikona"> Kvalitet usluge</div>
                                                                            <div class="col-md-3 col-xs-6 info-ocjena">9.4</div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-9 col-xs-6 specs-ocjena"><img  src="{{asset('assets/images/icons/fan.svg')}}" class="flow-icons-012 info-objekt-ikona"> Uslovi u objektu</div>
                                                                            <div class="col-md-3 col-xs-6 info-ocjena">7.3</div>
                                                                        </div>

                                                                    </div>

                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <!-- Game Timeline / End -->



                                        </div>
                                    </div>
                                    <!-- Game Scoreboard / End -->


                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-alt1"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget__title card__header istaknute-licnosti-naslov">
                                                <h4><i class="fa fa-play-circle-o"></i> Navigacija</h4>
                                            </div>
                                            <iframe src = "https://maps.google.com/maps?q={{ $object->latitude }},{{ $object->longitude }}&amp;output=embed" width="752" height="423" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>


                                </div>


                                <!-- Tab: Vremeplov -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vremeplov">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <!-- Article -->
                                    <article class="card card--lg post post--single">

                                        <figure class="post__thumbnail">
                                            <img class="vitrina-slika" src="{{asset('assets/images/a1-photo-vremeplov.png')}}" alt="">
                                        </figure>
                                        <header class="post__header">
                                            <h2 class="post__title">Vremeplov objekta</h2>
                                        </header>

                                        <div class="post__content">
                                            <p>{{$object->history or 'Historija nije unsesena.'}}</p>
                                        </div>
                                    </article>
                                    <!-- Article / End -->

                                </div>
                                <!-- Tab: Vremeplov / End -->

                                <!-- Tab: Staze i liftovi -->
                                @if($object->type->type == 'Balon')
                                    <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-tereni">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="widget__title card__header istaknute-licnosti-naslov">
                                                <h4><i class="fa fa-square-o"></i> Sportski tereni</h4>
                                            </div>
                                            <div class="card__content">
                                                <div class="card">
                                                    @if($object->fields)
                                                        @foreach($object->fields as $field)
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <header class="alc-staff__header">
                                                                        <h1 class="alc-staff__header-name">Sportski teren <span class="alc-staff__header-last-name">{{ $field->name }}</span></h1>
                                                                        <span class="alc-staff__header-role">{{ $field->sports }}</span>
                                                                    </header>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="alc-staff-inner">
                                                                        <!-- Details -->
                                                                        <dl class="alc-staff-details">
                                                                            <dt class="alc-staff-details__label">Vrsta podloge</dt>
                                                                            <dd class="alc-staff-details__value">{{ $field->type_of_field }}</dd>

                                                                            <dt class="alc-staff-details__label">Kapacitet korisnika</dt>
                                                                            <dd class="alc-staff-details__value">{{ $field->capacity or '-' }}</dd>

                                                                            <dt class="alc-staff-details__label">Kapacitet gledaoca</dt>
                                                                            <dd class="alc-staff-details__value">{{ $field->public_capacity or '-' }}</dd>

                                                                            <dt class="alc-staff-details__label">Dužina terena</dt>
                                                                            <dd class="alc-staff-details__value">{{ $field->length ? ($field->length . ' m') : '-' }}</dd>

                                                                            <dt class="alc-staff-details__label">Širina terena</dt>
                                                                            <dd class="alc-staff-details__value">{{ $field->width ? ($field->width . ' m') : '-' }}</dd>

                                                                        </dl>
                                                                        <!-- Details / End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Tab: Staze i liftovi / End -->
                                </div>
                                    <!-- Tab: cjenovnik -->
                                    <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-cjenovnik-balon">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-vitrina"/>
                                            </div>
                                        </div>

                                        <!-- Tickets -->
                                        <div class="card card--has-table">
                                            <div class="table-responsive">
                                                <table class="table table-hover team-schedule">
                                                    <thead>
                                                    <tr>
                                                        <th class="team-schedule__versus">Sport</th>
                                                        <th class="team-schedule__time">Naziv ili oznaka terena</th>
                                                        <th class="team-schedule__time">Cijena termina (60 min)</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if($object->prices)
                                                        @foreach($object->prices as $price)
                                                            <tr>
                                                                <td class="team-schedule__versus">
                                                                    <div class="team-meta">
                                                                        <div class="team-meta__info">
                                                                            <div class="team-meta__info">
                                                                                <h6 class="team-meta__name">{{ $price->sport }}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="team-schedule__time">{{ $price->name }}</td>
                                                                <td class="team-schedule__time">{{ $price->price_per_hour . ' KM' }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                        <!-- Tickets / End -->

                                    </div>
                                    <!-- Tab: cjenovnik / End -->
                                @endif

                                @if($object->type->type == 'Skijalište')

                                    <!-- Tab: Staze i liftovi -->
                                        <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-staze">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="{{ asset('images/REKLAMA-752-100.png') }}" class="reklama-klubovi-vitrina"/>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="widget__title card__header istaknute-licnosti-naslov">
                                                        <h4><i class="fa fa-road"></i> Ski staze</h4>
                                                    </div>

                                                    <div class="card__content">

                                                        <div class="card">

                                                            @if($object->tracks)
                                                                @foreach($object->tracks as $track)
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <header class="alc-staff__header">
                                                                            <h1 class="alc-staff__header-name">Staza <span class="alc-staff__header-last-name">{{ $track->name }}</span></h1>
                                                                            <span class="alc-staff__header-role">{{ $track->level }}</span>
                                                                        </header>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="alc-staff-inner">
                                                                            <!-- Details -->
                                                                            <dl class="alc-staff-details">
                                                                                <dt class="alc-staff-details__label">Dužina staze</dt>
                                                                                <dd class="alc-staff-details__value">{{ $track->length ? ($track->length . ' m') : '-'}}</dd>

                                                                                <dt class="alc-staff-details__label">Trajanje spusta</dt>
                                                                                <dd class="alc-staff-details__value">{{ $track->time ? ($track->time . ' min') : '-'}}</dd>

                                                                                <dt class="alc-staff-details__label">Tačka polazišta</dt>
                                                                                <dd class="alc-staff-details__value">{{ $track->start_point ? ($track->start_point . ' m') : '-'}}</dd>

                                                                                <dt class="alc-staff-details__label">Tačka izlaza</dt>
                                                                                <dd class="alc-staff-details__value">{{ $track->end_point ? ($track->end_point . ' m') : '-'}}</dd>

                                                                            </dl>
                                                                            <!-- Details / End -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Tab: Staze i liftovi / End -->
                                        </div>

                                        <!-- Tab: cjenovnik -->
                                        <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-cjenovnik-skijaliste">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img src="{{ asset('images/REKLAMA-752-100.png') }}" class="reklama-klubovi-vitrina"/>
                                                </div>
                                            </div>

                                            <!-- Tickets -->
                                            <div class="card card--has-table">
                                                <div class="table-responsive">
                                                    <table class="table table-hover team-schedule">
                                                        <thead>
                                                        <tr>
                                                            <th class="team-schedule__versus">Opis karte</th>
                                                            <th class="team-schedule__time">Cijena odrasli</th>
                                                            <th class="team-schedule__time">Cijena djeca</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if($object->prices)
                                                            @foreach($object->prices as $price)
                                                            <tr>
                                                                <td class="team-schedule__versus">
                                                                    <div class="team-meta">
                                                                        <div class="team-meta__info">
                                                                            <div class="team-meta__info">
                                                                                <h6 class="team-meta__name">{{ $price->description }}</h6>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="team-schedule__time">{{ $price->price.' KM' }}</td>
                                                                <td class="team-schedule__time">{{ $price->price_kids. ' KM' }}</td>
                                                            </tr>
                                                            @endforeach
                                                        @endif
                                                    </table>
                                                </div>
                                            </div>
                                            <!-- Tickets / End -->

                                        </div>
                                        <!-- Tab: cjenovnik / End -->

                                @endif

                                <!-- Tab: Vitrina -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-eventi">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-vitrina"/>
                                        </div>
                                    </div>

                                    <!-- Schedule & Tickets -->
                                    <div class="card card--has-table">
                                        <div class="table-responsive">
                                            <table class="table table-hover team-schedule">
                                                <thead>
                                                <tr>
                                                    <th class="team-schedule__date">Datum</th>
                                                    <th class="team-schedule__versus">Događaj</th>
                                                    <th class="team-schedule__time">Vrijeme</th>
                                                    <th class="team-schedule__venue">Opis događaja</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                <tr>
                                                    <td class="team-schedule__date">23. Februar, 2018.</td>
                                                    <td class="team-schedule__versus">
                                                        <div class="team-meta">
                                                            <div class="team-meta__info">
                                                                <div class="team-meta__info">
                                                                    <h6 class="team-meta__name"><a href="#">ŽOK Smeč Živinice - Žok Smeč Lukavac</a></h6>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td class="team-schedule__time">14:00</td>
                                                    <td class="team-schedule__venue">8. Kolo Premijer Lige BiH</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- Schedule & Tickets / End -->


                                </div>
                                <!-- Tab: Vitrina / End -->


                                <!-- Tab: Vijesti -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vijesti2">


                                    <div class="row">
                                        <div class="col-md-12">
                                            <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>


                                    <!-- Posts List -->
                                    <div class="posts posts--cards posts--cards-thumb-left post-list">

                                        <div class="post-list__item">
                                            <div class="posts__item vijest-col-col posts__item--card posts__item--category-1 card">
                                                <figure class="vijesti__thumb">
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('assets/images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
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
                                                                <img src="{{asset('assets/images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('assets/images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
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
                                                                <img src="{{asset('assets/images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('assets/images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
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
                                                                <img src="{{asset('assets/images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('assets/images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
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
                                                                <img src="{{asset('assets/images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                                    <a href="#"><img class="slika-vijest-tab" src="{{asset('assets/images/newspaper-laptop-hd-wallpaper_1920x1080.jpg')}}" alt=""></a>
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
                                                                <img src="{{asset('assets/images/tarik.jpg')}}" alt="Post Author Avatar">
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
                                            <img src="{{asset('assets/images/REKLAMA-752-100.png')}}" class="reklama-klubovi-igraci"/>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach($object->images as $g)
                                            <div class="album__item col-xs-6 col-sm-4">
                                                <div class="album__item-holder">
                                                    <a href="{{asset('images/galerija_objekti/'.$g->image)}}" class="album__item-link mp_gallery">
                                                        <figure class="album__thumb">
                                                            <img src="{{asset('images/galerija_objekti/' . $g->image)}}" alt="">
                                                        </figure>
                                                        <div class="album__item-desc">
                                                            <img src="{{asset('assets/images/icons/expand-square.svg')}}" class="pregled-slike" alt="">
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

    <!-- Footer
@endsection