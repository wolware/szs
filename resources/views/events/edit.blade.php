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
                        <h1 class="page-heading__title">Uredi Event</h1>
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
                                <!-- Tab panes -->
                                <div class="tab-content card__content">
                                    <!-- Tab: Općenito -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                        <form id="editEventGeneral" role="form" action="{{ url('/events/' . $event->id . '/edit/general') }}" method="POST" enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="latitude" id="latitude" value="{{ $event->latitude }}">
                                            <input type="hidden" name="longitude" id="longitude" value="{{ $event->longitude }}">
                                            <input type="hidden" name="_method" value="PATCH">
                                            <div class="row">
                                                <div class="row identitet-style">

                                                    <div class="col-md-6 objavi-klub-logo-setup">

                                                        <div class="col-md-7">

                                                            <div class="alc-staff__photo">
                                                                <img class="slika-upload-klub" id="slika-upload-klub" src="{{asset('images/event_images/' . $event->image)}}" alt="">
                                                            </div>

                                                        </div>

                                                        <div class="col-md-5 sadrzaj-slike">

                                                            <p class="dodaj-sliku-naslov klub-a1">Slika eventa</p>
                                                            <p class="dodaj-sliku-call">Identitet eventa</p>
                                                            <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
                                                                Odaberi logo... <input type="file" id="file_logo_kluba" name="image" class="not-visible" accept="image/*" onchange="previewFile('#file_logo_kluba', '#slika-upload-klub', 1024, 1024, 512, 512)">
                                                            </label>
                                                            <div class="info001">
                                                                <p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
                                                                <p class="info-upload-slike">Minimalno: 512x512 px</p>
                                                                <p class="info-upload-slike">Maksimalno: 2048x2048 px</p>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">

                                                        <div class="form-group col-md-12">
                                                            <label for="name"><img class="flow-icons-013" src="{{url('images/icons/edit.svg')}}"> Naziv eventa*</label>
                                                            <input type="text" name="name" id="name" class="form-control" placeholder="Turnir" value="{{ $event->name }}">
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label for="club-type"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Tip sporta*</label>
                                                                <select name="type" class="form-control" id="club-type">
                                                                    <option value="" disabled {{ !$event->sport ? 'selected' : '' }}>Izaberite tip sporta</option>
                                                                    <option value="1" {{ !$event->sport->with_disabilities ? 'selected' : '' }}>Sportovi</option>
                                                                    <option value="2" {{ $event->sport->with_disabilities ? 'selected' : '' }}>Invalidski sportovi</option>
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label for="sport"><img class="flow-icons-013" src="{{asset('images/icons/menu-circular-button.svg')}}"> Sport eventa*</label>
                                                                <select name="sport" class="form-control" id="sport" {{ $event->sport ? '' : 'disabled' }}>
                                                                    <option selected disabled>Izaberite sport eventa</option>
                                                                    @foreach($sports as $sport)
                                                                        <option data-disabled="{{ $sport->with_disabilities }}" value="{{ $sport->id }}" {{ $event->sport->id == $sport->id ? 'selected' : '' }}>{{ $sport->name }}</option>
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
                                                            <option selected disabled>Izaberite kontinent</option>
                                                            @foreach($regions as $region)
                                                                @if($region->region_type->type == 'Continent')
                                                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $event->regions->get('continent') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="country"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"> Država*</label>
                                                        <select name="country" class="form-control" id="country" {{ (old('country') || $event->regions->has('country')) ? '' : 'disabled' }}>
                                                            <option selected disabled>Izaberite državu</option>
                                                            @foreach($regions as $region)
                                                                @if($region->region_type->type == 'Country')
                                                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $event->regions->get('country') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="province"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"> Pokrajina*</label>
                                                        <select name="province" class="form-control" id="province" {{ (old('province') || $event->regions->has('province')) ? '' : 'disabled' }}>
                                                            <option selected disabled>Izaberite pokrajinu</option>
                                                            @foreach($regions as $region)
                                                                @if($region->region_type->type == 'Province')
                                                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $event->regions->get('province') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="region"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"> Regija*</label>
                                                        <select name="region" class="form-control" id="region" {{ (old('region') || $event->regions->has('region')) ? '' : 'disabled' }}>
                                                            <option selected disabled>Izaberite regiju</option>
                                                            @foreach($regions as $region)
                                                                @if($region->region_type->type == 'Region')
                                                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $event->regions->get('region') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="municipality"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"> Općina*</label>
                                                        <select name="municipality" class="form-control" id="municipality" {{ (old('municipality') || $event->regions->has('municipality')) ? '' : 'disabled' }}>
                                                            <option selected disabled>Izaberite općinu</option>
                                                            @foreach($regions as $region)
                                                                @if($region->region_type->type == 'Municipality')
                                                                    <option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $event->regions->get('municipality') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="city"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Mjesto/Grad*</label>
                                                        <input name="city" id="city" class="form-control" placeholder="Unesite mjesto sportskog kadra" onfocus="initAutocomplete()" value="{{ $event->city }}">
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
                                                <div class="form-group form-group--submit col-md-12">
                                                    <button type="submit" class="btn btn-default btn-sm btn-block btn-spasi">Spremi općenito</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Tab: Općenito / End -->

                                    <!-- Tab: Predispozicije -->
                                    <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-predispozicije">
                                        <form id="editEventInfo" role="form" action="{{ url('/events/' . $event->id . '/edit/info') }}" method="POST" enctype="multipart/form-data">
                                            {!! csrf_field() !!}
                                            <input type="hidden" name="_method" value="PATCH">
                                            <div class="row form-objavi-klub-01">
                                                <header class="card__header">
                                                    <h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
                                                </header>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label class="control-label" for="date_start"><i class="fa fa-calendar-o"></i> Datum početka*</label>
                                                    <input class="form-control" id="date_start" name="date_start" placeholder="Izaberite datum početka eventa" value="{{ \Carbon\Carbon::parse($event->date_start)->format('m/d/Y') }}"/>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="time_start">Vrijeme početka*</label>
                                                    <input type="text" name="time_start" id="time_start" class="form-control" placeholder="Unesite vrijeme početka eventa" value="{{ \Carbon\Carbon::parse($event->time_start)->format('H:i') }}">
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="event_type">Vrsta eventa*</label>
                                                    <select class="form-control" id="event_type" name="event_type_id">
                                                        <option value="" disabled selected>Izaberite</option>
                                                        @foreach($event_types as $type)
                                                            <option value="{{ $type->id }}" {{ $event->type->id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="max_participants"><img class="flow-icons-013" src="{{url('images/icons/gledaoci.svg')}}"> Max. broj učesnika</label>
                                                    <input type="number" name="max_participants" id="max_participants" min="1" class="form-control" placeholder="Unesite max broj učesnika" value="{{ $event->max_participants }}">
                                                </div>
                                            </div>
                                            <div class="turnir-options" style="display: {{ $event->type->id == 1 ? 'block' : 'none' }};">
                                                <div class="row form-objavi-klub-01">
                                                    <header class="card__header">
                                                        <h4><i class="fa fa-info-circle"></i> Kotizacija i nagrade</h4>
                                                    </header>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="registration_fee"><img class="flow-icons-013" src="{{url('images/icons/coins-money-stack.svg')}}"> Kotizacija za učešće (KM)*</label>
                                                        <input type="number" name="registration_fee" id="registration_fee" class="form-control" placeholder="Unesite iznos" value="{{ $event->registration_fee }}">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="first_place_award">Glavna nagrada (KM)*</label>
                                                        <input type="number" name="first_place_award" id="first_place_award" class="form-control" placeholder="Unesite iznos" value="{{ $event->first_place_award }}">
                                                    </div>

                                                    <div class="form-group col-md-4">
                                                        <label for="duration">Trajanje turnira (dana)</label>
                                                        <input type="number" name="duration" id="duration" class="form-control" placeholder="Unesite broj dana trajanja turnira" value="{{ $event->duration }}">
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
                                                            <textarea class="form-control" rows="10" id="description" name="description" placeholder="Upišite ukratko informacije vezane za događaj...">{{ $event->description }}</textarea>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group form-group--submit col-md-12">
                                                    <button type="submit" class="btn btn-default btn-sm btn-block btn-spasi">Spremi pravila i sistem</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Tab: Predispozicije / End -->
                                </div>
                        </div>
                        <!-- Single Product Tabbed Content / End -->
                    </div>
                </div>
            </div>
        </div>

@endsection