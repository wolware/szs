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
                        <h1 class="page-icon-objavi-title"><img src="{{asset('images/icons/' . $sport->icon_on_adding)}}"></h1>
                        <h1 class="page-heading__title">Objavi Sportistu</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">{{ $sport->name }}</li>
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
                                <li role="presentation" class="active">
                                    <a href="#tab-opcenito" role="tab" data-toggle="tab">
                                        <i class="fa fa-info-circle"></i>
                                        <small>O sportisti</small>
                                        Općenito
                                    </a>
                                </li>
                                <li role="presentation" class="preslic">
                                    <a href="#tab-predispozicije" role="tab" data-toggle="tab">
                                        <i class="fa fa-bolt"></i>
                                        <small>Predispozicije</small>
                                        Sportiste
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab-biografija" role="tab" data-toggle="tab">
                                        <i class="fa fa-history"></i>
                                        <small>Biografija</small>
                                        Sportiste
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab-vitrina" role="tab" data-toggle="tab">
                                        <i class="fa fa-trophy"></i>
                                        <small>Trofejna</small>
                                        Vitrina
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#tab-galerija" role="tab" data-toggle="tab">
                                        <i class="fa fa-picture-o"></i>
                                        <small>Foto</small>
                                        Galerija
                                    </a>
                                </li>
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
                            <form id="createNewPlayer" role="form" action="{{ url('/athletes/' . $sport->id . '/create') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <!-- Tab panes -->
                                <div class="tab-content card__content">


                                    <!-- Tab: Općenito -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">

                                        <div class="row">

                                            <div class="row identitet-style">

                                                <div class="col-md-6 objavi-klub-logo-setup">

                                                    <div class="col-md-7">

                                                        <div class="alc-staff__photo">
                                                            <img class="slika-upload-klub" id="slika_upload_klub" src="{{asset('images/dino-secic.jpg')}}">
                                                        </div>

                                                    </div>

                                                    <div class="col-md-5 sadrzaj-slike">

                                                        <p class="dodaj-sliku-naslov klub-a1">Slika sportiste</p>
                                                        <p class="dodaj-sliku-call">Vaš identitet</p>
                                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                                            Odaberi sliku... <input type="file" id="slikaprof" name="avatar" class="not-visible" accept="image/*" onchange="previewFile('#slikaprof', '#slika_upload_klub', 2048, 2048, 512, 512)">
                                                        </label>
                                                        <div class="info001">
                                                            <p class="info-upload-slike">Preporučene dimenzije za
                                                                sliku:</p>
                                                            <p class="info-upload-slike">Minimalno: 512x512 px</p>
                                                            <p class="info-upload-slike">Maksimalno: 2048x2048 px</p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group col-md-6">
                                                        <label for="firstname"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Ime sportiste*</label>
                                                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Unesite ime sportiste" value="{{ old('firstname') }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="lastname"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Prezime sportiste*</label>
                                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Unesite prezime sportiste" value="{{ old('lastname') }}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="player_nature"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Karakter sportiste*</label>
                                                        <select class="form-control" id="player_nature" name="player_nature">
                                                            <option selected disabled>Izberite karakter sportiste</option>
                                                            @foreach($playerNatures as $nature)
                                                                <option value="{{ $nature->id }}" {{ old('player_nature') == $nature->id ? 'selected' : '' }}>{{ $nature->name }}</option>
                                                            @endforeach
                                                        </select>
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
                                                    <label for="continent"><img class="flow-icons-013" src="{{asset('images/icons/international-delivery.svg')}}"> Kontinent*</label>
                                                    <select name="continent" class="form-control" id="continent">
                                                        <option selected disabled>Izaberite kontinent kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Continent')
                                                                <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ old('continent') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="country"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"> Država*</label>
                                                    <select name="country" class="form-control" id="country" {{ old('country') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite državu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Country')
                                                                <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ old('country') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="province"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"> Pokrajina*</label>
                                                    <select name="province" class="form-control" id="province" {{ old('province') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite pokrajinu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Province')
                                                                <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ old('province') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="region"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"> Regija*</label>
                                                    <select name="region" class="form-control" id="region" {{ old('region') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite regiju kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Region')
                                                                <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ old('region') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="municipality"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"> Općina*</label>
                                                    <select name="municipality" class="form-control" id="municipality" {{ old('municipality') ? '' : 'disabled' }}>
                                                        <option selected disabled>Izaberite općinu kluba</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Municipality')
                                                                <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ old('municipality') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="mjesto"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Mjesto/Grad sportiste*</label>
                                                    <input name="city" id="mjesto" class="form-control" placeholder="Unesite mjesto sportiste" value="{{ old('city') }}">
                                                </div>
                                            </div>

                                        </div>


                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-share-alt"></i> Socijalne mreže</h4>
                                            </header>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="facebook"><img class="flow-icons-013" src="{{asset('images/icons/facebook.svg')}}"> Facebook stranica</label>
                                                <input type="text" name="facebook" id="facebook" class="form-control" placeholder="Unesite link službene facebook stranice" value="{{ old('facebook') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="twitter"><img class="flow-icons-013" src="{{asset('images/icons/twitter.svg')}}"> Twitter profil</label>
                                                <input type="text" name="twitter" id="twitter" class="form-control" placeholder="Unesite link službenog twitter profila" value="{{ old('twitter') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="instagram"><img class="flow-icons-013" src="{{asset('images/icons/instagram.svg')}}"> Instagram profil</label>
                                                <input type="text" name="instagram" id="instagram" class="form-control" placeholder="Unesite link službenog instagram profila" value="{{ old('instagram') }}">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="youtube"><img class="flow-icons-013" src="{{asset('images/icons/youtube.svg')}}"> YouTUBE pofil</label>
                                                <input type="text" name="youtube" id="youtube" class="form-control" placeholder="Unesite link službenog YouTUBE kanala" value="{{ old('youtube') }}">
                                            </div>

                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-youtube-play"></i> Video prezentacija</h4>
                                            </header>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-12">
                                                <label for="video"><img class="flow-icons-013" src="{{asset('images/icons/play-button.svg')}}"> Video prezentacija</label>
                                                <input type="text" name="video" id="video" class="form-control" placeholder="Unesite link videa (YouTUBE)" value="{{ old('video') }}">
                                            </div>


                                            <div class="col-md-6">
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- Tab: Općenito / End -->

                                    <!-- Tab: Predispozicije -->

                                    <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-predispozicije">

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
                                            </header>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label class="control-label" for="date_of_birth"><i class="fa fa-calendar-o"></i> Datum rođenja</label>
                                                <input class="form-control" id="date" name="date_of_birth" placeholder="Izaberite datum rođenja" value="{{ old('date_of_birth') }}">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="requested_club"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Klub</label>
                                                <select class="form-control" id="requested_club" name="requested_club">
                                                    <option selected disabled>Izberite trenutni klub sportiste</option>
                                                    @foreach($clubs as $club)
                                                        <option value="{{ $club->id }}" {{ old('requested_club') == $club->id ? 'selected' : '' }}>{{ $club->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-info-circle"></i> Predispozicije sportiste</h4>
                                            </header>
                                        </div>
                                        <div class="row">

                                            <div class="form-group col-md-4">
                                                <label for="height"><img class="flow-icons-013" src="{{asset('images/icons/height.svg')}}"> Visina</label>
                                                <input type="number" name="height" id="height" class="form-control" placeholder="Unesite visinu u cm" value="{{ old('height') }}" min="0" max="300">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="weight"><img class="flow-icons-013" src="{{asset('images/icons/weight.svg')}}"> Težina</label>
                                                <input type="number" name="weight" id="weight" class="form-control" placeholder="Unesite težinu u kg" value="{{ old('weight') }}" min="0" max="300">
                                            </div>

                                            @foreach($inputs as $input)
                                                <div class="form-group col-md-4">
                                                    <label for="{{ $input->name }}">{{ $input->label }}</label>
                                                    @if($input->type == 'input')
                                                        <input type="text" name="{{ $input->name }}" id="{{ $input->name }}" class="form-control" placeholder="{{ $input->placeholder }}" value="{{ old($input->name) }}">
                                                    @elseif($input->type == 'select')
                                                        <select name="{{ $input->name }}" id="{{ $input->name }}" class="form-control">
                                                            <option selected disabled>{{ $input->default }}</option>
                                                            @foreach($input->options as $option)
                                                                <option value="{{ $option }}" {{ old($input->name) == $option ? 'selected' : '' }}>{{ $option }}</option>
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-info-circle"></i> Klupska historija</h4>
                                            </header>
                                        </div>
                                        <div id="dodajHistorijuButtons" class="row">
                                            <div id="historijaLista">
                                                @if(old('history'))
                                                    @foreach(old('history') as $key => $licnost)
                                                        <div class="row historyHover" data-key="{{ $key }}">
                                                            <div class="izbrisiHistory"><i class="fa fa-times-circle-o"></i></div>
                                                            <div class="row form-objavi-klub-01">
                                                                <div class="form-group col-md-6">
                                                                    <label><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Sezona</label>
                                                                    <input type="text" name="history[{{ $key }}][season]" class="form-control" placeholder="npr. 2015-2016" value="{{ old('history.' . $key . '.season') }}">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Klub</label>
                                                                    <input type="text" name="history[{{ $key }}][club]" class="form-control" placeholder="Unesite ime kluba" value="{{ old('history.' . $key . '.club') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="button" id="dodajHistory">Dodaj klub</button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-opcenito" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad" aria-expanded="true">
                                                    <i class="fa fa-chevron-left"></i> Nazad
                                                </a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">
                                                    Sljedeći korak <i class="fa fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tab: Predispozicije / End -->

                                    <!-- Tab: Vremeplov -->

                                    <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-biografija">

                                        <div class="row">
                                            <div class="row identitet-style">
                                                <div class="col-md-12">
                                                    <div class="form-group col-md-12">
                                                        <label for="biography"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Biografija</label>
                                                        <textarea class="form-control" rows="20" id="biography" name="biography" placeholder="Upišite kratku biografiju sportiste..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-predispozicije" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad">
                                                    <i class="fa fa-chevron-left"></i> Nazad
                                                </a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">
                                                    Sljedeći korak <i class="fa fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Tab: Vremeplov / End -->

                                    <!-- Tab: Vitrina -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-vitrina">

                                        <div class="row">
                                            <div class="row form-segment">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-plus-circle"></i> Unos osvojenog trofeja/nagrade</h4>
                                                </header>
                                            </div>
                                            <div id="nagradeLista">
                                                @if(old('nagrada'))
                                                    @foreach(old('nagrada') as $key => $nagrada)
                                                        <div class="row nagradaHover" data-key="{{ $key }}">
                                                            <div class="izbrisiNagradu"><i class="fa fa-times-circle-o"></i></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-6">
                                                                    <label for="vrsta-nagrade"><img class="flow-icons-013" src="{{ asset('images/icons/medalja.svg') }}"> Vrsta nagrade</label>
                                                                    <select name="nagrada[{{ $key }}][vrsta]" class="form-control">
                                                                        <option value="" {{ old('nagrada.' . $key . '.vrsta') == '' ? 'selected' : '' }}>Izaberite vrstu osvojene nagrade</option>
                                                                        <option value="Medalja" {{ old('nagrada.' . $key . '.vrsta') == 'Medalja' ? 'selected' : '' }}>Medalja</option>
                                                                        <option value="Trofej/Pehar" {{ old('nagrada.' . $key . '.vrsta') == 'Trofej/Pehar' ? 'selected' : '' }}>Trofej/Pehar</option>
                                                                        <option value="Priznanje" {{ old('nagrada.' . $key . '.vrsta') == 'Priznanje' ? 'selected' : '' }}>Priznanje</option>
                                                                        <option value="Plaketa" {{ old('nagrada.' . $key . '.vrsta') == 'Plaketa' ? 'selected' : '' }}>Plaketa</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{ asset('images/icons/medalja.svg') }}"> Tip nagrade</label>
                                                                    <select name="nagrada[{{ $key }}][tip]" class="form-control">
                                                                        <option value="" {{ old('nagrada.' . $key . '.tip') == '' ? 'selected' : '' }}>Izaberite tip nagrade</option>
                                                                        <option value="Zlato" {{ old('nagrada.' . $key . '.tip') == 'Zlato' ? 'selected' : '' }}>Zlato (1. mjesto)</option>
                                                                        <option value="Srebro" {{ old('nagrada.' . $key . '.tip') == 'Srebro' ? 'selected' : '' }}>Srebro (2. mjesto)</option>
                                                                        <option value="Bronza" {{ old('nagrada.' . $key . '.tip') == 'Bronza' ? 'selected' : '' }}>Bronza (3. mjesto)</option>
                                                                        <option value="Ostalo" {{ old('nagrada.' . $key . '.tip') == 'Ostalo' ? 'selected' : '' }}>Ostalo</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{ asset('images/icons/medalja.svg') }}"> Nivo takmičenja</label>
                                                                    <select name="nagrada[{{ $key }}][nivo]" class="form-control">
                                                                        <option value="" {{ old('nagrada.' . $key . '.nivo') == '' ? 'selected' : '' }}>Izaberite nivo takmičenja</option>
                                                                        <option value="Internacionalni nivo" {{ old('nagrada.' . $key . '.nivo') == 'Internacionalni nivo' ? 'selected' : '' }}>Internacionalni nivo</option>
                                                                        <option value="Regionalni nivo" {{ old('nagrada.' . $key . '.nivo') == 'Regionalni nivo' ? 'selected' : '' }}>Regionalni nivo</option>
                                                                        <option value="Državni nivo" {{ old('nagrada.' . $key . '.nivo') == 'Državni nivo' ? 'selected' : '' }}>Državni nivo</option>
                                                                        <option value="Entitetski nivo" {{ old('nagrada.' . $key . '.nivo') == 'Entitetski nivo' ? 'selected' : '' }}>Entitetski nivo</option>
                                                                        <option value="Drugo" {{ old('nagrada.' . $key . '.nivo') == 'Drugo' ? 'selected' : '' }}>Drugo</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="takmicenje"><img class="flow-icons-013" src="{{ asset('images/icons/trophy.svg') }}"> Naziv takmičenja</label>
                                                                    <input type="text" name="nagrada[{{ $key }}][takmicenje]" class="form-control" placeholder="Unesite naziv takmicenja za koje je osvojena nagrada" value="{{ old('nagrada.' . $key . '.takmicenje') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="sezona"><img class="flow-icons-013" src="{{ asset('images/icons/small-calendar.svg') }}"> Sezona/Godina</label>
                                                                    <input type="text" name="nagrada[{{ $key }}][sezona]" class="form-control" placeholder="Unesite Sezonu/Godinu osvajanja trofeja" value="{{ old('nagrada.' . $key . '.sezona') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="osvajanja"><img class="flow-icons-013" src="{{ asset('images/icons/the-sum-of.svg') }}"> Broj osvajanja</label>
                                                                    <input type="number" name="nagrada[{{ $key }}][osvajanja]" class="form-control" placeholder="Unesite broj osvajanja trofeja" value="{{ old('nagrada.' . $key . '.osvajanja') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="button" id="dodajNagradu">Dodaj trofej</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-biografija" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Tab: Vitrina / End -->

                                    <!-- Tab: Foto galerija -->
                                    <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">


                                        <div class="row dodavanje-slika">
                                            <div class="col-md-12 sadrzaj-slike">
                                                <p class="dodaj-sliku-naslov">Dodajte slike</p>
                                                <p class="dodaj-sliku-call">u Vašu galeriju</p>
                                                <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                                    Odaberi slike... <input type="file" class="galerija not-visible" name="galerija[]" accept="image/*" multiple>
                                                </label>
                                                <div class="info001">
                                                    <p class="info-upload-slike">Preporučena dimenzija za vaše
                                                        slike:</p>
                                                    <p class="info-upload-slike">1920x1080 px</p>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row form-objavi-klub-01" id="galerija_prikaz">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4"></div>

                                            <div class="col-md-4"></div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-vitrina" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad">
                                                    <i class="fa fa-chevron-left"></i> Nazad
                                                </a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="submit" class="btn btn-default btn-sm btn-block btn-dalje">
                                                    <i class="fa fa-plus-circle"></i> Završi i objavi
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Tab: Foto galerija / End -->
            </div>
            <!-- Single Product Tabbed Content / End -->
        </div>
    </div>


@endsection