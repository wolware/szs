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
                    <h1 class="page-icon-objavi-title"><img src="{{url('images/icons/clock.svg')}}" ></h1>
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
                            <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O turniru</small>Općenito</a></li>
                            <li role="presentation"><a href="#tab-predispozicije" role="tab" data-toggle="tab"><i class="fa fa-bolt"></i><small>Pravila i</small>Sistem</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content card__content">


                            <!-- Tab: Općenito -->
                            <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
                                <div class="row">
                                    <form action="#">
                                        <div class="row identitet-style">

                                            <div class="col-md-6 objavi-klub-logo-setup">

                                                <div class="col-md-7">

                                                    <div class="alc-staff__photo">
                                                        <img class="slika-upload-klub img-responsive" style="max-height: 200px" src="{{url('images/icons/calendar.png')}}" alt="">
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group col-md-12">
                                                    <label for="eventopis"><img class="flow-icons-013" src="{{url('images/icons/edit.svg')}}">Opis eventa</label>
                                                    <input type="text" name="eventopis" id="eventopis" class="form-control" placeholder="Turnir">
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="sport"><img class="flow-icons-013" src="{{url('images/icons/menu-circular-button.svg')}}">Sport</label>
                                                    <select class="form-control" id="sport">
                                                        <option value="" disabled selected>Izaberite sport</option>
                                                        <option value="">Aikido</option>
                                                        <option value="">Atletika</option>
                                                        <option value="">Auto-Moto</option>
                                                        <option value="">Badminton</option>
                                                        <option value="">Biciklizam</option>
                                                        <option value="">Bob</option>
                                                        <option value="">Boćanje</option>
                                                        <option value="">Bodybuilding & Fitness</option>
                                                        <option value="">Boks</option>
                                                        <option value="">Curling</option>
                                                        <option value="">Dizanje tegova</option>
                                                        <option value="">Futsal</option>
                                                        <option value="">Gimnastika</option>
                                                        <option value="">Golf</option>
                                                        <option value="">Hokej</option>
                                                        <option value="">Hrvanje</option>
                                                        <option value="">Jedrenje</option>
                                                        <option value="">Ju Jitsu</option>
                                                        <option value="">Judo</option>
                                                        <option value="">Kajak Kanu i Rafting</option>
                                                        <option value="">Karate</option>
                                                        <option value="">Kick Box</option>
                                                        <option value="">Klizanje</option>
                                                        <option value="">Konjički sportovi</option>
                                                        <option value="">Košarka</option>
                                                        <option value="">Kung Fu</option>
                                                        <option value="">Kuglanje</option>
                                                        <option value="">Nogomet</option>
                                                        <option value="">Mačevanje</option>
                                                        <option value="">Odbojka</option>
                                                        <option value="">Planinarstvo</option>
                                                        <option value="">Plivanje</option>
                                                        <option value="">Ragbi</option>
                                                        <option value="">Ronjenje</option>
                                                        <option value="">Rukomet</option>
                                                        <option value="">Skijanje</option>
                                                        <option value="">Sportski ribolov</option>
                                                        <option value="">Stoni tenis</option>
                                                        <option value="">Streličarstvo</option>
                                                        <option value="">Streljaštvo</option>
                                                        <option value="">Šah</option>
                                                        <option value="">Taekwondo</option>
                                                        <option value="">Tenis</option>
                                                        <option value="">Triatlon</option>
                                                        <option value="">Vaterpolo</option>
                                                        <option value="">Vazduhoplovstvo</option>
                                                        <option value="">Veslanje</option>
                                                    </select>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="row form-segment">
                                            <header class="card__header">
                                                <h4><i class="fa fa-location-arrow"></i> Navigacija</h4>
                                            </header>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="kontinent"><img class="flow-icons-013" src="{{url('images/icons/international-delivery.svg')}}">Kontinent</label>
                                            <select class="form-control" id="kontinent">
                                                <option value="eu" disabled selected>Evropa</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="drzava"><img class="flow-icons-013" src="{{url('images/icons/earth.svg')}}">Država</label>
                                            <select class="form-control" id="drzava">
                                                <option value="bih" disabled selected>Bosna i Hercegovina</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="entitet"><img class="flow-icons-013" src="{{url('images/icons/map.svg')}}">Entitet/Distrikt</label>
                                            <select class="form-control" id="entitet">
                                                <option value="" disabled selected>Izaberite entitet/distrikt</option>
                                                <option value="fbih">Federacija BiH</option>
                                                <option value="rs">Republika Srpska</option>
                                                <option value="distrikt" disabled>Distrikt Brčko</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="kanton"><img class="flow-icons-013" src="{{url('images/icons/placeholder.svg')}}">Kanton</label>
                                            <select class="form-control" id="kanton">
                                                <option value="" disabled selected>Izaberite kanton</option>
                                                <option value="usk" disabled>Unsko-sanski Kanton</option>
                                                <option value="pk" disabled>Posavski Kanton</option>
                                                <option value="tk" disabled>Tuzlanski Kanton</option>
                                                <option value="zdk" disabled>Zeničko-dobojski Kanton</option>
                                                <option value="bpk" disabled>Bosansko-podrinjski Kanton</option>
                                                <option value="sbk" disabled>Srednjobosanski Kanton</option>
                                                <option value="hnk" disabled>Hercegovačko-neretvanski Kanton</option>
                                                <option value="zhk" disabled>Zapadnohercegovački Kanton</option>
                                                <option value="ks">Kanton Sarajevo</option>
                                                <option value="k10" disabled>Kanton 10</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="opcine-ks"><img class="flow-icons-013" src="{{url('images/icons/opcina.svg')}}">Općine Kantona Sarajevo</label>
                                            <select class="form-control" id="opcine-ks">
                                                <option value="" disabled selected>Izaberite općinu</option>
                                                <option value="hadzici">Hadžići</option>
                                                <option value="ilidza">Ilidža</option>
                                                <option value="ilijas">Ilijaš</option>
                                                <option value="centar">Centar</option>
                                                <option value="novi-grad">Novi Grad</option>
                                                <option value="novo-sarajevo">Novo Sarajevo</option>
                                                <option value="stari-grad">Stari Grad</option>
                                                <option value="trnovo">Trnovo</option>
                                                <option value="vogosca">Vogošća</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="regija"><img class="flow-icons-013" src="{{url('images/icons/placeholder.svg')}}">Regija</label>
                                            <select class="form-control" id="regija">
                                                <option value="" disabled selected>Izaberite regiju</option>
                                                <option value="blk" disabled>Banjalučka</option>
                                                <option value="dbj" disabled>Dobojsko-bijeljinska</option>
                                                <option value="szv">Sarajevsko-zvornička</option>
                                                <option value="tbf"disabled>Trebinjsko-fočanska</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="opcine-sz-reg"><img class="flow-icons-013" src="{{url('images/icons/opcina.svg')}}">Općine Sarajevsko-Zvorničke regije</label>
                                            <select class="form-control" id="opcine-sz-reg">
                                                <option value="" disabled selected>Izaberite općinu</option>
                                                <option value="bratunac" disabled>Bratunac</option>
                                                <option value="hanpijesak" disabled>Han Pijesak</option>
                                                <option value="ilijas2">Ilijaš</option>
                                                <option value="istocni-stari-grad">Istočni Stari Grad</option>
                                                <option value="kasindo">Kasindo</option>
                                                <option value="kladanj" disabled>Kladanj</option>
                                                <option value="lukavica" disabled>Lukavica</option>
                                                <option value="milici" disabled>Milići</option>
                                                <option value="olovo" disabled>Olovo</option>
                                                <option value="osmaci" disabled>Osmaci</option>
                                                <option value="pale">Pale</option>
                                                <option value="rogatica" disabled>Rogatica</option>
                                                <option value="rudo" disabled>Rudo</option>
                                                <option value="sa-novi-grad">Sarajevo Novi Grad</option>
                                                <option value="sokolac" disabled>Sokolac</option>
                                                <option value="srebrenica" disabled>Srebrenica</option>
                                                <option value="trnovo2">Trnovo</option>
                                                <option value="ustipraca">Ustiprača</option>
                                                <option value="visegrad" disabled>Višegrad</option>
                                                <option value="vlasenica" disabled>Vlasenica</option>
                                                <option value="zvornik" disabled>Zvornik</option>
                                                <option value="sekovici" disabled>Šekovići</option>
                                                <option value="zepa" disabled>Žepa</option>
                                            </select>
                                        </div>
                                        {{--TODO dodaj  google autocomplete--}}
                                        {{--Il ako hoces dodaj google map pa nek oznaci pin na mapi,svejedno je--}}
                                        <div class="form-group col-md-4">
                                            <label for="mjesto"><img class="flow-icons-013" src="{{url('images/icons/small-calendar.svg')}}">Mjesto/Grad događaja</label>
                                            <input type="text" name="mjesto" id="mjesto" class="form-control" placeholder="Unesite mjesto događaja" required>
                                        </div>

                                    </form>
                                </div>





                                <div class="row form-objavi-klub-01">
                                    <header class="card__header">
                                        <h4><i class="fa fa-youtube-play"></i> Google Map</h4>
                                    </header>
                                </div>
                                <div class="row">
                                    <form action="#">

                                        <div class="form-group col-md-12">
                                            <label for="embedmap"><img class="flow-icons-013" src="{{url('images/icons/code.svg')}}">Ugradbeni kod sa Google Maps (<a href="kako-do-koda.php">kako do koda</a>?)</label>
                                            <input type="text" name="embedmap" id="embedmap" class="form-control" placeholder="Unesite ugradbeni kod sa Google Maps">
                                        </div>

                                    </form>

                                    <div class="col-md-6">
                                    </div>
                                    <div class="form-group form-group--submit col-md-6" >
                                        <a href="#" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></a>
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
                                    <form action="#">
                                        {{--TODO dodaj onaj kalendar ovdje, sam skontaj hoces li u jednom ovom polju i vrijeme uracunat, mislim da bi tako bolje bilo--}}
                                        <div class="form-group col-md-6">
                                            <label class="control-label" for="date-otvor"><i class="fa fa-calendar-o"></i> Datum početka</label>
                                            <input class="form-control" id="date-otvor" name="date-otvor" placeholder="Izaberite datum početka eventa" type="text"/>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="vrijeme"><img class="flow-icons-013" src="{{url('images/icons/time-left-event.svg')}}">Vrijeme početka</label>
                                            <input type="text" name="vrijeme" id="vrijeme" min="1" class="form-control" placeholder="Unesite vrijeme početka eventa">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="vrsta"><img class="flow-icons-013" src="{{url('images/icons/info-turnir.svg')}}">Vrsta eventa</label>
                                            <select class="form-control" id="vrsta">
                                                <option value="" disabled selected>Izaberite</option>
                                                <option value="">Turnir</option>
                                                <option value="">Konferencija</option>
                                                <option value="">Promocija</option>
                                                <option value="">Dodjela nagrada</option>
                                                <option value="">Ostalo</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="ucesnici"><img class="flow-icons-013" src="{{url('images/icons/gledaoci.svg')}}">Max. broj učesnika</label>
                                            <input type="number" name="ucesnici" id="ucesnici" min="1" class="form-control" placeholder="Unesite max broj učesnika">
                                        </div>

                                    </form>
                                </div>
                                {{--TODO ovo preko JS-a rjesi da je vidjljivo samo ako je turnir izabran gore u listi--}}
                                <div class="row form-objavi-klub-01">
                                    <header class="card__header">
                                        <h4><i class="fa fa-info-circle"></i> Kotizacija i nagrade</h4>
                                    </header>
                                </div>
                                <div class="row">
                                    <form action="#">

                                        {{--TODO moze biti null, stavi negdje da je neobavezno--}}
                                        <div class="form-group col-md-4">
                                            <label for="kotizacija"><img class="flow-icons-013" src="{{url('images/icons/coins-money-stack.svg')}}">Kotizacija za učešće (KM)</label>
                                            <input type="number" name="kotizacija" id="kotizacija" class="form-control" placeholder="Unesite iznos">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="nagrada"><img class="flow-icons-013" src="{{url('images/icons/trophy2.svg')}}">Glavna nagrada (KM)</label>
                                            <input type="number" name="nagrada" id="nagrada" class="form-control" placeholder="Unesite iznos">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <label for="nagrada"><img class="flow-icons-013" src="{{url('images/icons/timer.svg')}}">Trajanje turnira (dana)</label>
                                            <input type="number" name="nagrada" id="nagrada" class="form-control" placeholder="Unesite broj dana trajanja turnira">
                                        </div>
                                    </form>
                                </div>

                                <div class="row form-objavi-klub-01">
                                    <header class="card__header">
                                        <h4><i class="fa fa-info-circle"></i> Dodatne informacije</h4>
                                    </header>
                                </div>
                                <div class="row">
                                    <form action="#">

                                        <div class="row identitet-style">

                                            <div class="col-md-12">

                                                <div class="form-group col-md-12">
                                                    <label for="opis"><img class="flow-icons-013" src="{{url('images/icons/edit.svg')}}">Informacije</label>
                                                    <textarea class="form-control" rows="10" id="opis" maxlength="1050" placeholder="Upišite ukratko informacije vezane za događaj..."></textarea>
                                                </div>

                                            </div>



                                        </div>

                                    </form>

                                    <div class="form-group form-group--submit col-md-6">
                                        <a href="#" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
                                    </div>
                                    <div class="form-group form-group--submit col-md-6">
                                        <a href="#" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <!-- Tab: Predispozicije / End -->

                        <!-- Tab: Vremeplov -->

                        <div role="tabpanel" class="tab-pane fade neaktivno" id="tab-biografija">
                            <div class="row obavijesti-racun">
                                <div class="alert alert-warning">
                                    <strong>PREMIUM račun Vam dozvoljava unos do maksimalnih 150 linija teksta.</strong>
                                </div>
                                <div class="alert alert-warning">
                                    <button href="premium.php" type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Aktiviraj premium</button>
                                    <strong>STANDARDAN račun Vam dozvoljava unos do maksimalnih 50 linija teksta.</strong>
                                </div>
                            </div>
                            <div class="row">

                                <form action="#">
                                    <div class="row identitet-style">

                                        <div class="col-md-12">

                                            <div class="form-group col-md-12">
                                                <label for="opis"><img class="flow-icons-013" src="{{url('images/icons/edit.svg')}}">Vremeplov objekta</label>
                                                <textarea class="form-control" rows="20" id="opis" maxlength="1050" placeholder="Upišite ukratko informacije vezane za historijat vašeg kluba i njegovu tradiciju..."></textarea>
                                            </div>

                                        </div>

                                    </div>
                                </form>

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




                    </div>
                    <!-- Single Product Tabbed Content / End -->
                </div>
            </div>
        </div>
    </div>

@endsection