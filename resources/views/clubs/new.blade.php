@extends('layouts.app')

@section('content')


    <div class="site-wrapper clearfix">
        <div class="site-overlay"></div>


        <!-- Header
            ================================================== -->

        <!-- Header / End -->

    @include('includes.pushy-panel')

    <!-- Page Heading
    ================================================== -->
        <div class="page-heading objavi-steps">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h1 class="page-icon-objavi-title"><img src="{{asset('images/icons/dodaj-klub.png')}}"></h1>
                        <h1 class="page-heading__title">Objavi Klub</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">Dodavanje novog profila</li>
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
                                <li role="presentation" class="preslic"><a href="#tab-licnosti" role="tab"
                                                                           data-toggle="tab"><i
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
                            <form id="createNewClub" role="form" action="{{ url('/clubs/new/create') }}" method="POST"
                                  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <!-- Tab panes -->
                                <div class="tab-content card__content" id="tabs">


                                    <!-- Tab: Općenito -->

                                    <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                        <div class="row">
                                            <div class="row identitet-style">

                                                <div class="col-md-6 objavi-klub-logo-setup">

                                                    @include('partials.dropzone', [
                                                                'zoneID' => 'logo',
                                                                'zoneUploadUrl' => 'uploads',
                                                                'zoneDeleteUrl' => 'uploads',
                                                                'zoneLabel' => 'Identitet kluba',
                                                                'dzMessage' => 'Klikni ili prevuci logo kluba ovdje',
                                                                'dzDescription' => 'Logo se može prebaciti i drag & drop metodom.',
                                                                'maxFiles' => 1
                                                                ])
{{--                                                    <div class="col-md-7">--}}
{{----}}
{{--                                                        <div class="alc-staff__photo">--}}
{{--                                                            <img class="slika-upload-klub" id="slika-upload-klub"--}}
{{--                                                                 src="{{asset('images/SZS-club-logo.png')}}" alt="">--}}
{{--                                                        </div>--}}
{{----}}
{{--                                                    </div>--}}
{{--                                                    <div class="col-md-5 sadrzaj-slike">--}}

{{--                                                        <p class="dodaj-sliku-naslov klub-a1">Logo kluba*</p>--}}
{{--                                                        <p class="dodaj-sliku-call">Identitet kluba</p>--}}
{{--                                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">--}}
{{--                                                            Odaberi logo... <input type="file" id="file_logo_kluba"--}}
{{--                                                                                   name="logo" class="not-visible"--}}
{{--                                                                                   accept="image/*"--}}
{{--                                                                                   onchange="previewFile('#file_logo_kluba', '#slika-upload-klub', 1024, 1024, 512, 512)">--}}
{{--                                                        </label>--}}
                                                        <div class="info001">
                                                            <p class="info-upload-slike">Preporučene dimenzije za
                                                                logo:</p>
                                                            <p class="info-upload-slike">Minimalno: 512x512 px</p>
                                                        </div>

{{--                                                    </div>--}}
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group col-md-12">
                                                        <label for="ime-kluba"><img class="flow-icons-013"
                                                                                    src="{{asset('images/icons/edit.svg')}}">
                                                            Ime/Naziv kluba*</label>
                                                        <input type="text" name="name" id="ime-kluba"
                                                               class="form-control"
                                                               placeholder="Unesite ime/naziv kluba"
                                                               value="{{ old('name') }}">
                                                    </div>
                                                    <div class="form-group has-success col-md-12">
                                                        <label for="karakter-kluba"><img class="flow-icons-013"
                                                                                         src="{{asset('images/icons/edit.svg')}}">
                                                            Karakter kluba* <span>(izmjenjivo)</span></label>
                                                        <input type="text" name="nature" id="karakter-kluba"
                                                               class="form-control" placeholder="Unesite karakter kluba"
                                                               value="{{ old('nature') ? old('nature') : 'Fudbalski klub' }}">
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
                                                                        value="{{ $region->id }}" {{ old('continent') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="country"><img class="flow-icons-013"
                                                                              src="{{asset('images/icons/earth.svg')}}">
                                                        Država*</label>
                                                    <select name="country" class="form-control"
                                                            id="country" {{ old('country') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite državu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Country')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ old('country') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="province"><img class="flow-icons-013"
                                                                               src="{{asset('images/icons/map.svg')}}">
                                                        Pokrajina*</label>
                                                    <select name="province" class="form-control"
                                                            id="province" {{ old('province') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite pokrajinu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Province')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ old('province') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
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
                                                            id="region" {{ old('region') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite regiju kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Region')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ old('region') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="municipality"><img class="flow-icons-013"
                                                                                   src="{{asset('images/icons/opcina.svg')}}">
                                                        Općina*</label>
                                                    <select name="municipality" class="form-control"
                                                            id="municipality" {{ old('municipality') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite općinu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Municipality')
                                                                <option data-parent="{{ $region->region_parent }}"
                                                                        value="{{ $region->id }}" {{ old('municipality') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="mjesto"><img class="flow-icons-013"
                                                                             src="{{asset('images/icons/small-calendar.svg')}}">
                                                        Mjesto/Grad kluba*</label>
                                                    <input name="city" id="mjesto" class="form-control"
                                                           placeholder="Unesite mjesto kluba" value="{{ old('city') }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="club-type"><img class="flow-icons-013"
                                                                                src="{{asset('images/icons/klubovi-icon.svg')}}">
                                                        Tip kluba*</label>
                                                    <select name="type" class="form-control" id="club-type">
                                                        <option value=""
                                                                disabled {{ old('type') == '' ? 'selected' : '' }}>
                                                            Izaberite tip kluba
                                                        </option>
                                                        <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>
                                                            Sportski klub
                                                        </option>
                                                        <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>
                                                            Invalidski sportski klub
                                                        </option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="sport"><img class="flow-icons-013"
                                                                            src="{{asset('images/icons/menu-circular-button.svg')}}">
                                                        Sportovi*</label>
                                                    <select name="sport" class="form-control"
                                                            id="sport" {{ old('sport') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite sport kluba</option>
                                                        @foreach($sports as $sport)
                                                            <option data-disabled="{{ $sport->with_disabilities }}"
                                                                    value="{{ $sport->id }}" {{ old('sport') == $sport->id ? 'selected' : '' }}>{{ $sport->name }}</option>
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
                                                            <option value="{{ $category->id }}" {{ old('category') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
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
                                                <label for="established_in"><img class="flow-icons-013"
                                                                                 src="{{asset('images/icons/small-calendar.svg')}}">
                                                    Godina osnivanja kluba</label>
                                                <input name="established_in" type="number" id="established_in"
                                                       class="form-control" placeholder="Unesite godinu osnivanja kluba"
                                                       value="{{ old('established_in') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="domaci-teren"><img class="flow-icons-013"
                                                                               src="{{asset('images/icons/stadium-icon.svg')}}">
                                                    Domaći teren</label>
                                                <input name="home_field" type="text" id="domaci-teren"
                                                       class="form-control"
                                                       placeholder="Unesite naziv domaćeg terena kluba"
                                                       value="{{ old('home_field') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="takmicenje"><img class="flow-icons-013"
                                                                             src="{{asset('images/icons/trophy.svg')}}">
                                                    Takmičenje</label>
                                                <input type="text" name="competiton" id="takmicenje"
                                                       class="form-control"
                                                       placeholder="Unesite naziv takmičenja u kojem klub nastupa"
                                                       value="{{ old('competiton') }}">
                                            </div>

                                            <div class="form-group col-md-6" id="associations"
                                                 style="display: {{ old('country') && old('sport') ? 'block' : 'none' }};">
                                                <label><img class="flow-icons-013"
                                                            src="{{asset('images/icons/savez.svg')}}"> Savez kojem klub
                                                    pripada</label>
                                                <div class="form-group">
                                                    @foreach($associations as $association)
                                                        <label class="radio radio-inline"
                                                               style="display: {{ old('country') == $association->region_id && old('sport') == $association->sport_id ? 'inline-block' : 'none' }};">
                                                            <input type="radio"
                                                                   data-region="{{ $association->region_id }}"
                                                                   data-sport="{{ $association->sport_id }}"
                                                                   name="association"
                                                                   value="{{ $association->id }}" {{ old('association') == $association->id ? 'checked' : '' }}> {{ $association->name }}
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
                                                       value="{{ old('phone_1') }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="tel2"><img class="flow-icons-013"
                                                                       src="{{asset('images/icons/phone-call.svg')}}">
                                                    Telefon 2</label>
                                                <input type="number" name="phone_2" id="tel2" class="form-control"
                                                       placeholder="Unesite broj za službeni telefon 2"
                                                       value="{{ old('phone_2') }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="fax"><img class="flow-icons-013"
                                                                      src="{{asset('images/icons/fax-with-phone.svg')}}">
                                                    Fax</label>
                                                <input type="number" name="fax" id="fax" class="form-control"
                                                       placeholder="Unesite broj za službeni fax"
                                                       value="{{ old('fax') }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="mail"><img class="flow-icons-013"
                                                                       src="{{asset('images/icons/envelope.svg')}}">
                                                    E-mail</label>
                                                <input type="email" name="email" id="mail" class="form-control"
                                                       placeholder="Unesite službeni E-mail" value="{{ old('email') }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="web"><img class="flow-icons-013"
                                                                      src="{{asset('images/icons/worldwide.svg')}}"> Web
                                                    stranica</label>
                                                <input type="text" name="website" id="web" class="form-control"
                                                       placeholder="Unesite link službene web stranice"
                                                       value="{{ old('website') }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="adresa"><img class="flow-icons-013"
                                                                         src="{{asset('images/icons/icon.svg')}}">
                                                    Adresa (ne prikazuje se)</label>
                                                <input type="text" name="address" id="adresa" class="form-control"
                                                       placeholder="Unesite adresu sjedišta kluba"
                                                       value="{{ old('address') }}">
                                            </div>

                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-share-alt"></i> Socijalne mreže</h4>
                                            </header>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="facebook"><img class="flow-icons-013"
                                                                           src="{{asset('images/icons/facebook.svg')}}">
                                                    Facebook stranica</label>
                                                <input type="text" name="facebook" id="facebook" class="form-control"
                                                       placeholder="Unesite link službene facebook stranice"
                                                       value="{{ old('facebook') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="twitter"><img class="flow-icons-013"
                                                                          src="{{asset('images/icons/twitter.svg')}}">
                                                    Twitter profil</label>
                                                <input type="text" name="twitter" id="twitter" class="form-control"
                                                       placeholder="Unesite link službenog twitter profila"
                                                       value="{{ old('twitter') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="instagram"><img class="flow-icons-013"
                                                                            src="{{asset('images/icons/instagram.svg')}}">
                                                    Instagram profil</label>
                                                <input type="text" name="instagram" id="instagram" class="form-control"
                                                       placeholder="Unesite link službenog instagram profila"
                                                       value="{{ old('instagram') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="youtube"><img class="flow-icons-013"
                                                                          src="{{asset('images/icons/youtube.svg')}}">
                                                    YouTUBE pofil</label>
                                                <input type="text" name="youtube" id="youtube" class="form-control"
                                                       placeholder="Unesite link službenog YouTUBE kanala"
                                                       value="{{ old('youtube') }}">
                                            </div>

                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-youtube-play"></i> Video prezentacija</h4>
                                            </header>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-12">
                                                <label for="video"><img class="flow-icons-013"
                                                                        src="{{asset('images/icons/play-button.svg')}}">
                                                    Video prezentacija</label>
                                                <input type="text" name="video" id="video" class="form-control"
                                                       placeholder="Unesite link videa (YouTUBE)"
                                                       value="{{ old('video') }}">
                                            </div>


                                            <div class="col-md-6">
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button"
                                                        class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći
                                                    korak <i class="fa fa-chevron-right"></i></button>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- Tab: Općenito / End -->

                                    <!-- Tab: Ličnosti -->

                                    <div role="tabpanel" class="tab-pane fade" id="tab-licnosti">

                                        <div id="dodajLicnostButtons" class="row">
                                            <div id="licnostiLista">
                                                @if(old('licnost'))
                                                    @foreach(old('licnost') as $key => $licnost)
                                                        <div class="row licnostHover" data-key="{{ $key }}">
                                                            <div class="izbrisiLicnost"><i
                                                                        class="fa fa-times-circle-o"></i></div>
                                                            <div class="row identitet-style">
                                                                <div class="col-md-6 objavi-klub-logo-setup">
                                                                    <div class="col-md-7">
                                                                        <div class="alc-staff__photo">
                                                                            <img class="slika-edit-profil"
                                                                                 id="slika-licnost-prikaz{{ $key }}"
                                                                                 src="{{ asset('images/default_avatar.png') }}"
                                                                                 alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 sadrzaj-slike">
{{--                                                                        <p class="dodaj-sliku-naslov klub-a1">Slika--}}
{{--                                                                            ličnosti</p>--}}
{{--                                                                        <p class="dodaj-sliku-call">Odaberite sliku za--}}
{{--                                                                            istaknutu ličnost</p>--}}
{{--                                                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">--}}
{{--                                                                            Odaberi sliku... <input type="file"--}}
{{--                                                                                                    name="licnost[{{ $key }}][avatar]"--}}
{{--                                                                                                    id="licnostAvatar{{ $key }}"--}}
{{--                                                                                                    accept="image/*"--}}
{{--                                                                                                    class="not-visible"--}}
{{--                                                                                                    onchange="previewFile('#licnostAvatar{{ $key }}', '#slika-licnost-prikaz{{ $key }}', 1080, 1920, 250, 312)">--}}
{{--                                                                        </label>--}}
                                                                        @include('partials.dropzone', [
                                                                'zoneID' => 'licnost[' . $key . '][avatar]',
                                                                'zoneUploadUrl' => 'uploads',
                                                                'zoneDeleteUrl' => 'uploads',
                                                                'zoneLabel' => 'Odaberite sliku za istaknutu ličnost',
                                                                'dzMessage' => 'Klikni ili prevuci sliku ovdje',
                                                                'dzDescription' => 'Slika se može prebaciti i drag & drop metodom.',
                                                                'maxFiles' => 1
                                                                ])
                                                                        <div class="info001">
                                                                            <p class="info-upload-slike">Preporučene
                                                                                dimenzije za sliku ličnosti:</p>
                                                                            <p class="info-upload-slike">Minimalno:
                                                                                312x250 px</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="ime-kluba"><img
                                                                                    class="flow-icons-013"
                                                                                    src="{{ asset('images/icons/edit.svg') }}">
                                                                            Ime</label>
                                                                        <input type="text"
                                                                               name="licnost[{{ $key }}][ime]"
                                                                               class="form-control"
                                                                               placeholder="Unesite ime ličnosti"
                                                                               value="{{ old('licnost.' . $key . '.ime') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="ime-kluba"><img
                                                                                    class="flow-icons-013"
                                                                                    src="{{ asset('images/icons/edit.svg') }}">
                                                                            Prezime</label>
                                                                        <input type="text"
                                                                               name="licnost[{{ $key }}][prezime]"
                                                                               class="form-control"
                                                                               placeholder="Unesite prezime ime ličnosti"
                                                                               value="{{ old('licnost.' . $key . '.prezime') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label for="opis"><img class="flow-icons-013"
                                                                                               src="{{ asset('images/icons/edit.svg') }}">
                                                                            Opis i uloga</label>
                                                                        <textarea class="form-control" rows="4"
                                                                                  name="licnost[{{ $key }}][opis]"
                                                                                  placeholder="Upišite kratak opis uloge i funkcije navedene ličnosti u klubu...">{{ old('licnost.' . $key . '.opis') }}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="button" id="dodajLicnost">Dodaj
                                                    ličnost
                                                </button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-opcenito" role="tab" data-toggle="tab"
                                                   class="btn btn-default btn-sm btn-block btn-nazad"><i
                                                            class="fa fa-chevron-left"></i> Nazad</a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button"
                                                        class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći
                                                    korak <i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Tab: Ličnosti / End -->

                                    <!-- Tab: Vremeplov -->

                                    <div role="tabpanel" class="tab-pane fade" id="tab-vremeplov">

                                        <div class="row">

                                            <div class="row identitet-style">

                                                <div class="col-md-12">

                                                    <div class="form-group col-md-12">
                                                        <label for="opis"><img class="flow-icons-013"
                                                                               src="{{asset('images/icons/edit.svg')}}">
                                                            Vremeplov</label>
                                                        <textarea class="form-control" rows="20" id="opis"
                                                                  name="history"
                                                                  placeholder="Upišite ukratko informacije vezane za historijat vašeg kluba i njegovu tradiciju...">{{ old('history') }}</textarea>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-licnosti" role="tab" data-toggle="tab"
                                                   class="btn btn-default btn-sm btn-block btn-nazad"><i
                                                            class="fa fa-chevron-left"></i> Nazad</a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button"
                                                        class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći
                                                    korak <i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Tab: Vremeplov / End -->

                                    <!-- Tab: Vitrina -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-vitrina">

                                        <div class="row">
                                            <div class="row form-segment">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-plus-circle"></i> Unos osvojenog trofeja/nagrade
                                                    </h4>
                                                </header>
                                            </div>
                                            <div id="nagradeLista">
                                                @if(old('nagrada'))
                                                    @foreach(old('nagrada') as $key => $nagrada)
                                                        <div class="row nagradaHover" data-key="{{ $key }}">
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
                                                                        <option value="" {{ old('nagrada.' . $key . '.vrsta') == '' ? 'selected' : '' }}>
                                                                            Izaberite vrstu osvojene nagrade
                                                                        </option>
                                                                        <option value="Medalja" {{ old('nagrada.' . $key . '.vrsta') == 'Medalja' ? 'selected' : '' }}>
                                                                            Medalja
                                                                        </option>
                                                                        <option value="Trofej/Pehar" {{ old('nagrada.' . $key . '.vrsta') == 'Trofej/Pehar' ? 'selected' : '' }}>
                                                                            Trofej/Pehar
                                                                        </option>
                                                                        <option value="Priznanje" {{ old('nagrada.' . $key . '.vrsta') == 'Priznanje' ? 'selected' : '' }}>
                                                                            Priznanje
                                                                        </option>
                                                                        <option value="Plaketa" {{ old('nagrada.' . $key . '.vrsta') == 'Plaketa' ? 'selected' : '' }}>
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
                                                                        <option value="" {{ old('nagrada.' . $key . '.tip') == '' ? 'selected' : '' }}>
                                                                            Izaberite tip nagrade
                                                                        </option>
                                                                        <option value="Zlato" {{ old('nagrada.' . $key . '.tip') == 'Zlato' ? 'selected' : '' }}>
                                                                            Zlato (1. mjesto)
                                                                        </option>
                                                                        <option value="Srebro" {{ old('nagrada.' . $key . '.tip') == 'Srebro' ? 'selected' : '' }}>
                                                                            Srebro (2. mjesto)
                                                                        </option>
                                                                        <option value="Bronza" {{ old('nagrada.' . $key . '.tip') == 'Bronza' ? 'selected' : '' }}>
                                                                            Bronza (3. mjesto)
                                                                        </option>
                                                                        <option value="Ostalo" {{ old('nagrada.' . $key . '.tip') == 'Ostalo' ? 'selected' : '' }}>
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
                                                                        <option value="" {{ old('nagrada.' . $key . '.nivo') == '' ? 'selected' : '' }}>
                                                                            Izaberite nivo takmičenja
                                                                        </option>
                                                                        <option value="Internacionalni nivo" {{ old('nagrada.' . $key . '.nivo') == 'Internacionalni nivo' ? 'selected' : '' }}>
                                                                            Internacionalni nivo
                                                                        </option>
                                                                        <option value="Regionalni nivo" {{ old('nagrada.' . $key . '.nivo') == 'Regionalni nivo' ? 'selected' : '' }}>
                                                                            Regionalni nivo
                                                                        </option>
                                                                        <option value="Državni nivo" {{ old('nagrada.' . $key . '.nivo') == 'Državni nivo' ? 'selected' : '' }}>
                                                                            Državni nivo
                                                                        </option>
                                                                        <option value="Entitetski nivo" {{ old('nagrada.' . $key . '.nivo') == 'Entitetski nivo' ? 'selected' : '' }}>
                                                                            Entitetski nivo
                                                                        </option>
                                                                        <option value="Drugo" {{ old('nagrada.' . $key . '.nivo') == 'Drugo' ? 'selected' : '' }}>
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
                                                                           value="{{ old('nagrada.' . $key . '.takmicenje') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="sezona"><img class="flow-icons-013"
                                                                                             src="{{ asset('images/icons/small-calendar.svg') }}">
                                                                        Sezona/Godina</label>
                                                                    <input type="text"
                                                                           name="nagrada[{{ $key }}][sezona]"
                                                                           class="form-control"
                                                                           placeholder="Unesite Sezonu/Godinu osvajanja trofeja"
                                                                           value="{{ old('nagrada.' . $key . '.sezona') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="osvajanja"><img class="flow-icons-013"
                                                                                                src="{{ asset('images/icons/the-sum-of.svg') }}">
                                                                        Broj osvajanja</label>
                                                                    <input type="number"
                                                                           name="nagrada[{{ $key }}][osvajanja]"
                                                                           class="form-control"
                                                                           placeholder="Unesite broj osvajanja trofeja"
                                                                           value="{{ old('nagrada.' . $key . '.osvajanja') }}">
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
                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-vremeplov" role="tab" data-toggle="tab"
                                                   class="btn btn-default btn-sm btn-block btn-nazad"><i
                                                            class="fa fa-chevron-left"></i> Nazad</a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button"
                                                        class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći
                                                    korak <i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Tab: Vitrina / End -->

                                    <!-- Tab: Foto galerija -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-galerija">
                                        <div class="row dodavanje-slika">
                                            <div class="col-md-12 sadrzaj-slike">
                                                @include('partials.dropzone', [
                                                                'zoneID' => 'galerija',
                                                                'zoneUploadUrl' => 'uploads',
                                                                'zoneDeleteUrl' => 'uploads',
                                                                'zoneLabel' => 'Dodajte slike u Vašu galeriju',
                                                                'dzDescription' => 'Fotografije se mogu prebaciti i drag & drop metodom.',
                                                                'maxFiles' => 100
                                                                ])
{{--                                                <p class="dodaj-sliku-naslov">Dodajte slike</p>--}}
{{--                                                <p class="dodaj-sliku-call">u Vašu galeriju</p>--}}
{{--                                                <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">--}}
{{--                                                    Odaberi slike... <input type="file" class="galerija not-visible"--}}
{{--                                                                            name="galerija[]" accept="image/*" multiple>--}}
{{--                                                </label>--}}
                                                <div class="info001">
                                                    <p class="info-upload-slike">Preporučena dimenzija za vaše
                                                        slike:</p>
                                                    <p class="info-upload-slike">1920x1080 px</p>
                                                </div>
                                            </div>
                                        </div>
{{--                                        <div class="row form-objavi-klub-01" id="galerija_prikaz">--}}
{{--                                        </div>--}}

                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <!--<div class="form-group form-group--submit col-md-4">
                                                <a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 3 Dodavanje fotografije </a>
                                            </div>-->
                                            <div class="col-md-4"></div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-vitrina" role="tab" data-toggle="tab"
                                                   class="btn btn-default btn-sm btn-block btn-nazad"><i
                                                            class="fa fa-chevron-left"></i> Nazad</a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button"
                                                        class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći
                                                    korak <i class="fa fa-chevron-right"></i></button>

                                                <!-- Modal -->
                                            <!--<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">

									   Modal content
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 class="modal-title">USPJEŠNO STE KREIRALI KLUB</h4>
										</div>
										<div class="modal-body">
										  <img class="ikona-modal" src="{{asset('images/icons/checked.svg')}}">
										  <p class="bravo-info">Predložak koji ste napravili će biti u najkraćem mogućem vremenskom periodu pregledan od strane naše administracije, te ukoliko bude zadovoljavao sve uvjete koje nalaže Sve Za Sport, biti će i objavljen.</p>
										  <p class="bravo-hello">Sportski pozdrav!</p>
										</div>
										<div class="modal-footer">
										  <button type="button" class="btn btn-default btn-close-modal-01" data-dismiss="modal"><i class="fa fa-times"></i> Zatvori prozor</button>
										</div>
									  </div>

									</div>
								  </div>-->
                                                <!-- Modal content / End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab: Foto galerija / End -->

                                    <!-- Tab: Dokaz vlasništva -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-dokaz">
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
{{--                                        <div class="row dodavanje-slika">--}}
{{--                                            <div class="col-md-12 sadrzaj-slike">--}}
{{--                                                <p class="dodaj-sliku-naslov">Dodajte slike *</p>--}}
{{--                                                <p class="dodaj-sliku-call">koje dokazuju da ste Vi vlasnik kluba</p>--}}
{{--                                                <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">--}}
{{--                                                    Odaberi slike... <input type="file"--}}
{{--                                                                            class="galerija_dokaz not-visible"--}}
{{--                                                                            name="proof[]" accept="image/*" multiple>--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="row form-objavi-klub-01" id="galerija_dokaz_prikaz">--}}
{{--                                        </div>--}}
                                        @include('partials.dropzone', [
                                            'zoneID' => 'proof',
                                            'zoneUploadUrl' => 'uploads',
                                            'zoneDeleteUrl' => 'uploads',
                                            'zoneLabel' => 'Dodajte koje dokazuju da ste Vi vlasnik kluba *',
                                            'dzDescription' => 'Fotografije se mogu prebaciti i drag & drop metodom.',
                                            'maxFiles' => 100
                                            ])
                                        <div class="row">
                                            <div class="col-md-4"></div>
                                            <!--<div class="form-group form-group--submit col-md-4">
                                                <a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 3 Dodavanje fotografije </a>
                                            </div>-->
                                            <div class="col-md-4"></div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-galerija" role="tab" data-toggle="tab"
                                                   class="btn btn-default btn-sm btn-block btn-nazad"><i
                                                            class="fa fa-chevron-left"></i> Nazad</a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="submit"
                                                        class="btn btn-default btn-sm btn-block btn-dalje"><i
                                                            class="fa fa-plus-circle"></i> Završi i objavi
                                                </button>


                                                <!-- Modal -->
                                            <!--<div class="modal fade" id="myModal" role="dialog">
									<div class="modal-dialog">

									   Modal content
									  <div class="modal-content">
										<div class="modal-header">
										  <h4 class="modal-title">USPJEŠNO STE KREIRALI KLUB</h4>
										</div>
										<div class="modal-body">
										  <img class="ikona-modal" src="{{asset('images/icons/checked.svg')}}">
										  <p class="bravo-info">Predložak koji ste napravili će biti u najkraćem mogućem vremenskom periodu pregledan od strane naše administracije, te ukoliko bude zadovoljavao sve uvjete koje nalaže Sve Za Sport, biti će i objavljen.</p>
										  <p class="bravo-hello">Sportski pozdrav!</p>
										</div>
										<div class="modal-footer">
										  <button type="button" class="btn btn-default btn-close-modal-01" data-dismiss="modal"><i class="fa fa-times"></i> Zatvori prozor</button>
										</div>
									  </div>

									</div>
								  </div>-->
                                                <!-- Modal content / End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tab: Dokaz vlasništva / End -->

                                    <!-- Single Product Tabbed Content / End -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Content / End -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace('history');

            $(function () {
                // Multiple images preview in browser
                var imagesPreview = function (input, placeToInsertImagePreview) {

                    var gk = document.getElementById('galerija_klub');
                    if (input.files) {
                        var filesAmount = input.files.length;

                        for (i = 0; i < filesAmount; i++) {
                            var reader = new FileReader();

                            reader.onload = function (event) {
                                var adnew = '<div class="album__item col-xs-6 col-sm-3"><div class="album__item-holder"><a href="' + event.target.result + '" class="album__item-link mp_gallery"><figure class="album__thumb"><img src="' + event.target.result + '" alt=""></figure><div class="album__item-desc"><img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt=""></div></a></div><div class="progress-stats upload-slike-statust-bar"><div class="progress"><div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>';
                                $(adnew).appendTo('#galerija_klub');
                            }

                            reader.readAsDataURL(input.files[i]);
                        }
                    }

                };

                $('.galerija').on('change', function () {
                    imagesPreview(this);
                });
            });


        </script>
    </div>
@endsection
