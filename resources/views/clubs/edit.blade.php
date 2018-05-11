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
            <a href="index.php"><img src="{{asset('images/soccer/logo.png')}}" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
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
            <h1 class="page-icon-objavi-title"><img src="{{asset('images/klubovi-fff.png')}}"></img></h1>
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
          @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
        <div class="sidebar col-md-12 overscreen">

       <!-- Single Product Tabbed Content -->
        <div class="product-tabs card card--xlg">

          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified nav-product-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O klubu</small>Općenito</a></li>
			<li role="presentation"><a href="#tab-licnosti" role="tab" data-toggle="tab"><i class="fa fa-certificate"></i><small>Istaknute</small>Ličnosti</a></li>
            <li role="presentation"><a href="#tab-vremeplov" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Klupski</small>Vremeplov</a></li>
            <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i class="fa fa-trophy"></i><small>Trofejna</small>Vitrina</a></li>
			<li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Foto</small>Galerija</a></li>
			<li role="presentation"><a href="#tab-pozivnice" role="tab" data-toggle="tab"><i class="fa fa-envelope-open-o"></i><small>Pozivnice i</small>Zahtjevi</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content card__content">


			<!-- Tab: Općenito -->
            <div role="tabpanel" class="tab-pane fade in active" id="tab-opcenito">
            	<form id="editClubForm" name="editClubsForm" role="form" action="{{ url('/clubs/'.$data->id.'/edit') }}" method="POST" enctype="multipart/form-data" >
				{!! csrf_field() !!}
			<div class="row">
				
				<div class="row identitet-style">

				 <div class="col-md-6 objavi-klub-logo-setup">

				    <div class="col-md-7">

                      <div class="alc-staff__photo">
                        <img class="slika-upload-klub" id="slika-upload-klub" src="{{isset($data->logo) ? asset('images/club_logo/'.$data->logo) : asset('images/SZS-club.logo.png')}}" alt="">
                      </div>

				    </div>

                    <div class="col-md-5 sadrzaj-slike">

						  <p class="dodaj-sliku-naslov klub-a1"> Logo kluba*</p>
						  <p class="dodaj-sliku-call">Identitet kluba</p>
						  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
							Odaberi logo... <input type="file" id="file_logo_kluba" name="logo" style="display: none;" onchange="previewFile('#file_logo_kluba','#slika-upload-klub', 1024, 1024, 512, 512)" value="{{isset($data->logo) ? asset('images/club_logo/'.$data->logo) : asset('images/SZS-club.logo.png')}}">
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
                    <input type="text" name="name" id="ime-kluba" class="form-control" value="{{$data->name}}" placeholder="{{$data->name}}">
                  </div>
				  <div class="form-group has-success col-md-12">
                    <label for="karakter-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Karakter kluba*<span>(izmjenjivo)</span></label>
                    <input type="text" name="karakter" id="karakter-kluba" class="form-control" value="{{$data->karakter}}" placeholder="{{$data->karakter}}">
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
                    <select class="form-control" id="kontinent" name="kontinent">
  						<option value="Evropa" {{$data->kontinent == 'Evropa' ? 'selected' : ''}}>Evropa</option>
  					</select>
				  </div>

				  <div class="form-group col-md-4">
                    <label for="drzava"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"> Država*</label>
                    <select class="form-control" id="drzava" name="drzava">
  						<option value="Bosna i Hercegovina" {{$data->drzava == 'Bosna i Hercegovina' ? 'selected' : ''}}>Bosna i Hercegovina</option>
  					</select>
				  </div>

				  <div class="form-group col-md-4">
                    <label for="entitet"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"> Entitet/Distrikt*</label>
                    <select class="form-control" id="entitet" name="entitet">
						<option value="Federacija BiH" {{ $data->entitet == 'Federacija BiH' ? 'selected' : '' }}>Federacija BiH</option>
						<option value="Republika Srpska" {{ $data->entitet == 'Republika Srpska' ? 'selected' : '' }}>Republika Srpska</option>
						<option value="Distrikt Brčko" disabled>Distrikt Brčko</option>
  					</select>
				  </div>
				  @if($data->entitet == "Federacija BiH")
				  <div class="form-group col-md-4">
                    <label for="kanton"><img class="flow-icons-013" src="{{ asset('images/icons/placeholder.svg') }}"> Kanton*</label>
                    <select class="form-control" id="kanton" name="kanton">
						<option value="Unsko-sanski Kanton" disabled>Unsko-sanski Kanton</option>
						<option value="Posavski Kanton" disabled>Posavski Kanton</option>
						<option value="Tuzlanski Kanton" disabled>Tuzlanski Kanton</option>
						<option value="Zeničko-dobojski Kanton" disabled>Zeničko-dobojski Kanton</option>
						<option value="Bosansko-podrinjski kanton" disabled>Bosansko-podrinjski Kanton</option>
						<option value="Srednjobosanski Kanton" disabled>Srednjobosanski Kanton</option>
						<option value="Hercegovačko-neretvanski Kanton" disabled>Hercegovačko-neretvanski Kanton</option>
						<option value="Zapadnohercegovački Kanton" disabled>Zapadnohercegovački Kanton</option>
						<option value="Kanton Sarajevo" {{ $data->kanton == 'Kanton Sarajevo' ? 'selected' : '' }}>Kanton Sarajevo</option>
						<option value="Kanton 10" disabled>Kanton 10</option>
  					</select>
				  </div>
				  <div class="form-group col-md-4">
                    <label for="opcine-ks"><img class="flow-icons-013" src="{{ asset('images/icons/opcina.svg') }}"> Općine Kantona Sarajevo*</label>
                    <select class="form-control" id="opcine-ks" name="opcina">
						<option value="Hadžici" {{ $data->opcina == 'Hadžici' ? 'selected' : '' }}>Hadžići</option>
						<option value="Ilidža" {{ $data->opcina == 'Ilidža' ? 'selected' : '' }}>Ilidža</option>
						<option value="Ilijaš" {{ $data->opcina == 'Ilijaš' ? 'selected' : '' }}>Ilijaš</option>
						<option value="Centar" {{ $data->opcina == 'Centar' ? 'selected' : '' }}>Centar</option>
						<option value="Novi Grad" {{ $data->opcina == 'Novi Grad' ? 'selected' : '' }}>Novi Grad</option>
						<option value="Novo Sarajevo" {{ $data->opcina == 'Novo Sarajevo' ? 'selected' : '' }}>Novo Sarajevo</option>
						<option value="Stari Grad" {{ $data->opcina == 'Stari Grad' ? 'selected' : '' }}>Stari Grad</option>
						<option value="Trnovo" {{ $data->opcina == 'Trnovo' ? 'selected' : '' }}>Trnovo</option>
						<option value="Vogošća" {{ $data->opcina == 'Vogošća' ? 'selected' : '' }}>Vogošća</option>
  					</select>
				  </div>

				  @else
				  <div class="form-group col-md-4">
                    <label for="regija"><img class="flow-icons-013" src="{{ asset('images/icons/placeholder.svg') }}"> Regija*</label>
                    <select class="form-control" id="regija" name="regija">
						<option value="Banjalučka" disabled>Banjalučka</option>
						<option value="Dobojsko-bijeljinska" disabled>Dobojsko-bijeljinska</option>
						<option value="Sarajevsko-zvornička" {{ $data->regija == 'Sarajevsko-zvornička' ? 'selected' : '' }}>Sarajevsko-zvornička</option>
						<option value="Trebinjsko-fočanska" disabled>Trebinjsko-fočanska</option>
  					</select>
				  </div>

				  <div class="form-group col-md-4">
                    <label for="opcine-sz-reg"><img class="flow-icons-013" src="assets/images/icons/opcina.svg"> Općine Sarajevsko-Zvorničke regije*</label>
                    <select name="opcinaSrb" class="form-control" id="opcine-sz-reg">
						<option value="Bratunac" disabled>Bratunac</option>
						<option value="Han Pijesak" disabled>Han Pijesak</option>
						<option value="Ilijaš" {{ $data->opcinaSrb == 'Ilijaš' ? 'selected' : '' }}>Ilijaš</option>
						<option value="Istočni Stari Grad" {{ $data->opcinaSrb == 'Istočni Stari Grad' ? 'selected' : '' }}>Istočni Stari Grad</option>
						<option value="Kasindo" {{ $data->opcinaSrb == 'Kasindo' ? 'selected' : '' }}>Kasindo</option>
						<option value="Kladanj" disabled>Kladanj</option>
						<option value="Lukavica" disabled>Lukavica</option>
						<option value="Milići" disabled>Milići</option>
						<option value="Olovo" disabled>Olovo</option>
						<option value="Osmaci" disabled>Osmaci</option>
						<option value="Pale" {{ $data->opcinaSrb == 'Pale' ? 'selected' : '' }}>Pale</option>
						<option value="Rogatica" disabled>Rogatica</option>
						<option value="Rudo" disabled>Rudo</option>
						<option value="Sarajevo Novi Grad" {{ $data->opcinaSrb == 'Sarajevo Novi Grad' ? 'selected' : '' }}>Sarajevo Novi Grad</option>
						<option value="Sokolac" disabled>Sokolac</option>
						<option value="Srebrenica" disabled>Srebrenica</option>
						<option value="Trnovo" {{ $data->opcinaSrb == 'Trnovo' ? 'selected' : '' }}>Trnovo</option>
						<option value="Ustiprača" {{ $data->opcinaSrb == 'Ustiprača' ? 'selected' : '' }}>Ustiprača</option>
						<option value="Višegrad" disabled>Višegrad</option>
						<option value="Vlasenica" disabled>Vlasenica</option>
						<option value="Zvornik" disabled>Zvornik</option>
						<option value="Šekovići" disabled>Šekovići</option>
						<option value="Žepa" disabled>Žepa</option>
  					</select>
				  </div>
				  @endif

				  <div class="form-group col-md-4">
                    <label for="mjesto"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Mjesto/Grad kluba*</label>
                    <input type="text" name="grad" id="mjesto" class="form-control" value="{{$data->grad}}" placeholder="{{$data->grad}}" required>
                  </div>

				  <div class="form-group col-md-4">
                    <label for="tip-kluba"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}">Tip kluba*</label>
                    <select class="form-control" id="tip-kluba" name="tip">
						<option value="Sportski klub" {{ $data->tip == 'Sportski klub' ? 'selected' : '' }}>Sportski klub</option>
						<option value="Invalidski sportski klub" {{ $data->tip == 'Invalidski sportski klub' ? 'selected' : '' }}>Invalidski sportski klub</option>
  					</select>
				  </div>
				  @if($data->invalidski_sport)
				  <div class="form-group col-md-4">
                    <label for="invalidski-sport"><img class="flow-icons-013" src="assets/images/icons/disability.svg"> Sportovi za osobe sa invaliditetom*</label>
                    <select class="form-control" id="invalidski_sport">
						<option value="Alpsko skijanje" {{ $data->invalidski_sport == 'Alpsko skijanje' ? 'selected' : '' }}>Alpsko skijanje</option>
						<option value="Atletika" {{ $data->invalidski_sport == 'Atletika' ? 'selected' : '' }}>Atletika</option>
						<option value="Global" {{ $data->invalidski_sport == 'Global' ? 'selected' : '' }}>Global</option>
						<option value="Košarka u kolicima" {{ $data->invalidski_sport == 'Košarka u kolicima' ? 'selected' : '' }}>Košarka u kolicima</option>
						<option value="Nordijsko skijanje" {{ $data->invalidski_sport == 'Nordijsko skijanje' ? 'selected' : '' }}>Nordijsko skijanje</option>
						<option value="Plivanje" {{ $data->invalidski_sport == 'Plivanje' ? 'selected' : '' }}>Plivanje</option>
						<option value="Sjedeća odbojka" {{ $data->invalidski_sport == 'Sjedeća odbojka' ? 'selected' : '' }}>Sjedeća odbojka</option>
						<option value="Stoni tenis" {{ $data->invalidski_sport == 'Stoni tenis' ? 'selected' : '' }}>Stoni tenis</option>
						<option value="Streljaštvo" {{ $data->invalidski_sport == 'Streljaštvo' ? 'selected' : '' }}>Streljaštvo</option>
						<option value="Šah" {{ $data->invalidski_sport == 'Šah' ? 'selected' : '' }}>Šah</option>
					</select>
				  </div>
          @else
            <div class="form-group col-md-4">
                    <label for="sport"><img class="flow-icons-013" src="{{asset('images/icons/menu-circular-button.svg')}}"> Sportovi*</label>
                    <select class="form-control" id="sport" name="sport">
						<option value="Aikido" {{ $data->sport == 'Aikido' ? 'selected' : '' }}>Aikido</option>
						<option value="Atletika" {{ $data->sport == 'Atletika' ? 'selected' : '' }}>Atletika</option>
						<option value="Auto-Moto" {{ $data->sport == 'Auto-Moto' ? 'selected' : '' }}>Auto-Moto</option>
						<option value="Badminton" {{ $data->sport == 'Badminton' ? 'selected' : '' }}>Badminton</option>
						<option value="Biciklizam" {{ $data->sport == 'Biciklizam' ? 'selected' : '' }}>Biciklizam</option>
						<option value="Bob" {{ $data->sport == 'Bob' ? 'selected' : '' }}>Bob</option>
						<option value="Boćanje" {{ $data->sport == 'Boćanje' ? 'selected' : '' }}>Boćanje</option>
						<option value="Bodybuilding and Fitness" {{ $data->sport == 'Bodybuilding and Fitness' ? 'selected' : '' }}>Bodybuilding & Fitness</option>
						<option value="Boks" {{ $data->sport == 'Boks' ? 'selected' : '' }}>Boks</option>
						<option value="Curling" {{ $data->sport == 'Curling' ? 'selected' : '' }}>Curling</option>
						<option value="Dizanje tegova" {{ $data->sport == 'Dizanje tegova' ? 'selected' : '' }}>Dizanje tegova</option>
						<option value="Futsal" {{ $data->sport == 'Futsal' ? 'selected' : '' }}>Futsal</option>
						<option value="Gimnastika" {{ $data->sport == 'Gimnastika' ? 'selected' : '' }}>Gimnastika</option>
						<option value="Golf" {{ $data->sport == 'Golf' ? 'selected' : '' }}>Golf</option>
						<option value="Hokej" {{ $data->sport == 'Hokej' ? 'selected' : '' }}>Hokej</option>
						<option value="Hrvanje" {{ $data->sport == 'Hrvanje' ? 'selected' : '' }}>Hrvanje</option>
						<option value="Jedrenje" {{ $data->sport == 'Jedrenje' ? 'selected' : '' }}>Jedrenje</option>
						<option value="Ju Jitsu" {{ $data->sport == 'Ju Jitsu' ? 'selected' : '' }}>Ju Jitsu</option>
						<option value="Judo" {{ $data->sport == 'Judo' ? 'selected' : '' }}>Judo</option>
						<option value="Kajak Kanu i Rafting" {{ $data->sport == 'Kajak Kanu i Rafting' ? 'selected' : '' }}>Kajak Kanu i Rafting</option>
						<option value="Karate" {{ $data->sport == 'Karate' ? 'selected' : '' }}>Karate</option>
						<option value="Kick Box" {{ $data->sport == 'Kick Box' ? 'selected' : '' }}>Kick Box</option>
						<option value="Klizanje" {{ $data->sport == 'Klizanje' ? 'selected' : '' }}>Klizanje</option>
						<option value="Konjički sportovi" {{ $data->sport == 'Konjički sportovi' ? 'selected' : '' }}>Konjički sportovi</option>
						<option value="Košarka" {{ $data->sport == 'Košarka' ? 'selected' : '' }}>Košarka</option>
						<option value="Kung Fu" {{ $data->sport == 'Kung Fu' ? 'selected' : '' }}>Kung Fu</option>
						<option value="Kuglanje" {{ $data->sport == 'Kuglanje' ? 'selected' : '' }}>Kuglanje</option>
						<option value="Nogomet" {{ $data->sport == 'Nogomet' ? 'selected' : '' }}>Nogomet</option>
						<option value="Mačevanje" {{ $data->sport == 'Mačevanje' ? 'selected' : '' }}>Mačevanje</option>
						<option value="Odbojka" {{ $data->sport == 'Odbojka' ? 'selected' : '' }}>Odbojka</option>
						<option value="Planinarstvo" {{ $data->sport == 'Planinarstvo' ? 'selected' : '' }}>Planinarstvo</option>
						<option value="Plivanje" {{ $data->sport == 'Plivanje' ? 'selected' : '' }}>Plivanje</option>
						<option value="Ragbi" {{ $data->sport == 'Ragbi' ? 'selected' : '' }}>Ragbi</option>
						<option value="Ronjenje" {{ $data->sport == 'Ronjenje' ? 'selected' : '' }}>Ronjenje</option>
						<option value="Rukomet" {{ $data->sport == 'Rukomet' ? 'selected' : '' }}>Rukomet</option>
						<option value="Skijanje" {{ $data->sport == 'Skijanje' ? 'selected' : '' }}>Skijanje</option>
						<option value="Sportski ribolov" {{ $data->sport == 'Sportski ribolov' ? 'selected' : '' }}>Sportski ribolov</option>
						<option value="Stoni tenis" {{ $data->sport == 'Stoni tenis' ? 'selected' : '' }}>Stoni tenis</option>
						<option value="Streličarstvo" {{ $data->sport == 'Streličarstvo' ? 'selected' : '' }}>Streličarstvo</option>
						<option value="Streljaštvo" {{ $data->sport == 'Streljaštvo' ? 'selected' : '' }}>Streljaštvo</option>
						<option value="Šah" {{ $data->sport == 'Šah' ? 'selected' : '' }}>Šah</option>
						<option value="Teakwondo" {{ $data->sport == 'Teakwondo' ? 'selected' : '' }}>Taekwondo</option>
						<option value="Tenis" {{ $data->sport == 'Tenis' ? 'selected' : '' }}>Tenis</option>
						<option value="Triatlon" {{ $data->sport == 'Triatlon' ? 'selected' : '' }}>Triatlon</option>
						<option value="Vaterpolo" {{ $data->sport == 'Vaterpolo' ? 'selected' : '' }}>Vaterpolo</option>
						<option value="Vazduhoplovstvo" {{ $data->sport == 'Vazduhoplovstvo' ? 'selected' : '' }}>Vazduhoplovstvo</option>
						<option value="Veslanje" {{ $data->sport == 'Veslanje' ? 'selected' : '' }}>Veslanje</option>
          			</select>
         		 </div>
				  @endif
				  <div class="form-group col-md-4">
                    <label for="kategorija-klub"><img class="flow-icons-013" src="{{asset('images/icons/gender-symbols.svg')}}"> Kategorija kluba*</label>
                    <select class="form-control" id="kategorija-klub" name="kategorija">
						<option value="Muški klub" {{ $data->kategorija == 'Muški klub' ? 'selected' : '' }}>Muški klub</option>
						<option value="Ženski klub" {{ $data->kategorija == 'Ženski klub' ? 'selected' : '' }}>Ženski klub</option>
						<option value="Mješovito" {{ $data->kategorija == 'Mješovito' ? 'selected' : '' }}>Mješovito</option>
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
                    <input type="text" name="godina_osnivanja" id="godina-osnivanja" class="form-control" value="{{$data->godina_osnivanja}}" placeholder="{{$data->godina_osnivanja}}">
                  </div>

				  <div class="form-group col-md-6">
                    <label for="domaci-teren"><img class="flow-icons-013" src="{{asset('images/icons/stadium-icon.svg')}}"> Domaći teren</label>
                    <input type="text" name="teren" id="domaci-teren" class="form-control" value="{{$data->teren}}" placeholder="{{$data->teren}}">
                  </div>

				  <div class="form-group col-md-6">
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"> Takmičenje</label>
                    <input type="text" name="takmicenje" id="takmicenje" class="form-control" value="{{$data->takmicenje}}" placeholder="{{$data->takmicenje}}">
                  </div>

				<div class="form-group col-md-6">
					<label for="savez"><img class="flow-icons-013" src="{{asset('images/icons/savez.svg')}}"> Savez kojem klub pripada</label>
					<div class="form-group">
						<label class="radio radio-inline">
							<input type="radio" id="inlineCheckbox1" name="savez" value="Državni savez" {{ $data->savez == 'Državni savez' ? 'checked' : '' }}> Državni savez
							<span class="radio-indicator"></span>
						</label>
						<label class="radio radio-inline">
							<input type="radio" id="inlineCheckbox2" name="savez" value="Entitetski savez" {{ $data->savez == 'Entitetski savez' ? 'checked' : '' }}> Entitetski savez
							<span class="radio-indicator"></span>
						</label>
						<label class="radio radio-inline">
							<input type="radio" id="inlineCheckbox3" name="savez" value="Kantonalni savez" {{ $data->savez == 'Kantonalni savez' ? 'checked' : '' }}> Kantonalni savez
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
						<input type="number" name="telefon1" id="tel1" class="form-control" value="{{$data->telefon1}}" placeholder="{{$data->telefon1}}">
					</div>

					<div class="form-group col-md-4">
						<label for="tel2"><img class="flow-icons-013" src="{{asset('images/icons/phone-call.svg')}}">  Telefon 2</label>
						<input type="number" name="telefon2" id="tel2" class="form-control" value="{{$data->telefon2}}" placeholder="{{$data->telefon2}}">
					</div>

					<div class="form-group col-md-4">
						<label for="fax"><img class="flow-icons-013" src="{{asset('images/icons/fax-with-phone.svg')}}"> Fax</label>
						<input type="number" name="fax" id="fax" class="form-control" value="{{$data->fax}}" placeholder="{{$data->fax}}">
					</div>

					<div class="form-group col-md-4">
						<label for="mail"><img class="flow-icons-013" src="{{asset('images/icons/envelope.svg')}}"> E-mail</label>
						<input type="email" name="email" id="mail" class="form-control" value="{{$data->email}}" placeholder="{{$data->email}}">
					</div>

					<div class="form-group col-md-4">
						<label for="web"><img class="flow-icons-013" src="{{asset('images/icons/worldwide.svg')}}"> Web stranica</label>
						<input type="text" name="web_stranica" id="web" class="form-control" value="{{$data->web_stranica}}" placeholder="{{$data->web_stranica}}">
					</div>

					<div class="form-group col-md-4">
						<label for="adresa"><img class="flow-icons-013" src="{{asset('images/icons/icon.svg')}}"> Adresa (ne prikazuje se)</label>
						<input type="text" name="adresa" id="adresa" class="form-control" value="{{$data->adresa}}" placeholder="{{$data->adresa}}">
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
						<input type="text" name="fb" id="fcb" class="form-control" value="{{$data->fb}}" placeholder="{{$data->fb}}">
					</div>

					<div class="form-group col-md-6">
						<label for="twt"><img class="flow-icons-013" src="{{asset('images/icons/twitter.svg')}}"> Twitter profil</label>
						<input type="text" name="twitter" id="twt" class="form-control" value="{{$data->twitter}}" placeholder="{{$data->twitter}}">
					</div>

					<div class="form-group col-md-6">
						<label for="inst"><img class="flow-icons-013" src="{{asset('images/icons/instagram.svg')}}"> Instagram profil</label>
						<input type="text" name="instagram" id="inst" class="form-control" value="{{$data->instagram}}" placeholder="{{$data->instagram}}">
					</div>

					<div class="form-group col-md-6">
						<label for="yt"><img class="flow-icons-013" src="{{asset('images/icons/youtube.svg')}}"> YouTUBE profil</label>
						<input type="text" name="yt" id="yt" class="form-control" value="{{$data->yt}}" placeholder="{{$data->yt}}">
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
						<input type="text" name="video" id="videoprez" class="form-control" value="{{$data->video}}" placeholder="{{$data->video}}">
					</div>

				
					<button  type="submit" class="btn btn-default btn-sm btn-block btn-dalje" ><i class="fa fa-plus-circle"></i> Spremi</button>

			</div>

  </form>
            </div>

        
            <!-- Tab: Općenito / End -->

			<!-- Tab: Ličnosti -->

			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-licnosti">

			@foreach($licnosti as $licnost)
<form id="editLicnosti" role="form" action="{{ url('/licnost/edit/'.$licnost->id) }}" method="POST" enctype="multipart/form-data" >
				{!! csrf_field() !!}
			<div class="row">

				<div class="row identitet-style">

				 <div class="col-md-6 objavi-klub-logo-setup">

				    <div class="col-md-7">

                      <div class="alc-staff__photo">
                            <img class="slika-edit-profil" id="slika-edit-profil1" src="{{ isset($licnost->avatar) ? asset('images/avatar_licnost/'.$licnost->avatar) : asset('images/default_avatar.png')}}" alt="">
                          </div>

				    </div>

                    <div class="col-md-5 sadrzaj-slike">

						  <p class="dodaj-sliku-naslov klub-a1">Slika ličnosti</p>
						  <p class="dodaj-sliku-call">Odaberite sliku za istaknutu ličnost</p>
						  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
							Odaberi sliku... <input type="file" name="avatar_licnost" id="al1" accept="image/*" style="display: none;" onchange="previewFile('#all', '#slika-edit-profil1', 1080, 1920, 250, 312)">
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
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Ime*</label>
                    <input type="text" name="ime" id="ime-kluba" class="form-control" placeholder="Unesite ime ličnosti" value="{{$licnost->ime}}">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Prezime*</label>
                    <input type="text" name="prezime" id="ime-kluba" class="form-control" placeholder="Unesite prezime ime ličnosti" value="{{$licnost->prezime}}">
                  </div>
				  <div class="form-group col-md-12">
					<label for="opis"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Opis i uloga</label>
					<textarea class="form-control" rows="4" id="opis" name="opis" maxlength="350" placeholder="Upišite kratak opis uloge i funkcije navedene ličnosti u klubu...">{{$licnost->opis}}</textarea>
				  </div>

				 </div>

				</div>
			</div>
			<button  type="submit" class="btn btn-default btn-sm btn-block btn-dalje" ><i class="fa fa-plus-circle"></i> Spremi licnost</button>
</form>
			@endforeach
			<!-- Kadar 01 -->

			<!-- Kadar 01 / End-->
			<!-- Kadar 02 -->

			<!-- Kadar 05 / End-->
			</div>

			<!-- Tab: Ličnosti / End -->

			<!-- Tab: Vremeplov -->

			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vremeplov">
				<form id="editVremeplov" role="form" action="{{ url('/vremeplov/edit/'.$vremeplov->id) }}" method="POST" enctype="multipart/form-data" >
				{!! csrf_field() !!}

			<div class="row">

				
				<div class="row identitet-style">

				 <div class="col-md-12">

				  <div class="form-group col-md-12">
					<label for="opis"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Vremeplov</label>
					<textarea class="form-control" rows="20" name="content" id="opis" maxlength="1050" placeholder="{{$vremeplov->content}}">{{$vremeplov->content}}</textarea>
				  </div>

				 </div>

				</div>
				

			</div>
			<button  type="submit" class="btn btn-default btn-sm btn-block btn-dalje" ><i class="fa fa-plus-circle"></i> Spremi vremeplov</button>
		</form>
			</div>

			<!-- Tab: Vremeplov / End -->

			<!-- Tab: Vitrina -->
			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vitrina">


			@foreach($trofeji as $trofej)
			<form id="editTrofej" role="form" action="{{ url('/trofej/edit/'.$trofej->id) }}" method="POST" enctype="multipart/form-data" >
				{!! csrf_field() !!}
			<div class="row">
			<div class="row form-segment">
			  <header class="card__header">
                <h4><i class="fa fa-plus-circle"></i> Unos osvojenog trofeja/nagrade</h4>
              </header>
			 </div>
				<div class="col-md-6">
				  <div class="form-group col-md-6">
                    <label for="vrsta-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Vrsta nagrade</label>
                    <select class="form-control" id="vrsta-nagrade" name="vrsta_nagrade">
                    	<option value="{{$trofej->vrsta_nagrade}}" selected>{{$trofej->vrsta_nagrade}}</option>
						<option value="Medalja">Medalja</option>
						<option value="Trofej">Trofej/Pehar</option>
						<option value="Priznanje">Priznanje</option>
						<option value="Plaketa">Plaketa</option>
  					</select>
                  </div>
				  <div class="form-group col-md-6">
                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Tip nagrade</label>
                    <select class="form-control" id="tip-nagrade" name="tip_nagrade">
                    	<option value="{{$trofej->tip_nagrade}}" selected>{{$trofej->tip_nagrade}}</option>
						<option value="Zlato">Zlato (1. mjesto)</option>
						<option value="Srebro">Srebro (2. mjesto)</option>
						<option value="Bronza">Bronza (3. mjesto)</option>
						<option value="Ostalo">Ostalo</option>
  					</select>
                  </div>
				  <div class="form-group col-md-12">
                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Nivo takmičenja</label>
                    <select class="form-control" id="tip-nagrade" name="nivo_takmicenja">
                    	<option value="{{$trofej->nivo_takmicenja}}" selected>{{$trofej->nivo_takmicenja}}</option>
						<option value="Internacionalni nivo">Internacionalni nivo</option>
						<option value="Regionalni nivo">Regionalni nivo</option>
						<option value="Drzavni nivo">Državni nivo</option>
						<option value="Entitetski nivo">Entitetski nivo</option>
						<option value="Drugo">Drugo</option>
  					</select>
                  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"></img> Naziv takmičenja</label>
                    <input type="text" name="naziv_takmicenja" id="takmicenje" class="form-control" value="{{$trofej->naziv_takmicenja}}" placeholder="{{$trofej->naziv_takmicenja}}">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="sezona"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"></img> Sezona/Godina</label>
                    <input type="text" name="sezona" id="sezona" class="form-control" value="{{$trofej->sezona}}" placeholder="{{$trofej->sezona}}">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="osvajanja"><img class="flow-icons-013" src="{{asset('images/icons/the-sum-of.svg')}}"></img> Broj osvajanja</label>
                    <input type="number" name="osvajanje" id="osvajanja" class="form-control" value="{{$trofej->osvajanje}}" placeholder="{{$trofej->osvajanje}}">
                  </div>
				</div>
			</div>
			<button  type="submit" class="btn btn-default btn-sm btn-block btn-dalje" ><i class="fa fa-plus-circle"></i> Spremi trofej</button>
</form>
			@endforeach




			<!--<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group form-group--submit col-md-4">
                    <a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 2 Dodavanje trofeja </a>
                </div>
				<div class="col-md-4"></div>
			</div>-->

			</div>
			<!-- Tab: Vitrina / End -->


		<!-- Tab: Pozivnice i Zahtjevi -->
			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-pozivnice">
				<div class="row obavijesti-racun">
					<div class="card col-md-6">
					  <div class="card__header">
						<h4><i class="fa fa-envelope-open-o"></i>  Zahtjevi poslani od strane igrača</h4>
					  </div>
					  <div class="card__content kartica-ev-ocjene">

						<div class="table-responsive">
						  <table class="table shop-table pozivnice-list">
							<tbody>
							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							</tbody>
						  </table>
						</div>

					  </div>
					</div>

					<div class="card col-md-6">
					  <div class="card__header">
						<h4><i class="fa fa-envelope-o"></i>  Vaši zahtjevi igračima</h4>
					  </div>
					  <div class="card__content kartica-ev-ocjene">

						<div class="table-responsive">
						  <table class="table shop-table">
							<tbody>
							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
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
						<h4><i class="fa fa-envelope-open-o"></i>  Zahtjevi poslani od strane kadrova</h4>
					  </div>
					  <div class="card__content kartica-ev-ocjene">

						<div class="table-responsive">
						  <table class="table shop-table pozivnice-list">
							<tbody>
							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/dino-secic.jpg" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="70%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Dino Šečić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-check product__accept-icon"></a>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							</tbody>
						  </table>
						</div>

					  </div>
					</div>

					<div class="card col-md-6">
					  <div class="card__header">
						<h4><i class="fa fa-envelope-o"></i>  Vaši zahtjevi kadrovima</h4>
					  </div>
					  <div class="card__content kartica-ev-ocjene">

						<div class="table-responsive">
						  <table class="table shop-table">
							<tbody>
							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
								</td>
							  </tr>

							  <tr>
								<td class="product__photo">
								  <figure class="product__thumb" width="10%">
									<a href="#"><img class="img-ocjene" src="assets/images/profilna.JPG" alt=""></a>
								  </figure>
								</td>
								<td class="product__info" width="80%">
								  <span class="product__cat">Nogometaš</span>
								  <h5 class="product__name"><a href="#">Nedim Tufekčić</a></h5>
								</td>
								<td class="product__remove" width="10%">
								  <a href="#" class="fa fa-times product__remove-icon"></a>
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

			<!-- Tab: Foto galerija -->
			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">
<form id="editClubForm" name="editClubsForm" role="form" action="{{ url('/galerija/edit/'.$data->id) }}" method="POST" enctype="multipart/form-data" >
				{!! csrf_field() !!}



				<div class="row dodavanje-slika">
                      <div class="col-md-12 sadrzaj-slike">
						  <p class="dodaj-sliku-naslov">Dodajte slike</p>
						  <p class="dodaj-sliku-call">u Vašu galeriju</p>
						  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
							Odaberi slike... <input type="file" class="galerija_edit" name="galerija[]" accept="image/*" accept="image/*" multiple style="display: none;">
						  </label>
						  <div class="info001">
							<p class="info-upload-slike">Preporučena dimenzija za vaše slike:</p>
							<p class="info-upload-slike">1920x1080 px</p>
						  </div>
						</div>
				</div>


				<div class="row form-objavi-klub-01">

					@foreach($galerija as $slika)

					<div class="album__item col-xs-6 col-sm-3" id="galerija_klub">
						<div class="album__item-holder">
							<a href="{{asset('images/galerija_klub'.$slika->image)}}" class="album__item-link mp_gallery">
							<figure class="album__thumb">
								<img src="{{asset('images/galerija_klub/'.$slika->image)}}" alt="">
							</figure>
							<div class="album__item-desc">
								<img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt=""></img>
							</div>
							</a>
						</div>
					</div>

					@endforeach



				</div>

				<!--<div class="row">
					<div class="col-md-4"></div>
					<div class="form-group form-group--submit col-md-4">
						<a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 3 Dodavanje fotografije </a>
					</div>
					<div class="col-md-4"></div>
				</div>-->
				<div class="row">
					<div class="form-group form-group--submit col-md-6" >
						
					<button  type="submit" class="btn btn-default btn-sm btn-block btn-dalje" ><i class="fa fa-plus-circle"></i> Spremi izmjene</button>
				</form>
						<!-- Modal -->
						  <div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">

							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <h4 class="modal-title">USPJEŠNO STE SPREMILI IZMJENE</h4>
								</div>
								<div class="modal-body">
								  <img class="ikona-modal" src="assets/images/icons/save.svg"></img>
								  <p class="bravo-info">Izmjene koje ste napravili su spremljene.</p>
								  <p class="bravo-hello">Sportski pozdrav!</p>
								</div>
								<div class="modal-footer">
								  <button type="button" class="btn btn-default btn-close-modal-01" data-dismiss="modal"><i class="fa fa-times"></i> Zatvori prozor</button>
								</div>
							  </div>

							</div>
						  </div>
						<!-- Modal content / End -->
					</div>
				</div>

			</div>
			<!-- Tab: Foto galerija / End -->



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
  CKEDITOR.replace( 'content' );

 
  </script>

@endsection
