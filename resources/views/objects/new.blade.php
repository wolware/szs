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
                        <h1 class="page-icon-objavi-title"><img src="{{ asset('images/icons/' . $object_type->icon) }}"></h1>
                        <h1 class="page-heading__title">Objavi Objekt</h1>
                        <ol class="page-heading__breadcrumb breadcrumb">
                            <li class="registracija-podnaslov">{{ $object_type->type }}</li>
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
                                <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O objektu</small>Općenito</a></li>
                                <li role="presentation" class="preslic"><a href="#tab-predispozicije" role="tab" data-toggle="tab"><i class="fa fa-bolt"></i><small>Karakteristike</small>Objekta</a></li>
                                <li role="presentation"><a href="#tab-biografija" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Vremeplov</small>Objekta</a></li>
                                @if($object_type->type == 'Balon')
                                    <li role="presentation"><a href="#tab-tereni" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-window-restore"></i><small>Sale i</small>Tereni</a></li>
                                    <li role="presentation" class=""><a href="#tab-cjenovnik" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-database"></i><small>Cjenovnik</small>Usluga</a></li>
                                @endif
                                @if($object_type->type == 'Skijalište')
                                    <li role="presentation"><a href="#tab-staze" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-road"></i><small>Staze i</small>Liftovi</a></li>
                                    <li role="presentation" class=""><a href="#tab-cjenovnik" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-database"></i><small>Cjenovnik</small>Usluga</a></li>
                                @endif
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

                            <form id="createNewObject" role="form" action="{{ url('/objects/create') }}" method="POST" enctype="multipart/form-data" >
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
                                                            <img class="slika-upload-klub" id="slika_upload_klub" src="{{asset('images/dino-secic.jpg')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5 sadrzaj-slike">
                                                        <p class="dodaj-sliku-naslov klub-a1">Slika profila</p>
                                                        <p class="dodaj-sliku-call">Identitet objekta</p>
                                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                                            Odaberi sliku... <input type="file" id="slikaprof" name="image" class="not-visible" onchange="previewFile('#slikaprof','#slika_upload_klub',3000, 3000, 1080, 1920)">
                                                        </label>
                                                        <div class="info001">
                                                            <p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
                                                            <p class="info-upload-slike">Minimalno: 1920x1080 px</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group col-md-12">
                                                        <label for="name"><img class="flow-icons-013" src="{{asset('assets/images/icons/edit.svg')}}"> Naziv objekta*</label>
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="Unesite puni naziv objekta">
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
                                                    <label for="city"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Mjesto/Grad škole*</label>
                                                    <input name="city" id="city" class="form-control" placeholder="Unesite mjesto sportiste" onfocus="initAutocomplete()" value="{{ old('city') }}">
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
                                            <label class="control-label" for="established_in"><i class="fa fa-calendar-o"></i> Datum otvorenja</label>
                                            <input class="form-control" id="established_in" name="established_in" placeholder="Unesite datum otvorenja" type="date"/>
                                        </div>

                                        @foreach($inputs as $input)
                                            @if($input->group == 'g')
                                                <div class="form-group col-md-4">
                                                    <label for="{{ $input->name }}"><img class="flow-icons-013" src="{{ asset('images/icons/' . $input->icon) }}"> {{ $input->label }}</label>
                                                    @if($input->type == 'input')
                                                        <input type="text" name="{{ $input->name }}" id="{{ $input->name }}" class="form-control" placeholder="{{ $input->placeholder }}" value="{{ old($input->name) }}">
                                                    @elseif($input->type == 'select')
                                                        <select name="{{ $input->name }}" id="{{ $input->name }}" class="form-control">
                                                            <option selected disabled>{{ $input->default }}</option>
                                                            @foreach($input->options as $option)
                                                                @if($option == 'Da')
                                                                    <option value="1" {{ old($input->name) === 1 ? 'selected' : '' }}>{{ $option }}</option>
                                                                @elseif($option == 'Ne')
                                                                    <option value="0" {{ old($input->name) === 0 ? 'selected' : '' }}>{{ $option }}</option>
                                                                @else
                                                                    <option value="{{ $option }}" {{ old($input->name) == $option ? 'selected' : '' }}>{{ $option }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="row form-objavi-klub-01">
                                        <header class="card__header">
                                            <h4><i class="fa fa-info-circle"></i> Osobine objekta</h4>
                                        </header>
                                    </div>
                                    <div class="row">

                                        @foreach($inputs as $input)
                                            @if($input->group == 'a')
                                                <div class="form-group col-md-4">
                                                    <label for="{{ $input->name }}"><img class="flow-icons-013" src="{{ asset('images/icons/' . $input->icon) }}"> {{ $input->label }}</label>
                                                    @if($input->type == 'input')
                                                        <input type="text" name="{{ $input->name }}" id="{{ $input->name }}" class="form-control" placeholder="{{ $input->placeholder }}" value="{{ old($input->name) }}">
                                                    @elseif($input->type == 'select')
                                                        <select name="{{ $input->name }}" id="{{ $input->name }}" class="form-control">
                                                            <option selected disabled>{{ $input->default }}</option>
                                                            @foreach($input->options as $option)
                                                                @if($option == 'Da')
                                                                    <option value="1" {{ old($input->name) === 1 ? 'selected' : '' }}>{{ $option }}</option>
                                                                @elseif($option == 'Ne')
                                                                    <option value="0" {{ old($input->name) === 0 ? 'selected' : '' }}>{{ $option }}</option>
                                                                @else
                                                                    <option value="{{ $option }}" {{ old($input->name) == $option ? 'selected' : '' }}>{{ $option }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                    <div class="row form-objavi-klub-01">
                                        <header class="card__header">
                                            <h4><i class="fa fa-info-circle"></i> Standardi po Sve Za Sportu</h4>
                                        </header>
                                    </div>
                                    <div class="row">
                                        @foreach($inputs as $input)
                                            @if($input->group == 's')
                                                <div class="form-group col-md-3">
                                                    <label for="{{ $input->name }}">{{ $input->label }}</label>
                                                    @if($input->type == 'input')
                                                        <input type="text" name="{{ $input->name }}" id="{{ $input->name }}" class="form-control" placeholder="{{ $input->placeholder }}" value="{{ old($input->name) }}">
                                                    @elseif($input->type == 'select')
                                                        <select name="{{ $input->name }}" id="{{ $input->name }}" class="form-control">
                                                            <option selected disabled>{{ $input->default }}</option>
                                                            @foreach($input->options as $option)
                                                                @if($option == 'Da')
                                                                    <option value="1" {{ old($input->name) === 1 ? 'selected' : '' }}>{{ $option }}</option>
                                                                @elseif($option == 'Ne')
                                                                    <option value="0" {{ old($input->name) === 0 ? 'selected' : '' }}>{{ $option }}</option>
                                                                @else
                                                                    <option value="{{ $option }}" {{ old($input->name) == $option ? 'selected' : '' }}>{{ $option }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                </div>
                                            @endif
                                        @endforeach
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
                                                    <label for="history"><img class="flow-icons-013" src="{{asset('assets/images/icons/edit.svg')}}"> Vremeplov objekta</label>
                                                    <textarea name="history" class="form-control" rows="20" id="history" maxlength="1050" placeholder="Upišite ukratko informacije vezane za historijat vašeg objekta i njegovu tradiciju...">{{ old('history') }}</textarea>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="form-group form-group--submit col-md-6">
                                            <a href="#tab-predispozicije" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad" aria-expanded="true">
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

                                @if($object_type->type == 'Balon')
                                    <!-- Tab: Sale i Tereni -->
                                    <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-tereni">

                                            <div class="row">
                                                <div class="row form-segment">
                                                    <header class="card__header">
                                                        <h4><i class="fa fa-plus-circle"></i> Unos terena/sale</h4>
                                                    </header>
                                                </div>
                                                <div id="tereniLista">
                                                    @if(old('tereni'))
                                                        @foreach(old('tereni') as $key => $teren)
                                                        <div class="row terenHover">
                                                            <div class="izbrisiTeren"><i class="fa fa-times-circle-o"></i></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-12">
                                                                    <label for="name">Naziv ili oznaka terena/sale</label>
                                                                    <input type="text" name="tereni[{{ $key }}][name]" id="name" class="form-control" placeholder="Unesite naziv ili oznaku  terena" value="{{ old('tereni.' . $key . '.name') }}">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="sport">Sport</label>
                                                                    <div class="form-group">
                                                                        <label class="checkbox checkbox-inline">
                                                                            <input type="checkbox" name="sport" value="Nogomet" {{ (is_array(old('sport')) and in_array('Nogomet', old('sport'))) ? ' checked' : '' }}> Nogomet
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline">
                                                                            <input type="checkbox" name="sport" value="Mali nogomet" {{ (is_array(old('sport')) and in_array('Mali nogomet', old('sport'))) ? ' checked' : '' }}> Mali nogomet
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline">
                                                                            <input type="checkbox" name="sport" value="Košarka" {{ (is_array(old('sport')) and in_array('Košarka', old('sport'))) ? ' checked' : '' }}> Košarka
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="sport" value="Tenis" {{ (is_array(old('sport')) and in_array('Tenis', old('sport'))) ? ' checked' : '' }}> Tenis
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="sport" value="Stoni tenis" {{ (is_array(old('sport')) and in_array('Stoni tenis', old('sport'))) ? ' checked' : '' }}> Stoni tenis
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="sport" value="Odbojka" {{ (is_array(old('sport')) and in_array('Odbojka', old('sport'))) ? ' checked' : '' }}> Odbojka
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="sport" value="Badminton" {{ (is_array(old('sport')) and in_array('Badminton', old('sport'))) ? ' checked' : '' }}> Badminton
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="sport" value="Univerzalan teren" {{ (is_array(old('sport')) and in_array('Univerzalan teren', old('sport'))) ? ' checked' : '' }}> Univerzalan teren
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="type_of_field">Vrsta podloge</label>
                                                                        <select class="form-control" id="type_of_field">
                                                                            <option value="" disabled="" {{ old('tereni.' . $key . '.type_of_field') == '' ? 'selected' : '' }}>Izaberite podlogu terena</option>
                                                                            <option value="Parket" {{ old('tereni.' . $key . '.type_of_field') == 'Parket' ? 'selected' : '' }}>Parket</option>
                                                                            <option value="Bitumen" {{ old('tereni.' . $key . '.type_of_field') == 'Bitumen' ? 'selected' : '' }}>Bitumen</option>
                                                                            <option value="Plastika" {{ old('tereni.' . $key . '.type_of_field') == 'Plastika' ? 'selected' : '' }}>Plastika</option>
                                                                            <option value="Guma" {{ old('tereni.' . $key . '.type_of_field') == 'Guma' ? 'selected' : '' }}>Guma</option>
                                                                            <option value="Zemlja" {{ old('tereni.' . $key . '.type_of_field') == 'Zemlja' ? 'selected' : '' }}>Zemlja</option>
                                                                            <option value="Ostalo" {{ old('tereni.' . $key . '.type_of_field') == 'Ostalo' ? 'selected' : '' }}>Ostalo</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="capacity">Kapacitet korisnika</label>
                                                                        <input type="number" name="capacity" id="capacity" class="form-control" placeholder="Unesite maksimalan broj korisnika" value="{{ old('tereni.' . $key . '.capacity') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="public_capacity">Kapacitet gledaoca</label>
                                                                        <input type="number" name="public_capacity" id="public_capacity" class="form-control" placeholder="Unesite maksimalan broj gledaoca" value="{{ old('tereni.' . $key . '.public_capacity') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="length">Dužina terena (m)</label>
                                                                        <input type="number" name="length" id="length" class="form-control" placeholder="Unesite dužinu terena u metrima" value="{{ old('tereni.' . $key . '.length') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="width">Širina terena (m)</label>
                                                                        <input type="number" name="width" id="width" class="form-control" placeholder="Unesite širinu terena u metrima" value="{{ old('tereni.' . $key . '.width') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button class="btn btn-primary" type="button" id="dodajTeren">Dodaj teren/salu</button>
                                                </div>
                                            </div>

                                            <div class="row">
                                                    <div class="form-group form-group--submit col-md-6">
                                                        <a href="#tab-biografija" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad" aria-expanded="true">
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
                                    <!-- Tab: Sale i Tereni / End -->
                                @endif

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
                                            <a href="#tab-biografija" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad">
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
                            <!-- Single Product Tabbed Content / End -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection