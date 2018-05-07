@extends('layouts.app')

@section('content')


  <div class="site-wrapper clearfix">
    <div class="site-overlay"></div>


<!-- Header
    ================================================== -->

    <!-- Header / End -->

    <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
      <div class="pushy-panel__inner">
        <header class="pushy-panel__header">
          <div class="pushy-panel__logo">
            <a href="index.php"><img src="{{asset('images/soccer/logo.png')}}" srcset="images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
          </div>
        </header>
        <div class="pushy-panel__content">

          <a href="#" class="push-rekreacija btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-futbol-o"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Rekreacija</h6>
            </a>

            <a href="#" class="push-aplikacije btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-file"></i>
              </div>
              <h6 class="btn-social-counter__title">SZS Aplikacije</h6>
            </a>

            <a href="#" class="push-turizam btn-social-counter" target="_blank">
              <div class="btn-social-counter__icon">
                <i class="fa fa-bus"></i>
              </div>
              <h6 class="btn-social-counter__title">Sportski turizam</h6>
            </a>

        </div>
        <a href="#" class="pushy-panel__back-btn"></a>
      </div>
    </aside>
    <!-- Pushy Panel - Dark / End -->

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
            <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O klubu</small>Općenito</a></li>
			<li role="presentation" class="preslic"><a href="#tab-licnosti" role="tab" data-toggle="tab"><i class="fa fa-certificate"></i><small>Istaknute</small>Ličnosti</a></li>
            <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Klupski</small>Vremeplov</a></li>
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
		<form id="createNewClub" role="form" action="{{ url('/clubs/new/create') }}" method="POST" enctype="multipart/form-data" >
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
								<img class="slika-upload-klub" id="slika-upload-klub" src="{{asset('images/SZS-club-logo.png')}}" alt="">
							  </div>

							</div>

							<div class="col-md-5 sadrzaj-slike">

								  <p class="dodaj-sliku-naslov klub-a1">Logo kluba*</p>
								  <p class="dodaj-sliku-call">Identitet kluba</p>
								  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
									Odaberi logo... <input type="file" id="file_logo_kluba" name="logo" style="display: none;" accept="image/*" onchange="previewFile('#file_logo_kluba', '#slika-upload-klub', 1024, 1024, 512, 512)">
								  </label>
								  <div class="info001">
									<p class="info-upload-slike">Preporučene dimenzije za logo:</p>
									<p class="info-upload-slike">Minimalno: 512x512 px</p>
									<p class="info-upload-slike">Maksimalno: 1024x1024 px</p>
								  </div>

							</div>
						 </div>

						 <div class="col-md-6">

						  <div class="form-group col-md-12">
							<label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Ime/Naziv kluba*</label>
							<input type="text" name="name" id="ime-kluba" class="form-control" placeholder="Unesite ime/naziv kluba" value="{{ old('name') }}">
						  </div>
						  <div class="form-group has-success col-md-12">
							<label for="karakter-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Karakter kluba* <span>(izmjenjivo)</span></label>
							<input type="text" name="karakter" id="karakter-kluba" class="form-control" placeholder="Unesite karakter kluba" value="{{ old('karakter') ? old('karakter') : 'Fudbalski klub' }}">
							<span>Prilikom unosa karaktera kluba ne unositi kratice kao što su: FK, NK, KK, OK i sl.</span>
						  </div>

						 </div>

						</div>


						<div class="row form-segment">
						  <header class="card__header">
							<h4><i class="fa fa-location-arrow"></i> Navigacija</h4>
						  </header>
						 </div>

						  <div class="form-group col-md-4">
							<label for="kontinent"><img class="flow-icons-013" src="{{asset('images/icons/international-delivery.svg')}}"> Kontinent*</label>
							<select name="kontinent" class="form-control" id="kontinent">
								<option value="Evropa" {{ old('kontinent') == 'Evropa' ? 'selected' : '' }}>Evropa</option>
							</select>
						  </div>

						  <div class="form-group col-md-4">
							<label for="drzava"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"> Država*</label>
							<select name="drzava" class="form-control" id="drzava">
								<option value="Bosna i Hercegovina" {{ old('drzava') == 'Bosna i Hercegovina' ? 'selected' : '' }}>Bosna i Hercegovina</option>
							</select>
						  </div>

						  <div class="form-group col-md-4">
							<label for="entitet"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"> Entitet/Distrikt*</label>
							<select name="entitet" class="form-control" id="entitet">
								<option value="" {{ old('entitet') == '' ? 'selected' : '' }}>Izaberite entitet/distrikt</option>
								<option value="Federacija BiH" {{ old('entitet') == 'Federacija BiH' ? 'selected' : '' }}>Federacija BiH</option>
								<option value="Republika Srpska" {{ old('entitet') == 'Republika Srpska' ? 'selected' : '' }}>Republika Srpska</option>
								<option value="Distrikt Brčko" disabled>Distrikt Brčko</option>
							</select>
						  </div>

						  <div class="form-group col-md-4" id="kantonDiv" style="display:{{ old('entitet') == 'Republika Srpska' ? 'none' : 'block' }};">
							<label for="kanton"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"> Kanton*</label>
							<select name="kanton" class="form-control" id="kanton">
								<option value="" disabled {{ old('kanton') == '' ? 'selected' : '' }}>Izaberite kanton</option>
								<option value="Unsko-sanski Kanton" disabled>Unsko-sanski Kanton</option>
								<option value="Posavski Kanton" disabled>Posavski Kanton</option>
								<option value="Tuzlanski Kanton" disabled>Tuzlanski Kanton</option>
								<option value="Zeničko-dobojski Kanton" disabled>Zeničko-dobojski Kanton</option>
								<option value="Bosansko-podrinjski kanton" disabled>Bosansko-podrinjski Kanton</option>
								<option value="Srednjobosanski Kanton" disabled>Srednjobosanski Kanton</option>
								<option value="Hercegovačko-neretvanski Kanton" disabled>Hercegovačko-neretvanski Kanton</option>
								<option value="Zapadnohercegovački Kanton" disabled>Zapadnohercegovački Kanton</option>
								<option value="Kanton Sarajevo" {{ old('kanton') == 'Kanton Sarajevo' ? 'selected' : '' }}>Kanton Sarajevo</option>
								<option value="Kanton 10" disabled>Kanton 10</option>
							</select>
						  </div>

						  <div class="form-group col-md-4" id="opcineDiv" style="display:{{ old('entitet') == 'Republika Srpska' ? 'none' : 'block' }};">
							<label for="opcine-ks"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"> Općine Kantona Sarajevo*</label>
							<select name="opcina" class="form-control" id="opcine-ks">
								<option value="" disabled {{ old('opcina') == '' ? 'selected' : '' }}>Izaberite općinu</option>
								<option value="Hadžici" {{ old('opcina') == 'Hadžici' ? 'selected' : '' }}>Hadžići</option>
								<option value="Ilidža" {{ old('opcina') == 'Ilidža' ? 'selected' : '' }}>Ilidža</option>
								<option value="Ilijaš" {{ old('opcina') == 'Ilijaš' ? 'selected' : '' }}>Ilijaš</option>
								<option value="Centar" {{ old('opcina') == 'Centar' ? 'selected' : '' }}>Centar</option>
								<option value="Novi Grad" {{ old('opcina') == 'Novi Grad' ? 'selected' : '' }}>Novi Grad</option>
								<option value="Novo Sarajevo" {{ old('opcina') == 'Novo Sarajevo' ? 'selected' : '' }}>Novo Sarajevo</option>
								<option value="Stari Grad" {{ old('opcina') == 'Stari Grad' ? 'selected' : '' }}>Stari Grad</option>
								<option value="Trnovo" {{ old('opcina') == 'Trnovo' ? 'selected' : '' }}>Trnovo</option>
								<option value="Vogošća" {{ old('opcina') == 'Vogošća' ? 'selected' : '' }}>Vogošća</option>
							</select>
						  </div>

						  <div class="form-group col-md-4" id="regijaDiv" style="display:{{ old('entitet') == 'Republika Srpska' ? 'block' : 'none' }};">
							<label for="regija"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"> Regija*</label>
							<select name="regija" class="form-control" id="regija">
								<option value="" disabled {{ old('regija') == '' ? 'selected' : '' }}>Izaberite regiju</option>
								<option value="Banjalučka" disabled>Banjalučka</option>
								<option value="Dobojsko-bijeljinska" disabled>Dobojsko-bijeljinska</option>
								<option value="Sarajevsko-zvornička" {{ old('regija') == 'Sarajevsko-zvornička' ? 'selected' : '' }}>Sarajevsko-zvornička</option>
								<option value="Trebinjsko-fočanska" disabled>Trebinjsko-fočanska</option>
							</select>
						  </div>

						  <div class="form-group col-md-4" id="opSrb" style="display:{{ old('entitet') == 'Republika Srpska' ? 'block' : 'none' }};">
							<label for="opcine-sz-reg"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"> Općine Sarajevsko-Zvorničke regije*</label>
							<select class="form-control" name="opcinaSrb">
								<option value="" disabled {{ old('opcinaSrb') == '' ? 'selected' : '' }}>Izaberite općinu</option>
								<option value="Bratunac" disabled>Bratunac</option>
								<option value="Han Pijesak" disabled>Han Pijesak</option>
								<option value="Ilijaš" {{ old('opcinaSrb') == 'Ilijaš' ? 'selected' : '' }}>Ilijaš</option>
								<option value="Istočni Stari Grad" {{ old('opcinaSrb') == 'Istočni Stari Grad' ? 'selected' : '' }}>Istočni Stari Grad</option>
								<option value="Kasindo" {{ old('opcinaSrb') == 'Kasindo' ? 'selected' : '' }}>Kasindo</option>
								<option value="Kladanj" disabled>Kladanj</option>
								<option value="Lukavica" disabled>Lukavica</option>
								<option value="Milići" disabled>Milići</option>
								<option value="Olovo" disabled>Olovo</option>
								<option value="Osmaci" disabled>Osmaci</option>
								<option value="Pale" {{ old('opcinaSrb') == 'Pale' ? 'selected' : '' }}>Pale</option>
								<option value="Rogatica" disabled>Rogatica</option>
								<option value="Rudo" disabled>Rudo</option>
								<option value="Sarajevo Novi Grad" {{ old('opcinaSrb') == 'Sarajevo Novi Grad' ? 'selected' : '' }}>Sarajevo Novi Grad</option>
								<option value="Sokolac" disabled>Sokolac</option>
								<option value="Srebrenica" disabled>Srebrenica</option>
								<option value="Trnovo" {{ old('opcinaSrb') == 'Trnovo' ? 'selected' : '' }}>Trnovo</option>
								<option value="Ustiprača" {{ old('opcinaSrb') == 'Ustiprača' ? 'selected' : '' }}>Ustiprača</option>
								<option value="Višegrad" disabled>Višegrad</option>
								<option value="Vlasenica" disabled>Vlasenica</option>
								<option value="Zvornik" disabled>Zvornik</option>
								<option value="Šekovići" disabled>Šekovići</option>
								<option value="Žepa" disabled>Žepa</option>
							</select>
						  </div>

						  <div class="form-group col-md-4">
							<label for="grad"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Mjesto/Grad kluba*</label>
							<input name="grad" id="mjesto" class="form-control" placeholder="Unesite mjesto kluba" value="{{ old('grad') }}">
						  </div>

						  <div class="form-group col-md-4">
							<label for="tip-kluba"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Tip kluba*</label>
							<select name="tip" class="form-control" id="tip-kluba">
								<option value="" disabled {{ old('tip') == '' ? 'selected' : '' }}>Izaberite tip kluba</option>
								<option value="Sportski klub" {{ old('tip') == 'Sportski klub' ? 'selected' : '' }}>Sportski klub</option>
								<option value="Invalidski sportski klub" {{ old('tip') == 'Invalidski sportski klub' ? 'selected' : '' }}>Invalidski sportski klub</option>
							</select>
						  </div>

						  <div class="form-group col-md-4" id="sportoviDiv" style="display:{{ old('tip') == 'Sportski klub' ? 'block' : 'none' }};">
							<label for="sport"><img class="flow-icons-013" src="{{asset('images/icons/menu-circular-button.svg')}}"> Sportovi*</label>
							<select name="sport" class="form-control" id="sport">
								<option value="" {{ old('sport') == '' ? 'selected' : '' }}>Izaberite sport</option>
								<option value="Aikido" {{ old('sport') == 'Aikido' ? 'selected' : '' }}>Aikido</option>
								<option value="Atletika" {{ old('sport') == 'Atletika' ? 'selected' : '' }}>Atletika</option>
								<option value="Auto-Moto" {{ old('sport') == 'Auto-Moto' ? 'selected' : '' }}>Auto-Moto</option>
								<option value="Badminton" {{ old('sport') == 'Badminton' ? 'selected' : '' }}>Badminton</option>
								<option value="Biciklizam" {{ old('sport') == 'Biciklizam' ? 'selected' : '' }}>Biciklizam</option>
								<option value="Bob" {{ old('sport') == 'Bob' ? 'selected' : '' }}>Bob</option>
								<option value="Boćanje" {{ old('sport') == 'Boćanje' ? 'selected' : '' }}>Boćanje</option>
								<option value="Bodybuilding and Fitness" {{ old('sport') == 'Bodybuilding and Fitness' ? 'selected' : '' }}>Bodybuilding & Fitness</option>
								<option value="Boks" {{ old('sport') == 'Boks' ? 'selected' : '' }}>Boks</option>
								<option value="Curling" {{ old('sport') == 'Curling' ? 'selected' : '' }}>Curling</option>
								<option value="Dizanje tegova" {{ old('sport') == 'Dizanje tegova' ? 'selected' : '' }}>Dizanje tegova</option>
								<option value="Futsal" {{ old('sport') == 'Futsal' ? 'selected' : '' }}>Futsal</option>
								<option value="Gimnastika" {{ old('sport') == 'Gimnastika' ? 'selected' : '' }}>Gimnastika</option>
								<option value="Golf" {{ old('sport') == 'Golf' ? 'selected' : '' }}>Golf</option>
								<option value="Hokej" {{ old('sport') == 'Hokej' ? 'selected' : '' }}>Hokej</option>
								<option value="Hrvanje" {{ old('sport') == 'Hrvanje' ? 'selected' : '' }}>Hrvanje</option>
								<option value="Jedrenje" {{ old('sport') == 'Jedrenje' ? 'selected' : '' }}>Jedrenje</option>
								<option value="Ju Jitsu" {{ old('sport') == 'Ju Jitsu' ? 'selected' : '' }}>Ju Jitsu</option>
								<option value="Judo" {{ old('sport') == 'Judo' ? 'selected' : '' }}>Judo</option>
								<option value="Kajak Kanu i Rafting" {{ old('sport') == 'Kajak Kanu i Rafting' ? 'selected' : '' }}>Kajak Kanu i Rafting</option>
								<option value="Karate" {{ old('sport') == 'Karate' ? 'selected' : '' }}>Karate</option>
								<option value="Kick Box" {{ old('sport') == 'Kick Box' ? 'selected' : '' }}>Kick Box</option>
								<option value="Klizanje" {{ old('sport') == 'Klizanje' ? 'selected' : '' }}>Klizanje</option>
								<option value="Konjički sportovi" {{ old('sport') == 'Konjički sportovi' ? 'selected' : '' }}>Konjički sportovi</option>
								<option value="Košarka" {{ old('sport') == 'Košarka' ? 'selected' : '' }}>Košarka</option>
								<option value="Kung Fu" {{ old('sport') == 'Kung Fu' ? 'selected' : '' }}>Kung Fu</option>
								<option value="Kuglanje" {{ old('sport') == 'Kuglanje' ? 'selected' : '' }}>Kuglanje</option>
								<option value="Nogomet" {{ old('sport') == 'Nogomet' ? 'selected' : '' }}>Nogomet</option>
								<option value="Mačevanje" {{ old('sport') == 'Mačevanje' ? 'selected' : '' }}>Mačevanje</option>
								<option value="Odbojka" {{ old('sport') == 'Odbojka' ? 'selected' : '' }}>Odbojka</option>
								<option value="Planinarstvo" {{ old('sport') == 'Planinarstvo' ? 'selected' : '' }}>Planinarstvo</option>
								<option value="Plivanje" {{ old('sport') == 'Plivanje' ? 'selected' : '' }}>Plivanje</option>
								<option value="Ragbi" {{ old('sport') == 'Ragbi' ? 'selected' : '' }}>Ragbi</option>
								<option value="Ronjenje" {{ old('sport') == 'Ronjenje' ? 'selected' : '' }}>Ronjenje</option>
								<option value="Rukomet" {{ old('sport') == 'Rukomet' ? 'selected' : '' }}>Rukomet</option>
								<option value="Skijanje" {{ old('sport') == 'Skijanje' ? 'selected' : '' }}>Skijanje</option>
								<option value="Sportski ribolov" {{ old('sport') == 'Sportski ribolov' ? 'selected' : '' }}>Sportski ribolov</option>
								<option value="Stoni tenis" {{ old('sport') == 'Stoni tenis' ? 'selected' : '' }}>Stoni tenis</option>
								<option value="Streličarstvo" {{ old('sport') == 'Streličarstvo' ? 'selected' : '' }}>Streličarstvo</option>
								<option value="Streljaštvo" {{ old('sport') == 'Streljaštvo' ? 'selected' : '' }}>Streljaštvo</option>
								<option value="Šah" {{ old('sport') == 'Šah' ? 'selected' : '' }}>Šah</option>
								<option value="Teakwondo" {{ old('sport') == 'Teakwondo' ? 'selected' : '' }}>Taekwondo</option>
								<option value="Tenis" {{ old('sport') == 'Tenis' ? 'selected' : '' }}>Tenis</option>
								<option value="Triatlon" {{ old('sport') == 'Triatlon' ? 'selected' : '' }}>Triatlon</option>
								<option value="Vaterpolo" {{ old('sport') == 'Vaterpolo' ? 'selected' : '' }}>Vaterpolo</option>
								<option value="Vazduhoplovstvo" {{ old('sport') == 'Vazduhoplovstvo' ? 'selected' : '' }}>Vazduhoplovstvo</option>
								<option value="Veslanje" {{ old('sport') == 'Veslanje' ? 'selected' : '' }}>Veslanje</option>
							</select>
						  </div>

						  <div class="form-group col-md-4" id="iSportoviDiv" style="display:{{ old('tip') == 'Sportski klub' ? 'none' : 'block' }};">
							<label for="invalidski-sport"><img class="flow-icons-013" src="{{asset('images/icons/disability.svg')}}"> Invalidski sportovi</label>
							<select name="invalidski_sport" class="form-control" id="invalidski-sport" value="{{ old('invalidski_sport') }}">
								<option value="" {{ old('invalidski_sport') == '' ? 'selected' : '' }}>Izaberite sport</option>
								<option value="Alpsko skijanje" {{ old('invalidski_sport') == 'Alpsko skijanje' ? 'selected' : '' }}>Alpsko skijanje</option>
								<option value="Atletika" {{ old('invalidski_sport') == 'Atletika' ? 'selected' : '' }}>Atletika</option>
								<option value="Global" {{ old('invalidski_sport') == 'Global' ? 'selected' : '' }}>Global</option>
								<option value="Košarka u kolicima" {{ old('invalidski_sport') == 'Košarka u kolicima' ? 'selected' : '' }}>Košarka u kolicima</option>
								<option value="Nordijsko skijanje" {{ old('invalidski_sport') == 'Nordijsko skijanje' ? 'selected' : '' }}>Nordijsko skijanje</option>
								<option value="Plivanje" {{ old('invalidski_sport') == 'Plivanje' ? 'selected' : '' }}>Plivanje</option>
								<option value="Sjedeća odbojka" {{ old('invalidski_sport') == 'Sjedeća odbojka' ? 'selected' : '' }}>Sjedeća odbojka</option>
								<option value="Stoni tenis" {{ old('invalidski_sport') == 'Stoni tenis' ? 'selected' : '' }}>Stoni tenis</option>
								<option value="Streljaštvo" {{ old('invalidski_sport') == 'Streljaštvo' ? 'selected' : '' }}>Streljaštvo</option>
								<option value="Šah" {{ old('invalidski_sport') == 'Šah' ? 'selected' : '' }}>Šah</option>
							</select>
						  </div>

						  <div class="form-group col-md-4">
							<label for="kategorija-klub"><img class="flow-icons-013" src="{{asset('images/icons/gender-symbols.svg')}}"> Kategorija kluba*</label>
							<select name="kategorija" class="form-control" id="kategorija-klub">
								<option value="" {{ old('kategorija') == '' ? 'selected' : '' }}>Izaberite kategoriju kluba</option>
								<option value="Muški klub" {{ old('kategorija') == 'Muški klub' ? 'selected' : '' }}>Muški klub</option>
								<option value="Ženski klub" {{ old('kategorija') == 'Ženski klub' ? 'selected' : '' }}>Ženski klub</option>
								<option value="Mješovito" {{ old('kategorija') == 'Mješovito' ? 'selected' : '' }}>Mješovito</option>
							</select>
						  </div>

					</div>

					<div class="row form-objavi-klub-01">
					  <header class="card__header">
						<h4><i class="fa fa-info-circle"></i> Osnovne informacije</h4>
					  </header>
					 </div>
					<div class="row">
						  <div class="form-group col-md-6">
							<label for="godina-osnivanja"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Godina osnivanja kluba</label>
							<input name="godina_osnivanja" type="number" id="godina-osnivanja" class="form-control" placeholder="Unesite godinu osnivanja kluba" value="{{ old('godina_osnivanja') }}">
						  </div>

						  <div class="form-group col-md-6">
							<label for="domaci-teren"><img class="flow-icons-013" src="{{asset('images/icons/stadium-icon.svg')}}"> Domaći teren</label>
							<input name="teren" type="text" id="domaci-teren" class="form-control" placeholder="Unesite naziv domaćeg terena kluba" value="{{ old('teren') }}">
						  </div>

						  <div class="form-group col-md-6">
							<label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"> Takmičenje</label>
							<input type="text" name="takmicenje" id="takmicenje" class="form-control" placeholder="Unesite naziv takmičenja u kojem klub nastupa" value="{{ old('takmicenje') }}">
						  </div>

						  <div class="form-group col-md-6">
							<label for="savez"><img class="flow-icons-013" src="{{asset('images/icons/savez.svg')}}"> Savez kojem klub pripada</label>
							<div class="form-group">
							  <label class="radio radio-inline">
								<input type="radio" id="inlineCheckbox1" name="savez" value="Državni savez" {{ old('savez') == 'Državni savez' ? 'checked' : '' }}> Državni savez
								<span class="radio-indicator"></span>
							  </label>
							  <label class="radio radio-inline">
								<input type="radio" id="inlineCheckbox2" name="savez" value="Entitetski savez" {{ old('savez') == 'Entitetski savez' ? 'checked' : '' }}> Entitetski savez
								<span class="radio-indicator"></span>
							  </label>
							  <label class="radio radio-inline">
								<input type="radio" id="inlineCheckbox3" name="savez" value="Kantonalni savez" {{ old('savez') == 'Kantonalni savez' ? 'checked' : '' }}> Kantonalni savez
								<span class="radio-indicator"></span>
							  </label>
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
								<label for="tel1"><img class="flow-icons-013" src="{{asset('images/icons/phone-call.svg')}}"> Telefon 1</label>
								<input type="number" name="telefon1" id="tel1" class="form-control" placeholder="Unesite broj za službeni telefon 1" value="{{ old('telefon1') }}">
							</div>

							<div class="form-group col-md-4">
								<label for="tel2"><img class="flow-icons-013" src="{{asset('images/icons/phone-call.svg')}}"> Telefon 2</label>
								<input type="number" name="telefon2" id="tel2" class="form-control" placeholder="Unesite broj za službeni telefon 2" value="{{ old('telefon2') }}">
							</div>

							<div class="form-group col-md-4">
								<label for="fax"><img class="flow-icons-013" src="{{asset('images/icons/fax-with-phone.svg')}}"> Fax</label>
								<input type="number" name="fax" id="fax" class="form-control" placeholder="Unesite broj za službeni fax" value="{{ old('fax') }}">
							</div>

							<div class="form-group col-md-4">
								<label for="mail"><img class="flow-icons-013" src="{{asset('images/icons/envelope.svg')}}"> E-mail</label>
								<input type="email" name="email" id="mail" class="form-control" placeholder="Unesite službeni E-mail" value="{{ old('email') }}">
							</div>

							<div class="form-group col-md-4">
								<label for="web"><img class="flow-icons-013" src="{{asset('images/icons/worldwide.svg')}}"> Web stranica</label>
								<input type="text" name="web_stranica" id="web" class="form-control" placeholder="Unesite link službene web stranice" value="{{ old('web_stranica') }}">
							</div>

							<div class="form-group col-md-4">
								<label for="adresa"><img class="flow-icons-013" src="{{asset('images/icons/icon.svg')}}"> Adresa (ne prikazuje se)</label>
								<input type="text" name="adresa" id="adresa" onFocus="adresaAutoComp()" class="form-control" placeholder="Unesite adresu sjedišta kluba" value="{{ old('adresa') }}">
							</div>

					</div>

					<div class="row form-objavi-klub-01">
					  <header class="card__header">
						<h4><i class="fa fa-share-alt"></i> Socijalne mreže</h4>
					  </header>
					 </div>
					 <div class="row">

							<div class="form-group col-md-6">
								<label for="fcb"><img class="flow-icons-013" src="{{asset('images/icons/facebook.svg')}}"> Facebook stranica</label>
								<input type="text" name="fb" id="fcb" class="form-control" placeholder="Unesite link službene facebook stranice" value="{{ old('fb') }}">
							</div>

							<div class="form-group col-md-6">
								<label for="twt"><img class="flow-icons-013" src="{{asset('images/icons/twitter.svg')}}"> Twitter profil</label>
								<input type="text" name="twitter" id="twt" class="form-control" placeholder="Unesite link službenog twitter profila" value="{{ old('twitter') }}">
							</div>

							<div class="form-group col-md-6">
								<label for="inst"><img class="flow-icons-013" src="{{asset('images/icons/instagram.svg')}}"> Instagram profil</label>
								<input type="text" name="instagram" id="inst" class="form-control" placeholder="Unesite link službenog instagram profila" value="{{ old('instagram') }}">
							</div>

							<div class="form-group col-md-6">
								<label for="yt"><img class="flow-icons-013" src="{{asset('images/icons/youtube.svg')}}"> YouTUBE pofil</label>
								<input type="text" name="yt" id="yt" class="form-control" placeholder="Unesite link službenog YouTUBE kanala" value="{{ old('yt') }}">
							</div>

					</div>

					<div class="row form-objavi-klub-01">
					  <header class="card__header">
						<h4><i class="fa fa-youtube-play"></i> Video prezentacija</h4>
					  </header>
					 </div>
					 <div class="row">

							<div class="form-group col-md-12">
								<label for="videoprez"><img class="flow-icons-013" src="{{asset('images/icons/play-button.svg')}}"> Video prezentacija</label>
								<input type="text" name="video" id="videoprez" class="form-control" placeholder="Unesite link videa (YouTUBE)" value="{{ old('video') }}">
							</div>


						<div class="col-md-6">
						</div>
						<div class="form-group form-group--submit col-md-6" >
							<button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
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
											<div class="izbrisiLicnost"><i class="fa fa-times-circle-o"></i></div>
											<div class="row identitet-style">
												<div class="col-md-6 objavi-klub-logo-setup">
													<div class="col-md-7">
														<div class="alc-staff__photo">
															<img class="slika-edit-profil" id="slika-licnost-prikaz{{ $key }}" src="{{ asset('images/default_avatar.png') }}" alt="">
															</div>
														</div>
													<div class="col-md-5 sadrzaj-slike">
														<p class="dodaj-sliku-naslov klub-a1">Slika ličnosti</p>
														<p class="dodaj-sliku-call">Odaberite sliku za istaknutu ličnost</p>
														<label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
															Odaberi sliku... <input type="file" name="licnost[{{ $key }}][avatar]" id="licnostAvatar{{ $key }}" accept="image/*" style="display: none;" onchange="previewFile('#licnostAvatar{{ $key }}', '#slika-licnost-prikaz{{ $key }}', 1080, 1920, 250, 312)">
															</label>
														<div class="info001">
															<p class="info-upload-slike">Preporučene dimenzije za sliku ličnosti:</p>
															<p class="info-upload-slike">Minimalno: 312x250 px</p>
															<p class="info-upload-slike">Maksimalno: 1920x1080 px</p>
															</div>
														</div>
													</div>
												<div class="col-md-6">
													<div class="form-group col-md-6 col-xs-12">
														<label for="ime-kluba"><img class="flow-icons-013" src="{{ asset('images/icons/edit.svg') }}"> Ime</label>
														<input type="text" name="licnost[{{ $key }}][ime]" class="form-control" placeholder="Unesite ime ličnosti" value="{{ old('licnost.' . $key . '.ime') }}">
														</div>
													<div class="form-group col-md-6 col-xs-12">
														<label for="ime-kluba"><img class="flow-icons-013" src="{{ asset('images/icons/edit.svg') }}"> Prezime</label>
														<input type="text" name="licnost[{{ $key }}][prezime]" class="form-control" placeholder="Unesite prezime ime ličnosti" value="{{ old('licnost.' . $key . '.prezime') }}">
														</div>
													<div class="form-group col-md-12">
														<label for="opis"><img class="flow-icons-013" src="{{ asset('images/icons/edit.svg') }}"> Opis i uloga</label>
														<textarea class="form-control" rows="4" name="licnost[{{ $key }}][opis]" placeholder="Upišite kratak opis uloge i funkcije navedene ličnosti u klubu...">{{ old('licnost.' . $key . '.opis') }}</textarea>
														</div>
													</div>
												</div>
											</div>
									@endforeach
								@endif
							</div>
							<div class="col-md-12 text-center">
								<button class="btn btn-primary" type="button" id="dodajLicnost">Dodaj ličnost</button>
							</div>
						</div>

						<div class="row">
							<div class="form-group form-group--submit col-md-6">
								<a href="#tab-opcenito" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
							</div>
							<div class="form-group form-group--submit col-md-6">
								<button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
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
							<label for="opis"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Vremeplov</label>
							<textarea class="form-control" rows="20" id="opis" name="vremeplov" placeholder="Upišite ukratko informacije vezane za historijat vašeg kluba i njegovu tradiciju..." {{ old('vremeplov') }}></textarea>
						  </div>

						 </div>

						</div>

					</div>

					<div class="row">
						<div class="form-group form-group--submit col-md-6">
							<a href="#tab-licnosti" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
						</div>
						<div class="form-group form-group--submit col-md-6">
							<button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
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
							<a href="#tab-vremeplov" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
						</div>
						<div class="form-group form-group--submit col-md-6">
							<button type="button" class="btn btn-default btn-sm btn-block btn-dalje">Sljedeći korak <i class="fa fa-chevron-right"></i></button>
						</div>
					</div>

					</div>
					<!-- Tab: Vitrina / End -->

					<!-- Tab: Foto galerija -->
					<div role="tabpanel" class="tab-pane fade" id="tab-galerija">
						<div class="row dodavanje-slika">
							  <div class="col-md-12 sadrzaj-slike">
								  <p class="dodaj-sliku-naslov">Dodajte slike</p>
								  <p class="dodaj-sliku-call">u Vašu galeriju</p>
								  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
									Odaberi slike... <input type="file" class="galerija" name="galerija[]" accept="image/*" accept="image/*" multiple style="display: none;">
								  </label>
								  <div class="info001">
									<p class="info-upload-slike">Preporučena dimenzija za vaše slike:</p>
									<p class="info-upload-slike">1920x1080 px</p>
								  </div>
								</div>
						</div>
						<div class="row form-objavi-klub-01" id="galerija_klub">
							<div class="album__item col-xs-6 col-sm-3">
								<div class="album__item-holder">
									<a href="{{asset('images/banner-122.jpg')}}" class="album__item-link mp_gallery">
									<figure class="album__thumb">
										<img src="{{asset('images/banner-122.jpg')}}" alt="">
									</figure>
									<div class="album__item-desc">
										<img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt="">
									</div>
									</a>
								</div>
								<div class="progress-stats upload-slike-statust-bar">
								<div class="progress">
								  <div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
								  </div>
								</div>
							</div>




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
								<a href="#tab-vitrina" role="tab" data-toggle="tab" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
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
					<!-- Tab: Foto galerija / End -->

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
	CKEDITOR.replace( 'vremeplov' );

  $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

  	var gk = document.getElementById('galerija_klub');
        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                	var adnew = '<div class="album__item col-xs-6 col-sm-3"><div class="album__item-holder"><a href="'+event.target.result+'" class="album__item-link mp_gallery"><figure class="album__thumb"><img src="'+event.target.result+'" alt=""></figure><div class="album__item-desc"><img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt=""></div></a></div><div class="progress-stats upload-slike-statust-bar"><div class="progress"><div class="progress__bar progress__bar-width-100" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div></div></div>';
                    $(adnew).appendTo('#galerija_klub');
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('.galerija').on('change', function() {
        imagesPreview(this);
    });
});


</script>
@endsection
