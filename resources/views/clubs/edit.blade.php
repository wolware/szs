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

						  <p class="dodaj-sliku-naslov klub-a1">Logo kluba</p>
						  <p class="dodaj-sliku-call">Identitet kluba</p>
						  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
							Odaberi logo... <input type="file" id="file_logo_kluba" name="logo_klub" style="display: none;" onchange="previewFile('file_logo_kluba','slika-upload-klub')" value="{{isset($data->logo) ? asset('images/club_logo/'.$data->logo) : asset('images/SZS-club.logo.png')}}">
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
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Ime/Naziv kluba</label>
                    <input type="text" name="name" id="ime-kluba" class="form-control" value="{{$data->name}}" placeholder="{{$data->name}}">
                  </div>
				  <div class="form-group has-success col-md-12">
                    <label for="karakter-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Karakter kluba <span>(izmjenjivo)</span></label>
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
                    <label for="kontinent"><img class="flow-icons-013" src="{{asset('images/icons/international-delivery.svg')}}"></img> Kontinent</label>
                    <select class="form-control" id="kontinent" name="kontinent">
                    	<option value="{{$data->kontinent}}" selected>{{$data->kontinent}}</option>
  						<option value="Evropa">Evropa</option>
  					</select>
				  </div>

				  <div class="form-group col-md-4">
                    <label for="drzava"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"></img> Država</label>
                    <select class="form-control" id="drzava" name="drzava">
                    	<option value="{{$data->drzava}}" selected>{{$data->drzava}}</option>
  						<option value="Bosna i Hercegovina" disabled>Bosna i Hercegovina</option>
  					</select>
				  </div>

				  <div class="form-group col-md-4">
                    <label for="entitet"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"></img> Entitet/Distrikt</label>
                    <select class="form-control" id="entitet" name="entitet">
                    	<option value="{{$data->entitet}}" selected>{{$data->entitet}}</option>
						<option value="Federacija BiH">Federacija BiH</option>
    					<option value="Republika Srpska">Republika Srpska</option>
						<option value="Distrikt Brcko" disabled>Distrikt Brčko</option>
  					</select>
				  </div>
				  @if($data->entitet == "Federacija BiH")
				  <div class="form-group col-md-4">
                    <label for="kanton"><img class="flow-icons-013" src="assets/images/icons/placeholder.svg"></img> Kanton</label>
                    <select class="form-control" id="kanton" name="kanton">
                    	<option value="{{$data->kanton}}" selected>{{$data->kanton}}</option>
						<option value="Unsko-sanski Kanton" disabled>Unsko-sanski Kanton</option>
    					<option value="Posavski Kanton" disabled>Posavski Kanton</option>
						<option value="Tuzlanski Kanton" disabled>Tuzlanski Kanton</option>
    					<option value="Zeničko-dobojski Kanton" disabled>Zeničko-dobojski Kanton</option>
						<option value="Bosansko-podrinjski kanton" disabled>Bosansko-podrinjski Kanton</option>
    					<option value="Srednjobosanski Kanton" disabled>Srednjobosanski Kanton</option>
						<option value="Hercegovačko-neretvanski Kanton" disabled>Hercegovačko-neretvanski Kanton</option>
    					<option value="Zapadnohercegovački Kanton" disabled>Zapadnohercegovački Kanton</option>
						<option value="Kanton Sarajevo">Kanton Sarajevo</option>
    					<option value="Kanton 10" disabled>Kanton 10</option>
  					</select>
				  </div>
				  <div class="form-group col-md-4">
                    <label for="opcine-ks"><img class="flow-icons-013" src="assets/images/icons/opcina.svg"></img> Općine Kantona Sarajevo</label>
                    <select class="form-control" id="opcine-ks" name="opcina">
                    	<option value="{{$data->opcina}}" selected>{{$data->opcina}}</option>
						<option value="Hadzici">Hadžići</option>
    					<option value="Ilidza">Ilidža</option>
						<option value="Ilijas">Ilijaš</option>
    					<option value="Centar">Centar</option>
						<option value="Novi-grad">Novi Grad</option>
    					<option value="Novo-sarajevo">Novo Sarajevo</option>
						<option value="Stari-grad">Stari Grad</option>
    					<option value="Trnovo">Trnovo</option>
						<option value="Vogosca">Vogošća</option>
  					</select>
				  </div>

				  @else
				  <div class="form-group col-md-4">
                    <label for="regija"><img class="flow-icons-013" src="assets/images/icons/placeholder.svg"></img> Regija</label>
                    <select class="form-control" id="regija" name="kanton">
                    	<option value="{{$data->kanton}}">{{$data->kanton}}</option>
  						<option value="" disabled>Izaberite regiju</option>
						<option value="Banjalucka" disabled>Banjalučka</option>
    					<option value="Dobojsko-bijeljinska" disabled>Dobojsko-bijeljinska</option>
						<option value="Sarajevsko-zvornicka">Sarajevsko-zvornička</option>
    					<option value="Trebinjsko-focanska" disabled>Trebinjsko-fočanska</option>
  					</select>
				  </div>

				  <div class="form-group col-md-4">
                    <label for="opcine-sz-reg"><img class="flow-icons-013" src="assets/images/icons/opcina.svg"></img> Općine Sarajevsko-Zvorničke regije</label>
                    <select name="opcina" class="form-control" id="opcine-sz-reg">
                    	<option value="{{$data->opcina}}" selected>{{$data->opcina}}</option>
  						<option value="" disabled>Izaberite općinu</option>
						<option value="Bratunac" disabled>Bratunac</option>
    					<option value="Han Pijesak" disabled>Han Pijesak</option>
						<option value="Ilijas">Ilijaš</option>
    					<option value="Istocni Stari Grad">Istočni Stari Grad</option>
						<option value="Kasindo">Kasindo</option>
    					<option value="Kladanj" disabled>Kladanj</option>
						<option value="Lukavica" disabled>Lukavica</option>
    					<option value="Milici" disabled>Milići</option>
						<option value="Olovo" disabled>Olovo</option>
						<option value="Osmaci" disabled>Osmaci</option>
    					<option value="Pale">Pale</option>
						<option value="Rogatica" disabled>Rogatica</option>
    					<option value="Rudo" disabled>Rudo</option>
						<option value="Sarajevo Novi Grad">Sarajevo Novi Grad</option>
    					<option value="Sokolac" disabled>Sokolac</option>
						<option value="Srebrenica" disabled>Srebrenica</option>
    					<option value="Trnovo">Trnovo</option>
						<option value="Ustipraca">Ustiprača</option>
						<option value="Visegrad" disabled>Višegrad</option>
						<option value="Vlasenica" disabled>Vlasenica</option>
						<option value="Zvornik" disabled>Zvornik</option>
						<option value="Sekovici" disabled>Šekovići</option>
						<option value="Zepa" disabled>Žepa</option>
  					</select>
				  </div>
				  @endif

				  <div class="form-group col-md-4">
                    <label for="mjesto"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"></img> Mjesto/Grad kluba</label>
                    <input type="text" name="grad" id="mjesto" class="form-control" value="{{$data->grad}}" placeholder="{{$data->grad}}" required>
                  </div>

				  <div class="form-group col-md-4">
                    <label for="tip-kluba"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"></img> Tip kluba</label>
                    <select class="form-control" id="tip-kluba" name="tip">
                    	<option value="{{$data->tip}}" selected>{{$data->tip}}</option>
						<option value="Sportski klub">Sportski klub</option>
    					<option value="Invalidski sportski klub">Invalidski sportski klub</option>
  					</select>
				  </div>
				  @if($data->invalidski_sport)
				  <div class="form-group col-md-4">
                    <label for="invalidski-sport"><img class="flow-icons-013" src="assets/images/icons/disability.svg"></img> Sportovi za osobe sa invaliditetom</label>
                    <select class="form-control" id="invalidski_sport">
                    	<option value="{{$data->invalidski_sport}}" selected>{{$data->invalidski_sport}}</option>
						<option value="Alpsko skijanje">Alpsko skijanje</option>
						<option value="Atletika">Atletika</option>
						<option value="Global">Global</option>
						<option value="Kosarka u kolicima">Košarka u kolicima</option>
						<option value="Nordijsko skijanje">Nordijsko skijanje</option>
						<option value="Plivanje">Plivanje</option>
						<option value="Sjedeca odbojka">Sjedeća odbojka</option>
						<option value="Stoni tenis">Stoni tenis</option>
						<option value="Streljastvo">Streljaštvo</option>
						<option value="Sah">Šah</option>
					</select>
				  </div>
          @else
            <div class="form-group col-md-4">
                    <label for="sport"><img class="flow-icons-013" src="{{asset('images/icons/menu-circular-button.svg')}}"></img> Sportovi</label>
                    <select class="form-control" id="sport" name="sport" selected>
                      <option value="{{$data->sport}}" selected>{{$data->sport}}</option>
            <option value="Aikido">Aikido</option>
            <option value="Atletika">Atletika</option>
            <option value="Auto-Moto">Auto-Moto</option>
            <option value="Badminton">Badminton</option>
            <option value="Biciklizam">Biciklizam</option>
            <option value="Bob">Bob</option>
            <option value="Bocanje">Boćanje</option>
            <option value="Bodybuilding and Fitness">Bodybuilding & Fitness</option>
            <option value="Boks">Boks</option>
            <option value="Curling">Curling</option>
            <option value="Dizanje tegova">Dizanje tegova</option>
            <option value="Futsal">Futsal</option>
            <option value="Gimnastika">Gimnastika</option>
            <option value="Golf">Golf</option>
            <option value="Hokej">Hokej</option>
            <option value="Hrvanje">Hrvanje</option>
            <option value="Jedrenje">Jedrenje</option>
            <option value="Ju Jitsu">Ju Jitsu</option>
            <option value="Judo">Judo</option>
            <option value="Kajak Kanu i Rafting">Kajak Kanu i Rafting</option>
            <option value="Karate">Karate</option>
            <option value="Kick Box">Kick Box</option>
            <option value="Klizanje">Klizanje</option>
            <option value="Konjicki sportovi">Konjički sportovi</option>
            <option value="Kosarka">Košarka</option>
            <option value="Kung Fu">Kung Fu</option>
            <option value="Kuglanje">Kuglanje</option>
            <option value="Nogomet">Nogomet</option>
            <option value="Macevanje">Mačevanje</option>
            <option value="Odbojka">Odbojka</option>
            <option value="Planinarstvo">Planinarstvo</option>
            <option value="Plivanje">Plivanje</option>
            <option value="Ragbi">Ragbi</option>
            <option value="Ronjenje">Ronjenje</option>
            <option value="Rukomet">Rukomet</option>
            <option value="Skijanje">Skijanje</option>
            <option value="Sportski ribolov">Sportski ribolov</option>
            <option value="Stoni tenis">Stoni tenis</option>
            <option value="Strelicarstvo">Streličarstvo</option>
            <option value="Streljastvo">Streljaštvo</option>
            <option value="Sah">Šah</option>
            <option value="Teakwondo">Taekwondo</option>
            <option value="Tenis">Tenis</option>
            <option value="Triatlon">Triatlon</option>
            <option value="Vaterpolo">Vaterpolo</option>
            <option value="Vazduhoplovstvo">Vazduhoplovstvo</option>
            <option value="Veslanje">Veslanje</option>
          </select>
          </div>
				  @endif
				  <div class="form-group col-md-4">
                    <label for="kategorija-klub"><img class="flow-icons-013" src="{{asset('images/icons/gender-symbols.svg')}}"></img> Kategorija kluba</label>
                    <select class="form-control" id="kategorija-klub" name="kategorija">
                    	<option value="{{$data->kategorija}}">{{$data->kategorija}}</option>
						<option value="Muski klub">Muški klub</option>
						<option value="Zenski klub">Ženski klub</option>
						<option value="Mjesovito">Mješovito</option>
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
                    <label for="godina-osnivanja"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"></img> Godina osnivanja kluba</label>
                    <input type="text" name="godina_osnivanja" id="godina-osnivanja" class="form-control" value="{{$data->godina_osnivanja}}" placeholder="{{$data->godina_osnivanja}}">
                  </div>

				  <div class="form-group col-md-6">
                    <label for="domaci-teren"><img class="flow-icons-013" src="{{asset('images/icons/stadium-icon.svg')}}"></img> Domaći teren</label>
                    <input type="text" name="teren" id="domaci-teren" class="form-control" value="{{$data->teren}}" placeholder="{{$data->teren}}">
                  </div>

				  <div class="form-group col-md-6">
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"></img> Takmičenje</label>
                    <input type="text" name="takmicenje" id="takmicenje" class="form-control" value="{{$data->takmicenje}}" placeholder="{{$data->takmicenje}}">
                  </div>

				  <div class="form-group col-md-6">
                    <label for="savez"><img class="flow-icons-013" src="{{asset('images/icons/savez.svg')}}"></img> Savez kojem klub pripada</label>
					<div class="form-group">
					  <label class="radio radio-inline">
						<input type="radio" id="savez"  name="savez" value="option1"> Državni savez
						<span class="radio-indicator"></span>
					  </label>
					  <label class="radio checkbox-inline">
						<input type="radio" id="inlineCheckbox2" name="savez"  value="option2" checked> Entitetski savez
						<span class="radio-indicator"></span>
					  </label>
					  <label class="radio checkbox-inline">
						<input type="radio" id="inlineCheckbox3" name="savez"  value="option3"> Kantonalni savez
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
						<label for="tel1"><img class="flow-icons-013" src="{{asset('images/icons/phone-call.svg')}}"></img> Telefon 1</label>
						<input type="number" name="telefon1" id="tel1" class="form-control" value="{{$data->telefon1}}" placeholder="{{$data->telefon1}}">
					</div>

					<div class="form-group col-md-4">
						<label for="tel2"><img class="flow-icons-013" src="{{asset('images/icons/phone-call.svg')}}"></img> Telefon 2</label>
						<input type="number" name="telefon2" id="tel2" class="form-control" value="{{$data->telefon1}}" placeholder="{{$data->telefon1}}">
					</div>

					<div class="form-group col-md-4">
						<label for="fax"><img class="flow-icons-013" src="{{asset('images/icons/fax-with-phone.svg')}}"></img> Fax</label>
						<input type="number" name="fax" id="fax" class="form-control" value="{{$data->fax}}" placeholder="{{$data->fax}}">
					</div>

					<div class="form-group col-md-4">
						<label for="mail"><img class="flow-icons-013" src="{{asset('images/icons/envelope.svg')}}"></img> E-mail</label>
						<input type="email" name="email" id="mail" class="form-control" value="{{$data->email}}" placeholder="{{$data->email}}">
					</div>

					<div class="form-group col-md-4">
						<label for="web"><img class="flow-icons-013" src="{{asset('images/icons/worldwide.svg')}}"></img> Web stranica</label>
						<input type="text" name="web_stranica" id="web" class="form-control" value="{{$data->web_stranica}}" placeholder="{{$data->web_stranica}}">
					</div>

					<div class="form-group col-md-4">
						<label for="adresa"><img class="flow-icons-013" src="{{asset('images/icons/icon.svg')}}"></img> Adresa (ne prikazuje se)</label>
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
						<label for="fcb"><img class="flow-icons-013" src="{{asset('images/icons/facebook.svg')}}"></img> Facebook stranica</label>
						<input type="text" name="fb" id="fcb" class="form-control" value="{{$data->fb}}" placeholder="{{$data->fb}}">
					</div>

					<div class="form-group col-md-6">
						<label for="twt"><img class="flow-icons-013" src="{{asset('images/icons/twitter.svg')}}"></img> Twitter profil</label>
						<input type="text" name="twitter" id="twt" class="form-control" value="{{$data->twitter}}" placeholder="{{$data->twitter}}">
					</div>

					<div class="form-group col-md-6">
						<label for="inst"><img class="flow-icons-013" src="{{asset('images/icons/instagram.svg')}}"></img> Instagram profil</label>
						<input type="text" name="instagram" id="inst" class="form-control" value="{{$data->instagram}}" placeholder="{{$data->instagram}}">
					</div>

					<div class="form-group col-md-6">
						<label for="yt"><img class="flow-icons-013" src="{{asset('images/icons/youtube.svg')}}"></img> YouTUBE pofil</label>
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
						<label for="videoprez"><img class="flow-icons-013" src="{{asset('images/icons/play-button.svg')}}"></img> Video prezentacija</label>
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
							Odaberi sliku... <input type="file" name="avatar_licnost" id="al1" accept="image/*" style="display: none;" onchange="previewFile('al1', 'slika-edit-profil1')">
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
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Ime</label>
                    <input type="text" name="ime" id="ime-kluba" class="form-control" placeholder="Unesite ime ličnosti" value="{{$licnost->ime}}">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Prezime</label>
                    <input type="text" name="prezime" id="ime-kluba" class="form-control" placeholder="Unesite prezime ime ličnosti" value="{{$licnost->prezime}}">
                  </div>
				  <div class="form-group col-md-12">
					<label for="opis"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Opis i uloga</label>
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
