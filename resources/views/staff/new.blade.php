@extends ('layouts.app')

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
                        <h1 class="page-icon-objavi-title"><img src="{{asset('images/icons/soccer-ball-variant.svg')}}"></h1>
                        <h1 class="page-heading__title">Objavi sportski kadar</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">Sportski radnici</li>
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
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O kadru</small>Općenito</a></li>
                                <li role="presentation"><a href="#tab-predispozicije" role="tab" data-toggle="tab"><i class="fa fa-bolt"></i><small>Predispozicije</small>Kadra</a></li>
                                <li role="presentation"><a href="#tab-biografija" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Biografija</small>Kadra</a></li>
                                <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i class="fa fa-trophy"></i><small>Trofejna</small>Vitrina</a></li>
                                <li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Foto</small>Galerija</a></li>
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
                            <form id="createNewStaff" role="form" action="{{ url('/staff/create') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <!-- Tab panes -->
                            <div class="tab-content card__content" id="tabs">


                                <!-- Tab: Općenito -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                    <div class="row">
                                        <div class="row identitet-style">

                                                <div class="col-md-6 objavi-klub-logo-setup">

{{--                                                    <div class="col-md-7">--}}
{{----}}
{{--                                                        <div class="alc-staff__photo">--}}
{{--                                                            <img class="slika-upload-klub" id="slika_upload_klub" src="{{asset('images/dino-secic.jpg')}}">--}}
{{--                                                        </div>--}}
{{----}}
{{--                                                    </div>--}}
{{----}}
{{--                                                    <div class="col-md-5 sadrzaj-slike">--}}
{{----}}
{{--                                                        <p class="dodaj-sliku-naslov klub-a1">Slika kadra</p>--}}
{{--                                                        <p class="dodaj-sliku-call">Vaš identitet</p>--}}
{{--                                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">--}}
{{--                                                            Odaberi sliku... <input type="file" id="slikaprof" name="avatar" class="not-visible" accept="image/*" onchange="previewFile('#slikaprof', '#slika_upload_klub', 2048, 2048, 512, 512)">--}}
{{--                                                        </label>--}}
                                                    @include('partials.dropzone', [
                                                                'zoneID' => 'avatar',
                                                                'zoneUploadUrl' => 'uploads',
                                                                'zoneDeleteUrl' => 'uploads',
                                                                'zoneLabel' => 'Slika kadra',
                                                                'dzMessage' => 'Klikni ili prevuci sliku ovdje',
                                                                'dzDescription' => 'Slika se može prebaciti i drag & drop metodom.',
                                                                'maxFiles' => 1
                                                                ])
                                                        <div class="info001">
                                                            <p class="info-upload-slike">Preporučene dimenzije za
                                                                sliku:</p>
                                                            <p class="info-upload-slike">Minimalno: 512x512 px</p>
                                                        </div>

{{--                                                    </div>--}}
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group col-md-6">
                                                        <label for="firstname"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Ime sportskog kadra*</label>
                                                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Unesite ime sportskog kadra" value="{{ old('firstname') }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="lastname"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Prezime sportskog kadra*</label>
                                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Unesite prezime sportskog kadra" value="{{ old('lastname') }}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="profession"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Zanimanje*</label>
                                                        <select class="form-control" id="profession" name="profession">
                                                            <option selected disabled>Izaberite zanimanje sportskog kadra</option>
                                                            @foreach($professions as $profession)
                                                                <option value="{{ $profession->id }}" {{ old('profession') == $profession->id ? 'selected' : '' }}>{{ $profession->name }}</option>
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
                                            <label class="control-label" for="date_of_birth"><i class="fa fa-calendar-o"></i>
                                                Datum rođenja</label>
                                            <div class="input-group date form_date" data-date=""
                                                 data-date-format="mm/dd/yy" data-link-field="dtp_input2"
                                                 data-link-format="mm/dd/yy">
                                                <input class="form-control" id="date_of_birth" name="date_of_birth" size="16"
                                                       type="text"  placeholder="Izaberite datum rođenja" value="{{old('date_of_birth')}}" readonly>

                                                <span class="input-group-addon"><span
                                                            class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-8">
                                                <label for="requested_club"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Klub</label>
                                                <div class="input-group">
                                                    <select class="form-control" id="requested_club" name="requested_club">
                                                        <option selected disabled>Izaberite trenutni klub sportskog kadra</option>
                                                        @foreach($clubs as $club)
                                                            <option value="{{ $club->id }}" {{ old('requested_club') == $club->id ? 'selected' : '' }}>{{ $club->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="input-group-addon">ili</span>
                                                    <input type="text" name="club_name" id="club_name" class="form-control" placeholder="Unesite naziv kluba">
                                                </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="education"><img class="flow-icons-013" src="{{ asset('images/icons/graduation-cap.svg') }}"> Edukacija</label>
                                            <input type="text" name="education" id="education" class="form-control" placeholder="Unesite edukaciju" value="{{ old('education') }}">
                                        </div>
                                    </div>
                                    <div class="row form-objavi-klub-01">
                                        <header class="card__header">
                                            <h4><i class="fa fa-info-circle"></i> Dodatne informacije</h4>
                                        </header>
                                    </div>
                                    <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="additional_education"><img class="flow-icons-013" src="{{ asset('images/icons/graduation-cap.svg') }}"> Dodatno obrazovanje</label>
                                                <input type="text" name="additional_education" id="additional_education" class="form-control" placeholder="Unesite dodatno obrazovanje" value="{{ old('additional_education') }}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="number_of_certificates"><img class="flow-icons-013" src="{{ asset('images/icons/certifikat.svg') }}"> Certifikati</label>
                                                <input type="number" name="number_of_certificates" id="number_of_certificates" class="form-control" placeholder="Unesite broj certifikata" value="{{ old('number_of_certificates') }}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="number_of_projects"><img class="flow-icons-013" src="{{ asset('images/icons/idea.svg') }}"> Sportski projekti</label>
                                                <input type="number" name="number_of_projects" id="number_of_projects" class="form-control" placeholder="Ukupno realizovanih sportskih projekata" value="{{ old('number_of_projects') }}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="work_experience"><img class="flow-icons-013" src="{{ asset('images/icons/zanimanje.svg') }}"> Rad u struci</label>
                                                <input type="number" step="0.5" name="work_experience" id="work_experience" class="form-control" placeholder="Dužina rada u struci u godinama" value="{{ old('work_experience') }}">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="languages"><img class="flow-icons-013" src="{{ asset('images/icons/savez.svg') }}"> Strani jezici</label>
                                                <div class="form-group">
                                                    @foreach($languages as $language)
                                                        <label class="checkbox checkbox-inline">
                                                            <input type="checkbox" name="languages[]" value="{{ $language->id }}" {{ (is_array(old('languages')) and in_array($language->id, old('languages'))) ? ' checked' : '' }}> {{ $language->name }}
                                                            <span class="checkbox-indicator"></span>
                                                        </label>
                                                    @endforeach
                                                </div>
                                            </div>
                                    </div>

                                    <div class="row form-objavi-klub-01">
                                        <header class="card__header">
                                            <h4><i class="fa fa-info-circle"></i> Poslovna historija</h4>
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
                                                        <label for="biography"><img class="flow-icons-013" src="{{ asset('images/icons/edit.svg') }}"> Biografija</label>
                                                        <textarea class="form-control" rows="20" id="biography" name="biography" maxlength="1050" placeholder="Upišite kratku biografiju sportskog kadra...">{{ old('biography') }}</textarea>
                                                    </div>

                                                </div>

                                            </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group form-group--submit col-md-6">
                                            <a href="#" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
                                        </div>
                                        <div class="form-group form-group--submit col-md-6">
                                            <a href="#" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></a>
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
{{--                                        <div class="col-md-12 sadrzaj-slike">--}}
{{--                                            <p class="dodaj-sliku-naslov">Dodajte slike</p>--}}
{{--                                            <p class="dodaj-sliku-call">u Vašu galeriju</p>--}}
{{--                                            <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">--}}
{{--                                                Odaberi slike... <input type="file" class="galerija not-visible" name="galerija[]" accept="image/*" multiple>--}}
{{--                                            </label>--}}
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
{{--                                        </div>--}}
                                    </div>


                                    <div class="row form-objavi-klub-01" id="galerija_prikaz">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4"></div>

                                        <div class="col-md-4"></div>
                                    </div>

                                    <div class="row">
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
                                <!-- Tab: Foto galerija / End -->

                            </div>
                            </form>
                            <!-- Single Product Tabbed Content / End -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Content / End -->

@endsection