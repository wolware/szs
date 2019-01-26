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
                                    <li role="presentation"><a href="#tab-cjenovnik-balon" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-database"></i><small>Cjenovnik</small>Usluga</a></li>
                                @endif
                                @if($object_type->type == 'Skijalište')
                                    <li role="presentation"><a href="#tab-staze" role="tab" data-toggle="tab" aria-expanded="true"><i class="fa fa-road"></i><small>Staze i</small>Liftovi</a></li>
                                    <li role="presentation"><a href="#tab-cjenovnik-skijaliste" role="tab" data-toggle="tab" aria-expanded="false"><i class="fa fa-database"></i><small>Cjenovnik</small>Usluga</a></li>
                                @endif
                                <li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Foto</small>Galerija</a></li>
                                <li role="presentation"><a href="#tab-dokaz" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Dokaz</small>Vlasništva</a></li>
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

                            <form id="createNewObject" role="form" action="{{ url('/objects/' . $object_type->id . '/create') }}" method="POST" enctype="multipart/form-data" >
                            {!! csrf_field() !!}
                                <input type="hidden" name="latitude" id="latitude" value="{{old('latitude')}}">
                                <input type="hidden" name="longitude" id="longitude" value="{{old('longitude')}}">
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
                                                            Odaberi sliku... <input type="file" id="slikaprof" name="image" class="not-visible" onchange="previewFile('#slikaprof','#slika_upload_klub',2048, 2048, 600, 800)">
                                                        </label>
                                                        <div class="info001">
                                                            <p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
                                                            <p class="info-upload-slike">Minimalno: 800x600 px</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group col-md-12">
                                                        <label for="name"><img class="flow-icons-013" src="{{asset('assets/images/icons/edit.svg')}}"> Naziv objekta*</label>
                                                        <input type="text" name="name" id="name" class="form-control" placeholder="Unesite puni naziv objekta" value="{{ old('name') }}">
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
                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="form-group form-group--submit col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
                                        </div>

                                    </div>

                                </div>
                                <!-- Tab: Općenito / End -->

                                <!-- Tab: Predispozicije -->
                                <div role="tabpanel" class="tab-pane fade" id="tab-predispozicije">

                                    <div class="row form-objavi-klub-01">
                                        <header class="card__header">
                                            <h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
                                        </header>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label class="control-label" for="established_in"><i class="fa fa-calendar-o"></i>
                                                Datum otvorenja</label>
                                            <div class="input-group date form_date" data-date=""
                                                 data-date-format="mm/dd/yy" data-link-field="dtp_input2"
                                                 data-link-format="mm/dd/yy">
                                                <input class="form-control" id="established_in" name="established_in" size="16"
                                                       type="text"  placeholder="Unesite datum otvorenja" value="{{old('established_in')}}" readonly>

                                                <span class="input-group-addon"><span
                                                            class="glyphicon glyphicon-calendar"></span></span>
                                            </div>
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
                                <div role="tabpanel" class="tab-pane fade" id="tab-biografija">
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
                                    <div role="tabpanel" class="tab-pane fade" id="tab-tereni">

                                            <div class="row">
                                                <div class="row form-segment">
                                                    <header class="card__header">
                                                        <h4><i class="fa fa-plus-circle"></i> Unos terena/sale</h4>
                                                    </header>
                                                </div>
                                                <div id="tereniLista">
                                                    @if(old('tereni'))
                                                        @foreach(old('tereni') as $key => $teren)
                                                        <div class="row terenHover" data-key="{{ $key }}">
                                                            <div class="izbrisiTeren"><i class="fa fa-times-circle-o"></i></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-12">
                                                                    <label for="name">Naziv ili oznaka terena/sale</label>
                                                                    <input type="text" name="tereni[{{ $key }}][name]" id="name{{ $key }}" class="form-control" placeholder="Unesite naziv ili oznaku  terena" value="{{ old('tereni.' . $key . '.name') }}">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="sport">Sport</label>
                                                                    <div class="form-group">
                                                                        <label class="checkbox checkbox-inline">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Nogomet" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Nogomet', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Nogomet
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Mali nogomet" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Mali nogomet', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Mali nogomet
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Košarka" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Košarka', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Košarka
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Tenis" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Tenis', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Tenis
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Stoni tenis" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Stoni tenis', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Stoni tenis
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Odbojka" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Odbojka', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Odbojka
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Badminton" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Badminton', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Badminton
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                        <label class="checkbox checkbox-inline ">
                                                                            <input type="checkbox" name="tereni[{{ $key }}][sports][]" value="Univerzalan teren" {{ (is_array(old('tereni.' . $key . '.sports')) and in_array('Univerzalan teren', old('tereni.' . $key . '.sports'))) ? ' checked' : '' }}> Univerzalan teren
                                                                            <span class="checkbox-indicator"></span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="type_of_field">Vrsta podloge</label>
                                                                        <select class="form-control" name="tereni[{{ $key }}][type_of_field]" id="type_of_field{{ $key }}">
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
                                                                        <input type="number" name="tereni[{{ $key }}][capacity]" id="capacity{{ $key }}" class="form-control" placeholder="Unesite maksimalan broj korisnika" value="{{ old('tereni.' . $key . '.capacity') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="public_capacity">Kapacitet gledaoca</label>
                                                                        <input type="number" name="tereni[{{ $key }}][public_capacity]" id="public_capacity{{ $key }}" class="form-control" placeholder="Unesite maksimalan broj gledaoca" value="{{ old('tereni.' . $key . '.public_capacity') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="length">Dužina terena (m)</label>
                                                                        <input type="number" name="tereni[{{ $key }}][length]" id="length{{ $key }}" class="form-control" placeholder="Unesite dužinu terena u metrima" value="{{ old('tereni.' . $key . '.length') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="width">Širina terena (m)</label>
                                                                        <input type="number" name="tereni[{{ $key }}][width]" id="width{{ $key }}" class="form-control" placeholder="Unesite širinu terena u metrima" value="{{ old('tereni.' . $key . '.width') }}">
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
                                    <!-- Tab: Cjenovnik -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-cjenovnik-balon">

                                            <div class="row">
                                                <div class="row form-segment">
                                                    <header class="card__header">
                                                        <h4><i class="fa fa-plus-circle"></i> Dodavanje cijene</h4>
                                                    </header>
                                                </div>
                                                <div id="balonCjenovnikLista">
                                                    @if(old('cjenovnik'))
                                                        @foreach(old('cjenovnik') as $key => $cjenovnik)
                                                            <div class="row balonCjenovnikHover" data-key="{{ $key }}">
                                                                <div class="izbrisiBalonCjenovnik"><i class="fa fa-times-circle-o"></i></div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group col-md-12">
                                                                        <label for="sport{{ $key }}">Sport</label>
                                                                        <select class="form-control" id="sport{{ $key }}" name="cjenovnik[{{ $key }}][sport]">
                                                                            <option disabled="" {{ old('cjenovnik.' . $key . '.sport') == '' ? 'selected' : '' }}>Izaberite sport</option>
                                                                            <option value="Nogomet" {{ old('cjenovnik.' . $key . '.sport') == 'Nogomet' ? 'selected' : '' }}>Nogomet</option>
                                                                            <option value="Mali nogomet" {{ old('cjenovnik.' . $key . '.sport') == 'Mali nogomet' ? 'selected' : '' }}>Mali nogomet</option>
                                                                            <option value="Košarka" {{ old('cjenovnik.' . $key . '.sport') == 'Košarka' ? 'selected' : '' }}>Košarka</option>
                                                                            <option value="Tenis" {{ old('cjenovnik.' . $key . '.sport') == 'Tenis' ? 'selected' : '' }}>Tenis</option>
                                                                            <option value="Stoni tenis" {{ old('cjenovnik.' . $key . '.sport') == 'Stoni tenis' ? 'selected' : '' }}>Stoni tenis</option>
                                                                            <option value="Odbojka" {{ old('cjenovnik.' . $key . '.sport') == 'Odbojka' ? 'selected' : '' }}>Odbojka</option>
                                                                            <option value="Badminton" {{ old('cjenovnik.' . $key . '.sport') == 'Badminton' ? 'selected' : '' }}>Badminton</option>
                                                                            <option value="Univerzalan teren" {{ old('cjenovnik.' . $key . '.sport') == 'Univerzalan teren' ? 'selected' : '' }}>Univerzalan teren</option>
                                                                        </select>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="name{{ $key }}">Naziv/oznaka terena</label>
                                                                        <input type="text" name="cjenovnik[{{ $key }}][name]" id="name{{ $key }}" class="form-control" placeholder="Unesite naziv ili oznaku terena" value="{{ old('cjenovnik.' . $key . '.name') }}">
                                                                    </div>
                                                                    <div class="form-group col-md-6 col-xs-12">
                                                                        <label for="price_per_hour{{ $key }}">Cijena termina (60 min)</label>
                                                                        <input type="number" name="cjenovnik[{{ $key }}][price_per_hour]" id="price_per_hour{{ $key }}" class="form-control" placeholder="Unesite cijenu u KM" value="{{ old('cjenovnik.' . $key . '.price') }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="col-md-12 text-center">
                                                    <button class="btn btn-primary" type="button" id="balonDodajCjenovnik">Dodaj cjenovnik</button>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="form-group form-group--submit col-md-6">
                                                    <a href="#tab-tereni" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad" aria-expanded="true"><i class="fa fa-chevron-left"></i> Nazad</a>
                                                </div>
                                                <div class="form-group form-group--submit col-md-6">
                                                    <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    <!-- Tab: Cjenovnik / End -->
                                @endif

                                @if($object_type->type == 'Skijalište')
                                    <!-- Tab: Staze -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-staze">

                                        <div class="row">
                                            <div class="row form-segment">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-plus-circle"></i> Unos staze skijališta</h4>
                                                </header>
                                            </div>
                                            <div id="stazeLista">
                                                @if(old('staze'))
                                                    @foreach(old('staze') as $key => $staza)
                                                        <div class="row stazeHover" data-key="{{ $key }}">
                                                            <div class="izbrisiStazu"><i class="fa fa-times-circle-o"></i></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-12">
                                                                    <label for="name{{ $key }}">Naziv staze</label>
                                                                    <input type="text" name="staze[{{ $key }}][name]" id="name{{ $key }}" class="form-control" placeholder="Unesite naziv staze" value="{{ old('staze.' . $key . '.name') }}">
                                                                </div>

                                                                <div class="form-group col-md-12">
                                                                    <label for="level{{ $key }}">Težina staze</label>
                                                                    <select class="form-control" id="level{{ $key }}" name="staze[{{ $key }}][level]">
                                                                        <option value="" disabled="" {{ old('staze.' . $key . '.level') == '' ? 'selected' : '' }}>Odaberite</option>
                                                                        <option value="Lahko" {{ old('staze.' . $key . '.level') == 'Lahko' ? 'selected' : '' }}>Lahko</option>
                                                                        <option value="Srednje" {{ old('staze.' . $key . '.level') == 'Srednje' ? 'selected' : '' }}>Srednje</option>
                                                                        <option value="Teško" {{ old('staze.' . $key . '.level') == 'Teško' ? 'selected' : '' }}>Teško</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="length{{ $key }}">Dužina staze</label>
                                                                    <input type="number" name="staze[{{ $key }}][length]" id="length{{ $key }}" class="form-control" placeholder="Unesite dužinu staze u metrima" value="{{ old('staze.' . $key . '.length') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="time{{ $key }}">Trajanje spusta</label>
                                                                    <input type="number" name="staze[{{ $key }}][time]" id="time{{ $key }}" class="form-control" placeholder="Unesite vrijeme trajanja spusta u minutama" value="{{ old('staze.' . $key . '.time') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="start_point{{ $key }}">Tačka polazišta (m)</label>
                                                                    <input type="number" name="staze[{{ $key }}][start_point]" id="start_point{{ $key }}" class="form-control" placeholder="Unesite nadmorsku visinu tačke polazišta" value="{{ old('staze.' . $key . '.start_point') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="end_point{{ $key }}">Tačka izlaza (m)</label>
                                                                    <input type="number" name="staze[{{ $key }}][end_point]" id="end_point{{ $key }}" class="form-control" placeholder="Unesite nadmorsku visinu tačke izlaza" value="{{ old('staze.' . $key . '.end_point') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="button" id="dodajStazu">Dodaj stazu</button>
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
                                    <!-- Tab: Staze / End -->
                                    <!-- Tab: Cjenovnik -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab-cjenovnik-skijaliste">

                                        <div class="row">
                                            <div class="row form-segment">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-plus-circle"></i> Dodavanje cijene</h4>
                                                </header>
                                            </div>
                                            <div id="skiCjenovnikLista">
                                                @if(old('cjenovnik'))
                                                    @foreach(old('cjenovnik') as $key => $cjenovnik)
                                                        <div class="row skiCjenovnikHover" data-key="{{ $key }}">
                                                            <div class="izbrisiSkiCjenovnik"><i class="fa fa-times-circle-o"></i></div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-12">
                                                                    <label for="description{{ $key }}">Opis karte</label>
                                                                    <input type="text" name="cjenovnik[{{ $key }}][description]" id="description{{ $key }}" class="form-control" placeholder="Unesite opis karte" value="{{ old('cjenovnik.' . $key . '.description') }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="price{{ $key }}">Cijena karte odrasli</label>
                                                                    <input type="text" name="cjenovnik[{{ $key }}][price]" id="price{{ $key }}" class="form-control" placeholder="Unesite cijenu u KM" value="{{ old('cjenovnik.' . $key . '.price') }}">
                                                                </div>
                                                                <div class="form-group col-md-6 col-xs-12">
                                                                    <label for="price_kids{{ $key }}">Cijena karte djeca</label>
                                                                    <input type="text" name="cjenovnik[{{ $key }}][price_kids]" id="price_kids{{ $key }}" class="form-control" placeholder="Unesite cijenu u KM" value="{{ old('cjenovnik.' . $key . '.price_kids') }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary" type="button" id="skiDodajCjenovnik">Dodaj cjenovnik</button>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-staze" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad" aria-expanded="true"><i class="fa fa-chevron-left"></i> Nazad</a>
                                            </div>
                                            <div class="form-group form-group--submit col-md-6">
                                                <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Tab: Cjenovnik / End -->
                                @endif


                                <!-- Tab: Foto galerija -->
                                <div role="tabpanel" class="tab-pane fade" id="tab-galerija">


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
                                        @if($object_type->type == 'Balon')
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-cjenovnik-balon" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad">
                                                    <i class="fa fa-chevron-left"></i> Nazad
                                                </a>
                                            </div>
                                        @elseif($object_type->type == 'Skijalište')
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-cjenovnik-skijaliste" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad">
                                                    <i class="fa fa-chevron-left"></i> Nazad
                                                </a>
                                            </div>
                                        @else
                                            <div class="form-group form-group--submit col-md-6">
                                                <a href="#tab-biografija" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad">
                                                    <i class="fa fa-chevron-left"></i> Nazad
                                                </a>
                                            </div>
                                        @endif
                                        <div class="form-group form-group--submit col-md-6">
                                            <button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab: Foto galerija / End -->

                                <!-- Tab: Dokaz vlasništva -->
                                <div role="tabpanel" class="tab-pane fade" id="tab-dokaz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-warning alert-dismissible">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Zatvori obavijest"><span aria-hidden="true">&times;</span></button>
                                                <strong>Unesite sliku ili slike koje dokazuje da ste baš Vi vlasnik ovog kluba kako bi naša administracija odobrila Vaš klub na mreži Sve Za Sport.</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row dodavanje-slika">
                                        <div class="col-md-12 sadrzaj-slike">
                                            <p class="dodaj-sliku-naslov">Dodajte slike *</p>
                                            <p class="dodaj-sliku-call">koje dokazuju da ste Vi vlasnik kluba</p>
                                            <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                                Odaberi slike... <input type="file" class="galerija_dokaz not-visible" name="proof[]" accept="image/*" multiple>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row form-objavi-klub-01" id="galerija_dokaz_prikaz">
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4"></div>
                                        <!--<div class="form-group form-group--submit col-md-4">
                                            <a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 3 Dodavanje fotografije </a>
                                        </div>-->
                                        <div class="col-md-4"></div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group form-group--submit col-md-6">
                                            <a href="#tab-galerija" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
                                        </div>
                                        <div class="form-group form-group--submit col-md-6" >
                                            <button type="submit" class="btn btn-default btn-sm btn-block btn-dalje"><i class="fa fa-plus-circle"></i> Završi i objavi</button>


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