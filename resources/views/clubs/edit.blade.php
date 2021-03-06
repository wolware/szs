@extends('layouts.app')

@section('content')


    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


    @include('includes.pushy-panel')

    <!-- Page Heading
    ================================================== -->
        <div class="page-heading objavi-steps">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="page-icon-objavi-title"><img src="{{asset('images/klubovi-fff.png')}}"></h1>
                        <h1 class="page-heading__title">Uredi Klub</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">Uredite profil objavljenog kluba</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content
        ================================================== -->
        <div class="site-content">
            <div class="container">

                <div class="row profil-content-b06">
                    <!-- Main content -->
                    <div class="sidebar col-md-12 overscreen">

                        <!-- Single Product Tabbed Content -->
                        <div class="product-tabs card card--xlg">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified nav-product-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab"
                                                                          data-toggle="tab"><i
                                                class="fa fa-info-circle"></i>
                                        <small>O klubu</small>
                                        Općenito</a></li>
                                <li role="presentation"><a href="#tab-licnosti" role="tab" data-toggle="tab"><i
                                                class="fa fa-certificate"></i>
                                        <small>Istaknute</small>
                                        Ličnosti</a></li>
                                <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i
                                                class="fa fa-history"></i>
                                        <small>Klupski</small>
                                        Vremeplov</a></li>
                                <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i
                                                class="fa fa-trophy"></i>
                                        <small>Trofejna</small>
                                        Vitrina</a></li>
                                <li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i
                                                class="fa fa-picture-o"></i>
                                        <small>Foto</small>
                                        Galerija</a></li>
                                <li role="presentation"><a href="#tab-dokaz" role="tab" data-toggle="tab"><i
                                                class="fa fa-picture-o"></i>
                                        <small>Dokaz</small>
                                        Vlasništva</a></li>
                                <li role="presentation"><a href="#tab-pozivnice" role="tab" data-toggle="tab"><i
                                                class="fa fa-envelope-open-o"></i>
                                        <small>Pozivnice i</small>
                                        Zahtjevi</a></li>
                            </ul>
                            <div class="row form-segment">
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <!-- Tab panes -->
                            <div class="tab-content card__content" id="tabs">


                                <!-- Tab: Općenito -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                    <form id="clubForm" role="form" action="{{ url('/clubs/'.$club->id.'/edit') }}"
                                          method="POST" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div class="row">

                                            <div class="row identitet-style">

                                                <div class="col-md-6 objavi-klub-logo-setup">

{{--                                                    <div class="col-md-12">--}}
                                                        @if(isset($club->logo))
                                                            <div class="alc-staff__photo">
                                                                <img class="slika-upload-klub"
                                                                     src="{{asset('images/club_logo/'.$club->logo)}}"
                                                                     alt="">
                                                            </div>
                                                        @endif

{{--                                                    </div>--}}

                                                    @include('partials.dropzone', [
                                                        'zoneID' => 'logo',
                                                        'zoneUploadUrl' => 'uploads',
                                                        'zoneDeleteUrl' => 'uploads',
                                                        'zoneLabel' => 'Identitet kluba',
                                                        'dzMessage' => 'Klikni ili prevuci logo kluba ovdje',
                                                        'dzDescription' => 'Logo se može prebaciti i drag & drop metodom.',
                                                        'maxFiles' => 1
                                                        ])
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group col-md-12">
                                                        <label for="ime-kluba"><img class="flow-icons-013"
                                                                                    src="{{asset('images/icons/edit.svg')}}">
                                                            Ime/Naziv kluba*</label>
                                                        <input type="text" name="name" id="ime-kluba"
                                                               class="form-control" value="{{$club->name}}"
                                                               placeholder="Unesite ime/naziv kluba">
                                                    </div>
                                                    <div class="form-group has-success col-md-12">
                                                        <label for="karakter-kluba"><img class="flow-icons-013"
                                                                                         src="{{asset('images/icons/edit.svg')}}">
                                                            Karakter kluba*<span>(izmjenjivo)</span></label>
                                                        <input type="text" name="nature" id="karakter-kluba"
                                                               class="form-control" value="{{$club->nature}}"
                                                               placeholder="Unesite karakter kluba">
                                                        <span>Prilikom unosa karaktera kluba ne unositi kratice kao što su: FK, NK, KK, OK i sl.</span>
                                                    </div>

                                                </div>

                                            </div>


                                            <div class="row form-segment">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-location-arrow"></i> Navigacija</h4>
                                                </header>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="continent"><img class="flow-icons-013"
                                                                                src="{{asset('images/icons/international-delivery.svg')}}">
                                                        Kontinent*</label>
                                                    <select name="continent" class="form-control" id="continent">
                                                        <option selected disabled>Izaberite kontinent kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Continent')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ $club->regions->get('continent') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="country"><img class="flow-icons-013"
                                                                              src="{{asset('images/icons/earth.svg')}}">
                                                        Država*</label>
                                                    <select name="country" class="form-control"
                                                            id="country" {{ (old('country') || $club->regions->has('country')) ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite državu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Country')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ $club->regions->get('country') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="province"><img class="flow-icons-013"
                                                                               src="{{asset('images/icons/map.svg')}}">
                                                        Pokrajina*</label>
                                                    <select name="province" class="form-control"
                                                            id="province" {{ (old('province') || $club->regions->has('province')) ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite pokrajinu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Province')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ $club->regions->get('province') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="region"><img class="flow-icons-013"
                                                                             src="{{asset('images/icons/placeholder.svg')}}">
                                                        Regija*</label>
                                                    <select name="region" class="form-control"
                                                            id="region" {{ (old('region') || $club->regions->has('region')) ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite regiju kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Region')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ $club->regions->get('region') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="municipality"><img class="flow-icons-013"
                                                                                   src="{{asset('images/icons/opcina.svg')}}">
                                                        Općina*</label>
                                                    <select name="municipality" class="form-control"
                                                            id="municipality" {{ (old('municipality') || $club->regions->has('municipality')) ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite općinu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Municipality')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ $club->regions->get('municipality') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="mjesto"><img class="flow-icons-013"
                                                                             src="{{asset('images/icons/small-calendar.svg')}}">
                                                        Mjesto/Grad kluba*</label>
                                                    <input name="city" id="mjesto" class="form-control"
                                                           placeholder="Unesite mjesto kluba" value="{{ $club->city }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="club-type"><img class="flow-icons-013"
                                                                                src="{{asset('images/icons/klubovi-icon.svg')}}">
                                                        Tip kluba*</label>
                                                    <select name="type" class="form-control" id="club-type">
                                                        <option value=""
                                                                disabled {{ $club->sport == '' ? 'selected' : '' }}>
                                                            Izaberite tip kluba
                                                        </option>
                                                        <option value="1" {{ !$club->sport->with_disabilities ? 'selected' : '' }}>
                                                            Sportski klub
                                                        </option>
                                                        <option value="2" {{ $club->sport->with_disabilities ? 'selected' : '' }}>
                                                            Invalidski sportski klub
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="sport"><img class="flow-icons-013"
                                                                            src="{{asset('images/icons/menu-circular-button.svg')}}">
                                                        Sportovi*</label>
                                                    <select name="sport" class="form-control"
                                                            id="sport" {{ (old('sport') || $club->sport->id) ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite sport kluba</option>
                                                        @foreach($sports as $sport)
                                                            <option data-disabled="{{ $sport->with_disabilities }}"
                                                                    value="{{ $sport->id }}" {{ $club->sport->id == $sport->id ? 'selected' : '' }}>{{ $sport->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="club-category"><img class="flow-icons-013"
                                                                                    src="{{asset('images/icons/gender-symbols.svg')}}">
                                                        Kategorija kluba*</label>
                                                    <select name="category" class="form-control" id="club-category">
                                                        <option selected disabled>Izaberite sport kluba</option>
                                                        @foreach($clubCategories as $category)
                                                            <option value="{{ $category->id }}" {{ $club->category->id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
                                            </header>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="godina-osnivanja"><img class="flow-icons-013"
                                                                                   src="{{asset('images/icons/small-calendar.svg')}}">
                                                    Godina osnivanja kluba</label>
                                                <input type="number" name="established_in" id="godina-osnivanja"
                                                       class="form-control" placeholder="Unesite godinu osnivanja kluba"
                                                       value="{{$club->established_in}}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="domaci-teren"><img class="flow-icons-013"
                                                                               src="{{asset('images/icons/stadium-icon.svg')}}">
                                                    Domaći teren</label>
                                                <input type="text" name="home_field" id="domaci-teren"
                                                       class="form-control"
                                                       placeholder="Unesite naziv domaćeg terena kluba"
                                                       value="{{$club->home_field}}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="takmicenje"><img class="flow-icons-013"
                                                                             src="{{asset('images/icons/trophy.svg')}}">
                                                    Takmičenje</label>
                                                <input type="text" name="competition" id="takmicenje"
                                                       class="form-control"
                                                       placeholder="Unesite naziv takmičenja u kojem klub nastupa"
                                                       value="{{$club->competition}}">
                                            </div>

                                            <div class="form-group col-md-6" id="associations"
                                                 style="display: {{ $club->regions->has('country') && $club->sport ? 'block' : 'none' }};">
                                                <label><img class="flow-icons-013"
                                                            src="{{asset('images/icons/savez.svg')}}"> Savez kojem klub
                                                    pripada</label>
                                                <div class="form-group">
                                                    @foreach($associations as $association)
                                                        <label class="radio radio-inline"
                                                               style="display: {{ $club->regions->get('country') == $association->region_id && $club->sport_id == $association->sport_id ? 'inline-block' : 'none' }};">
                                                            <input type="radio"
                                                                   data-region="{{ $association->region_id }}"
                                                                   data-sport="{{ $association->sport_id }}"
                                                                   name="association"
                                                                   value="{{ $association->id }}" {{ ($club->association ? $club->association->id : NULL) == $association->id ? 'checked' : '' }}> {{ $association->name }}
                                                            <span class="radio-indicator"></span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-info-circle"></i> Kontakt informacije</h4>
                                            </header>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-md-4">
                                                <label for="tel1"><img class="flow-icons-013"
                                                                       src="{{asset('images/icons/phone-call.svg')}}">
                                                    Telefon 1</label>
                                                <input type="number" name="phone_1" id="tel1" class="form-control"
                                                       placeholder="Unesite broj za službeni telefon 1"
                                                       value="{{ $club->phone_1 }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="tel2"><img class="flow-icons-013"
                                                                       src="{{asset('images/icons/phone-call.svg')}}">
                                                    Telefon 2</label>
                                                <input type="number" name="phone_2" id="tel2" class="form-control"
                                                       placeholder="Unesite broj za službeni telefon 2"
                                                       value="{{ $club->phone_2 }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="fax"><img class="flow-icons-013"
                                                                      src="{{asset('images/icons/fax-with-phone.svg')}}">
                                                    Fax</label>
                                                <input type="number" name="fax" id="fax" class="form-control"
                                                       placeholder="Unesite broj za službeni fax"
                                                       value="{{ $club->fax }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="mail"><img class="flow-icons-013"
                                                                       src="{{asset('images/icons/envelope.svg')}}">
                                                    E-mail</label>
                                                <input type="email" name="email" id="mail" class="form-control"
                                                       placeholder="Unesite službeni E-mail" value="{{ $club->email }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="web"><img class="flow-icons-013"
                                                                      src="{{asset('images/icons/worldwide.svg')}}"> Web
                                                    stranica</label>
                                                <input type="text" name="website" id="web" class="form-control"
                                                       placeholder="Unesite link službene web stranice"
                                                       value="{{ $club->website }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="adresa"><img class="flow-icons-013"
                                                                         src="{{asset('images/icons/icon.svg')}}">
                                                    Adresa (ne prikazuje se)</label>
                                                <input type="text" name="address" id="adresa" class="form-control"
                                                       placeholder="Unesite adresu sjedišta kluba"
                                                       value="{{ $club->address }}">
                                            </div>


                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-share-alt"></i> Socijalne mreže</h4>
                                            </header>
                                        </div>
                                        <div class="row">


                                            <div class="form-group col-md-6">
                                                <label for="fcb"><img class="flow-icons-013"
                                                                      src="{{asset('images/icons/facebook.svg')}}">
                                                    Facebook stranica</label>
                                                <input type="text" name="facebook" id="fcb" class="form-control"
                                                       placeholder="Unesite link službenog facebook profila"
                                                       value="{{ $club->facebook }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="twt"><img class="flow-icons-013"
                                                                      src="{{asset('images/icons/twitter.svg')}}">
                                                    Twitter profil</label>
                                                <input type="text" name="twitter" id="twt" class="form-control"
                                                       placeholder="Unesite link službenog twitter profila"
                                                       value="{{ $club->twitter }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="inst"><img class="flow-icons-013"
                                                                       src="{{asset('images/icons/instagram.svg')}}">
                                                    Instagram profil</label>
                                                <input type="text" name="instagram" id="inst" class="form-control"
                                                       placeholder="Unesite link službenog instagram profila"
                                                       value="{{ $club->instagram }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="yt"><img class="flow-icons-013"
                                                                     src="{{asset('images/icons/youtube.svg')}}">
                                                    YouTUBE profil</label>
                                                <input type="text" name="youtube" id="yt" class="form-control"
                                                       placeholder="Unesite link službenog YouTUBE kanala"
                                                       value="{{ $club->youtube }}">
                                            </div>


                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-youtube-play"></i> Video prezentacija</h4>
                                            </header>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="videoprez"><img class="flow-icons-013"
                                                                            src="{{asset('images/icons/play-button.svg')}}">
                                                    Video prezentacija</label>
                                                <input type="text" name="video" id="videoprez" class="form-control"
                                                       placeholder="Unesite link videa (YouTUBE)"
                                                       value="{{ $club->video }}">
                                            </div>
                                            <button type="submit" class="btn btn-default btn-sm btn-block btn-spasi"><i
                                                        class="fa fa-plus-circle"></i> Spremi
                                            </button>
                                        </div>

                                    </form>
                                </div>


                                <!-- Tab: Općenito / End -->

                                <!-- Tab: Ličnosti -->
                                <div role="tabpanel" class="tab-pane fade" id="tab-licnosti">
                                    <form id="editLicnosti" role="form" action="{{ url('/licnost/edit/' . $club->id) }}"
                                          method="POST" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div id="dodajLicnostButtons" class="row">
                                            <div id="licnostiLista">
                                                @if($club->club_staff)
                                                    @foreach($club->club_staff as $key => $licnost)
                                                        @include('partials.new_figure', ['licnostiCount' => $key])
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="button" id="dodajLicnost">Dodaj
                                                    ličnost
                                                </button>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-sm btn-block btn-spasi"><i
                                                    class="fa fa-plus-circle"></i> Spremi ličnosti
                                        </button>
                                    </form>
                                </div>
                                <!-- Kadar 01 -->

                                <!-- Kadar 01 / End-->
                                <!-- Kadar 02 -->

                                <!-- Kadar 05 / End-->


                                <!-- Tab: Ličnosti / End -->

                                <!-- Tab: Vremeplov -->

                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vremeplov">
                                    @if(count($club->histories))
                                        <form id="editClubHistory" role="form"
                                              action="{{ url('/vremeplov/edit/' . $club->histories[0]->id) }}"
                                              method="POST" enctype="multipart/form-data">
                                            @else
                                                <form id="editClubHistory" role="form"
                                                      action="{{ url('/vremeplov/add/' . $club->id) }}" method="POST"
                                                      enctype="multipart/form-data">
                                                    @endif
                                                    {!! csrf_field() !!}
                                                    <div class="row">
                                                        <div class="row identitet-style">
                                                            <div class="col-md-12">
                                                                <div class="form-group col-md-12">
                                                                    <label for="opis"><img class="flow-icons-013"
                                                                                           src="{{asset('images/icons/edit.svg')}}">
                                                                        Vremeplov</label>
                                                                    <textarea class="form-control" rows="20"
                                                                              name="history" id="opis"
                                                                              placeholder="Upišite ukratko informacije vezane za historijat vašeg kluba i njegovu tradiciju...">{{count($club->histories) ? $club->histories[0]->content : ''}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit"
                                                            class="btn btn-default btn-sm btn-block btn-spasi"><i
                                                                class="fa fa-plus-circle"></i> Spremi vremeplov
                                                    </button>
                                                </form>
                                </div>

                                <!-- Tab: Vremeplov / End -->

                                <!-- Tab: Vitrina -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vitrina">
                                    <form id="editClubTrophies" role="form"
                                          action="{{ url('/trofej/edit/' . $club->id) }}" method="POST"
                                          enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="row form-segment">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-plus-circle"></i> Unos osvojenog trofeja/nagrade
                                                    </h4>
                                                </header>
                                            </div>
                                            <div id="nagradeLista">
                                                @if($club->trophies)
                                                    @foreach($club->trophies as $key => $nagrada)
                                                        <div class="row nagradaHover" data-key="{{ $key }}">
                                                            <input type="hidden" name="nagrada[{{ $key }}][id]"
                                                                   value="{{ $nagrada->id }}">
                                                            <div class="izbrisiNagradu"><i
                                                                        class="fa fa-times-circle-o"></i></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-6">
                                                                    <label for="vrsta-nagrade"><img
                                                                                class="flow-icons-013"
                                                                                src="{{ asset('images/icons/medalja.svg') }}">
                                                                        Vrsta nagrade</label>
                                                                    <select name="nagrada[{{ $key }}][vrsta]"
                                                                            class="form-control">
                                                                        <option value="" {{ $nagrada->type == '' ? 'selected' : '' }}>
                                                                            Izaberite vrstu osvojene nagrade
                                                                        </option>
                                                                        <option value="Medalja" {{ $nagrada->type == 'Medalja' ? 'selected' : '' }}>
                                                                            Medalja
                                                                        </option>
                                                                        <option value="Trofej/Pehar" {{ $nagrada->type == 'Trofej/Pehar' ? 'selected' : '' }}>
                                                                            Trofej/Pehar
                                                                        </option>
                                                                        <option value="Priznanje" {{ $nagrada->type == 'Priznanje' ? 'selected' : '' }}>
                                                                            Priznanje
                                                                        </option>
                                                                        <option value="Plaketa" {{ $nagrada->type == 'Plaketa' ? 'selected' : '' }}>
                                                                            Plaketa
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="tip-nagrade"><img class="flow-icons-013"
                                                                                                  src="{{ asset('images/icons/medalja.svg') }}">
                                                                        Tip nagrade</label>
                                                                    <select name="nagrada[{{ $key }}][tip]"
                                                                            class="form-control">
                                                                        <option value="" {{ $nagrada->place == '' ? 'selected' : '' }}>
                                                                            Izaberite tip nagrade
                                                                        </option>
                                                                        <option value="Zlato" {{ $nagrada->place == 'Zlato' ? 'selected' : '' }}>
                                                                            Zlato (1. mjesto)
                                                                        </option>
                                                                        <option value="Srebro" {{ $nagrada->place == 'Srebro' ? 'selected' : '' }}>
                                                                            Srebro (2. mjesto)
                                                                        </option>
                                                                        <option value="Bronza" {{ $nagrada->place == 'Bronza' ? 'selected' : '' }}>
                                                                            Bronza (3. mjesto)
                                                                        </option>
                                                                        <option value="Ostalo" {{ $nagrada->place == 'Ostalo' ? 'selected' : '' }}>
                                                                            Ostalo
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="tip-nagrade"><img class="flow-icons-013"
                                                                                                  src="{{ asset('images/icons/medalja.svg') }}">
                                                                        Nivo takmičenja</label>
                                                                    <select name="nagrada[{{ $key }}][nivo]"
                                                                            class="form-control">
                                                                        <option value="" {{ $nagrada->level_of_competition == '' ? 'selected' : '' }}>
                                                                            Izaberite nivo takmičenja
                                                                        </option>
                                                                        <option value="Internacionalni nivo" {{ $nagrada->level_of_competition == 'Internacionalni nivo' ? 'selected' : '' }}>
                                                                            Internacionalni nivo
                                                                        </option>
                                                                        <option value="Regionalni nivo" {{ $nagrada->level_of_competition == 'Regionalni nivo' ? 'selected' : '' }}>
                                                                            Regionalni nivo
                                                                        </option>
                                                                        <option value="Državni nivo" {{ $nagrada->level_of_competition == 'Državni nivo' ? 'selected' : '' }}>
                                                                            Državni nivo
                                                                        </option>
                                                                        <option value="Entitetski nivo" {{ $nagrada->level_of_competition == 'Entitetski nivo' ? 'selected' : '' }}>
                                                                            Entitetski nivo
                                                                        </option>
                                                                        <option value="Drugo" {{ $nagrada->level_of_competition == 'Drugo' ? 'selected' : '' }}>
                                                                            Drugo
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="takmicenje"><img class="flow-icons-013"
                                                                                                 src="{{ asset('images/icons/trophy.svg') }}">
                                                                        Naziv takmičenja</label>
                                                                    <input type="text"
                                                                           name="nagrada[{{ $key }}][takmicenje]"
                                                                           class="form-control"
                                                                           placeholder="Unesite naziv takmicenja za koje je osvojena nagrada"
                                                                           value="{{ $nagrada->competition_name }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="sezona"><img class="flow-icons-013"
                                                                                             src="{{ asset('images/icons/small-calendar.svg') }}">
                                                                        Sezona/Godina</label>
                                                                    <input type="text"
                                                                           name="nagrada[{{ $key }}][sezona]"
                                                                           class="form-control"
                                                                           placeholder="Unesite Sezonu/Godinu osvajanja trofeja"
                                                                           value="{{ $nagrada->season }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="osvajanja"><img class="flow-icons-013"
                                                                                                src="{{ asset('images/icons/the-sum-of.svg') }}">
                                                                        Broj osvajanja</label>
                                                                    <input type="number"
                                                                           name="nagrada[{{ $key }}][osvajanja]"
                                                                           class="form-control"
                                                                           placeholder="Unesite broj osvajanja trofeja"
                                                                           value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="button" id="dodajNagradu">Dodaj
                                                    trofej
                                                </button>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-sm btn-block btn-spasi"><i
                                                    class="fa fa-plus-circle"></i> Spremi trofeje
                                        </button>
                                    </form>
                                </div>
                                <!-- Tab: Vitrina / End -->

                                <!-- Tab: Foto galerija -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">
                                    <form id="editClubGallery" role="form"
                                          action="{{ url('/galerija/edit/' . $club->id) }}" method="POST"
                                          enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div class="row dodavanje-slika">
                                            @include('partials.dropzone', [
                                                'zoneID' => 'galerija',
                                                'zoneUploadUrl' => 'uploads',
                                                'zoneDeleteUrl' => 'uploads',
                                                'zoneLabel' => 'Dodajte slike u Vašu galeriju',
                                                'dzDescription' => 'Fotografije se mogu prebaciti i drag & drop metodom.',
                                                'maxFiles' => 100
                                                ])

                                            <div class="info001">
                                                <p class="info-upload-slike">Preporučena dimenzija za vaše
                                                    slike:</p>
                                                <p class="info-upload-slike">1920x1080 px</p>
                                            </div>
                                        </div>
                                        <div class="row form-objavi-klub-01">
                                            @foreach($club->images as $slika)
                                                <div class="album__item col-xs-6 col-sm-3">
                                                    <div class="album__item-holder">
                                                        <a href="{{asset('images/galerija_klub/' . $slika->image)}}"
                                                           class="album__item-link mp_gallery">
                                                            <figure class="album__thumb">
                                                                <img src="{{asset('images/galerija_klub/' . $slika->image)}}"
                                                                     alt="">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="submit" class="btn btn-default btn-sm btn-block btn-spasi"><i
                                                    class="fa fa-plus-circle"></i> Spremi galeriju
                                        </button>
                                    </form>
                                    <div class="row">
                                        <div class="form-group form-group--submit col-md-6">
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">USPJEŠNO STE SPREMILI IZMJENE</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <img class="ikona-modal" src="/images/icons/save.svg">
                                                            <p class="bravo-info">Izmjene koje ste napravili su
                                                                spremljene.</p>
                                                            <p class="bravo-hello">Sportski pozdrav!</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                    class="btn btn-default btn-close-modal-01"
                                                                    data-dismiss="modal"><i class="fa fa-times"></i>
                                                                Zatvori prozor
                                                            </button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Modal content / End -->
                                        </div>
                                    </div>

                                </div>
                                <!-- Tab: Foto galerija / End -->

                                <!-- Tab: Dokaz vlasništva -->
                                <div role="tabpanel" class="tab-pane fade" id="tab-dokaz">
                                    <form id="editClubProof" role="form" action="{{ url('/proof/edit/' . $club->id) }}"
                                          method="POST" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-warning alert-dismissible">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                            aria-label="Zatvori obavijest"><span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <strong>Unesite sliku ili slike koje dokazuje da ste baš Vi vlasnik
                                                        ovog kluba kako bi naša administracija odobrila Vaš klub na
                                                        mreži Sve Za Sport.</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row dodavanje-slika">
                                            @include('partials.dropzone', [
                                                 'zoneID' => 'proof',
                                                 'zoneUploadUrl' => 'uploads',
                                                 'zoneDeleteUrl' => 'uploads',
                                                 'zoneLabel' => 'Dodajte slike koje dokazuju da ste Vi vlasnik kluba *',
                                                 'dzDescription' => 'Fotografije se mogu prebaciti i drag & drop metodom.',
                                                 'maxFiles' => 100
                                                 ])
                                        </div>
                                        <div class="row form-objavi-klub-01" id="galerija_dokaz_prikaz">
                                            @foreach($club->proof_images as $slika)
                                                <div class="album__item col-xs-6 col-sm-3">
                                                    <div class="album__item-holder">
                                                        <a href="{{asset('images/club_proof/' . $slika->image)}}"
                                                           class="album__item-link mp_gallery">
                                                            <figure class="album__thumb">
                                                                <img src="{{asset('images/club_proof/' . $slika->image)}}"
                                                                     alt="">
                                                            </figure>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <button type="submit" class="btn btn-default btn-sm btn-block btn-spasi"><i
                                                    class="fa fa-plus-circle"></i> Spremi dokaze
                                        </button>
                                    </form>
                                </div>
                                <!-- Tab: Dokaz vlasništva / End -->

                                <!-- Tab: Pozivnice i Zahtjevi -->
                                <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-pozivnice">
                                    <div class="row obavijesti-racun">
                                        <div class="card col-md-6">
                                            <div class="card__header">
                                                <h4><i class="fa fa-envelope-open-o"></i> Zahtjevi poslani od strane
                                                    igrača</h4>
                                            </div>
                                            <div class="card__content kartica-ev-ocjene">

                                                <div class="table-responsive">
                                                    <table class="table shop-table pozivnice-list">
                                                        <tbody>
                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="images/dino-secic.jpg" alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card col-md-6">
                                            <div class="card__header">
                                                <h4><i class="fa fa-envelope-o"></i> Vaši zahtjevi igračima</h4>
                                            </div>
                                            <div class="card__content kartica-ev-ocjene">

                                                <div class="table-responsive">
                                                    <table class="table shop-table">
                                                        <tbody>
                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row obavijesti-racun">
                                        <div class="card col-md-6">
                                            <div class="card__header">
                                                <h4><i class="fa fa-envelope-open-o"></i> Zahtjevi poslani od strane
                                                    kadrova</h4>
                                            </div>
                                            <div class="card__content kartica-ev-ocjene">

                                                <div class="table-responsive">
                                                    <table class="table shop-table pozivnice-list">
                                                        <tbody>
                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/dino-secic.jpg"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="70%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Dino Šečić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-check product__accept-icon"></a>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card col-md-6">
                                            <div class="card__header">
                                                <h4><i class="fa fa-envelope-o"></i> Vaši zahtjevi kadrovima</h4>
                                            </div>
                                            <div class="card__content kartica-ev-ocjene">

                                                <div class="table-responsive">
                                                    <table class="table shop-table">
                                                        <tbody>
                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="product__photo">
                                                                <figure class="product__thumb" width="10%">
                                                                    <a href="#"><img class="img-ocjene"
                                                                                     src="assets/images/profilna.JPG"
                                                                                     alt=""></a>
                                                                </figure>
                                                            </td>
                                                            <td class="product__info" width="80%">
                                                                <span class="product__cat">Nogometaš</span>
                                                                <h5 class="product__name"><a href="#">Nedim Tufekčić</a>
                                                                </h5>
                                                            </td>
                                                            <td class="product__remove" width="10%">
                                                                <a href="#"
                                                                   class="fa fa-times product__remove-icon"></a>
                                                            </td>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- Tab: Pozivnice i Zahtjevi / End -->

                                <!-- Single Product Tabbed Content / End -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Content / End -->
        <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('history');


        </script>

@endsection
