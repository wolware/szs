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
                    <h1 class="page-icon-objavi-title"><img src="{{url('images/icons/calendar-add-event-button-with-plus-sign.svg')}}" ></h1>
                    <h1 class="page-heading__title">Objavi Event</h1>
                    <ol class="page-heading__breadcrumb breadcrumb">
                        <li class="registracija-podnaslov">Sportski Događaj</li>
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
                            <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O eventu</small>Općenito</a></li>
                            <li role="presentation"><a href="#tab-predispozicije" role="tab" data-toggle="tab"><i class="fa fa-bolt"></i><small>Pravila i</small>Sistem</a></li>
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

                        <form id="createNewEvent" role="form" action="{{ url('/events/create') }}" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <input type="hidden" name="latitude" id="latitude" value="{{ old('latitude') }}">
                            <input type="hidden" name="longitude" id="longitude" value="{{ old('longitude') }}">
                        <!-- Tab panes -->
                            <div class="tab-content card__content">
                                <!-- Tab: Općenito -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                    <div class="row">
                                            <div class="row identitet-style">

                                                <div class="col-md-6 objavi-klub-logo-setup">

                                                    <div class="col-md-7">

                                                        <div class="alc-staff__photo">
                                                            <img class="slika-upload-klub" id="slika-upload-klub" src="{{asset('images/default_avatar.png')}}" alt="">
                                                        </div>

                                                    </div>

                                                    <div class="col-md-5 sadrzaj-slike">

                                                        <p class="dodaj-sliku-naslov klub-a1">Slika eventa*</p>
                                                        <p class="dodaj-sliku-call">Identitet eventa</p>
                                                        <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                                            Odaberi logo... <input type="file" id="file_logo_kluba" name="image" class="not-visible" accept="image/*" onchange="previewFile('#file_logo_kluba', '#slika-upload-klub', 1024, 1024, 512, 512)">
                                                        </label>
                                                        <div class="info001">
                                                            <p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
                                                            <p class="info-upload-slike">Minimalno: 512x512 px</p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">

                                                    <div class="form-group col-md-12">
                                                        <label for="name"><img class="flow-icons-013" src="{{url('images/icons/edit.svg')}}"> Naziv eventa*</label>
                                                        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder="Turnir">
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-6">
                                                            <label for="club-type"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Tip sporta*</label>
                                                            <select name="type" class="form-control" id="club-type">
                                                                <option value="" disabled {{ old('type') == '' ? 'selected' : '' }}>Izaberite tip sporta</option>
                                                                <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>Sportovi</option>
                                                                <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>Invalidski sportovi</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="sport"><img class="flow-icons-013" src="{{asset('images/icons/menu-circular-button.svg')}}"> Sport eventa*</label>
                                                            <select name="sport" class="form-control" id="sport" {{ old('sport') ? '' : 'disabled' }}>
                                                                <option selected disabled>Izaberite sport eventa</option>
                                                                @foreach($sports as $sport)
                                                                    <option data-disabled="{{ $sport->with_disabilities }}" value="{{ $sport->id }}" {{ old('sport') == $sport->id ? 'selected' : '' }}>{{ $sport->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
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
                                                        <option selected disabled>Izaberite kontinent eventa</option>
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
                                                        <option selected disabled>Izaberite državu eventa</option>
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
                                                        <option selected disabled>Izaberite pokrajinu eventa</option>
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
                                                        <option selected disabled>Izaberite regiju eventa</option>
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
                                                        <option selected disabled>Izaberite općinu eventa</option>
                                                        @foreach($regions as $region)
                                                            @if($region->region_type->type == 'Municipality')
                                                                <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ old('municipality') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="city"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Mjesto/Adresa održavanja eventa*</label>
                                                    <input name="city" id="city" class="form-control" placeholder="Unesite mjesto sportiste" onfocus="initAutocomplete()" value="{{ old('city') }}">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <div class="alert alert-warning">
                                                        <p>Napomena: Mjesto/Adresa održavanja eventa mora biti unesena koristeći ponuđenu listu Google Mapsa prilikom unosa adrese, kako bi naš sistem automatski za Vas kreirao mapu kada se event prikazuje za ostale korisnike.</p>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-6">
                                        </div>
                                        <div class="form-group form-group--submit col-md-6" >
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
                                            <div class="form-group col-md-6">
                                                <label class="control-label" for="date_start"><i class="fa fa-calendar-o"></i>
                                                    Datum početka*</label>
                                                <div class="input-group date form_date_event" data-date=""
                                                     data-date-format="mm/dd/yy" data-link-field="dtp_input2"
                                                     data-link-format="dd.mm.yyyy">
                                                    <input class="form-control" id="date_start" name="date_start" size="16"
                                                           type="text"  placeholder="Izaberite datum početka eventa" value="{{old('date_start')}}" readonly>

                                                    <span class="input-group-addon"><span
                                                                class="glyphicon glyphicon-calendar"></span></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="time_start">Vrijeme početka*</label>
                                                {{--<input type="text" name="time_start" id="time_start" class="form-control" placeholder="Unesite vrijeme početka eventa" value="{{ old('time_start') }}">--}}
                                                <div class="input-group bootstrap-timepicker timepicker">
                                                    <input id="timepicker" type="text" class="form-control input-small">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="event_type">Vrsta eventa*</label>
                                                <select class="form-control" id="event_type" name="event_type_id">
                                                    <option value="" disabled selected>Izaberite</option>
                                                    @foreach($event_types as $type)
                                                        <option value="{{ $type->id }}" {{ old('event_type_id') == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="max_participants"><img class="flow-icons-013" src="{{url('images/icons/gledaoci.svg')}}"> Max. broj učesnika</label>
                                                <input type="number" name="max_participants" id="max_participants" min="1" class="form-control" placeholder="Unesite max broj učesnika" value="{{ old('max_participants') }}">
                                            </div>
                                    </div>
                                    <div class="turnir-options" style="display: {{ old('event_type_id') == 1 ? 'block' : 'none' }};">
                                        <div class="row form-objavi-klub-01">
                                            <header class="card__header">
                                                <h4><i class="fa fa-info-circle"></i> Kotizacija i nagrade</h4>
                                            </header>
                                        </div>
                                        <div class="row">
                                                <div class="form-group col-md-4">
                                                    <label for="registration_fee"><img class="flow-icons-013" src="{{url('images/icons/coins-money-stack.svg')}}"> Kotizacija za učešće (KM)*</label>
                                                    <input type="number" name="registration_fee" id="registration_fee" class="form-control" placeholder="Unesite iznos" value="{{ old('registration_fee') }}">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="first_place_award">Glavna nagrada (KM)*</label>
                                                    <input type="number" name="first_place_award" id="first_place_award" class="form-control" placeholder="Unesite iznos" value="{{ old('first_place_award') }}">
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="duration">Trajanje turnira (dana)</label>
                                                    <input type="number" name="duration" id="duration" class="form-control" placeholder="Unesite broj dana trajanja turnira" value="{{ old('duration') }}">
                                                </div>
                                        </div>
                                    </div>

                                    <div class="row form-objavi-klub-01">
                                        <header class="card__header">
                                            <h4><i class="fa fa-info-circle"></i> Dodatne informacije</h4>
                                        </header>
                                    </div>
                                    <div class="row">

                                            <div class="row identitet-style">

                                                <div class="col-md-12">

                                                    <div class="form-group col-md-12">
                                                        <label for="description"><img class="flow-icons-013" src="{{url('images/icons/edit.svg')}}"> Informacije</label>
                                                        <textarea class="form-control" rows="10" id="description" name="description" placeholder="Upišite ukratko informacije vezane za događaj..."></textarea>
                                                    </div>

                                                </div>

                                            </div>
                                        <div class="form-group form-group--submit col-md-6">
                                            <a href="#tab-opcenito" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
                                        </div>
                                        <div class="form-group form-group--submit col-md-6" >
                                            <button type="submit" class="btn btn-default btn-sm btn-block btn-dalje"><i class="fa fa-plus-circle"></i> Završi i objavi</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- Tab: Predispozicije / End -->
                            </div>
                        </form>

                    </div>
                    <!-- Single Product Tabbed Content / End -->
                </div>
            </div>
        </div>
    </div>

@endsection