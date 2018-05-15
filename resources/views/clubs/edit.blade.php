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
            <h1 class="page-icon-objavi-title"><img src="{{asset('images/klubovi-fff.png')}}"></h1>
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
		<form id="editClubForm" role="form" action="{{ url('/clubs/'.$club->id.'/edit') }}" method="POST" enctype="multipart/form-data" >
			{!! csrf_field() !!}
			<div class="row">
				
				<div class="row identitet-style">

				 <div class="col-md-6 objavi-klub-logo-setup">

				    <div class="col-md-7">

                      <div class="alc-staff__photo">
                        <img class="slika-upload-klub" id="slika-upload-klub" src="{{isset($club->logo) ? asset('images/club_logo/'.$club->logo) : asset('images/SZS-club.logo.png')}}" alt="">
                      </div>

				    </div>

                    <div class="col-md-5 sadrzaj-slike">

						  <p class="dodaj-sliku-naslov klub-a1"> Logo kluba*</p>
						  <p class="dodaj-sliku-call">Identitet kluba</p>
						  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
							Odaberi logo... <input type="file" id="file_logo_kluba" name="logo" style="display: none;" onchange="previewFile('#file_logo_kluba','#slika-upload-klub', 1024, 1024, 512, 512)" value="{{isset($club->logo) ? asset('images/club_logo/'.$club->logo) : asset('images/SZS-club.logo.png')}}">
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
                    <input type="text" name="name" id="ime-kluba" class="form-control" value="{{$club->name}}" placeholder="{{$club->name}}">
                  </div>
				  <div class="form-group has-success col-md-12">
                    <label for="karakter-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Karakter kluba*<span>(izmjenjivo)</span></label>
                    <input type="text" name="nature" id="karakter-kluba" class="form-control" value="{{$club->nature}}" placeholder="{{$club->nature}}">
					<span>Prilikom unosa karaktera kluba ne unositi kratice kao što su: FK, NK, KK, OK i sl.</span>
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
										<option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $club->regions->get('continent') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group col-md-4">
							<label for="country"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"> Država*</label>
							<select name="country" class="form-control" id="country" {{ (old('country') || $club->regions->has('country')) ? '' : 'disabled' }}>
								<option selected disabled>Izaberite državu kluba</option>
								@foreach($regions as $region)
									@if($region->region_type->type == 'Country')
										<option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $club->regions->get('country') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group col-md-4">
							<label for="province"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"> Pokrajina*</label>
							<select name="province" class="form-control" id="province" {{ (old('province') || $club->regions->has('province')) ? '' : 'disabled' }}>
								<option selected disabled>Izaberite pokrajinu kluba</option>
								@foreach($regions as $region)
									@if($region->region_type->type == 'Province')
										<option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $club->regions->get('province') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-4">
							<label for="region"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"> Regija*</label>
							<select name="region" class="form-control" id="region" {{ (old('region') || $club->regions->has('region')) ? '' : 'disabled' }}>
								<option selected disabled>Izaberite regiju kluba</option>
								@foreach($regions as $region)
									@if($region->region_type->type == 'Region')
										<option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $club->regions->get('region') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group col-md-4">
							<label for="municipality"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"> Općina*</label>
							<select name="municipality" class="form-control" id="municipality" {{ (old('municipality') || $club->regions->has('municipality')) ? '' : 'disabled' }}>
								<option selected disabled>Izaberite općinu kluba</option>
								@foreach($regions as $region)
									@if($region->region_type->type == 'Municipality')
										<option data-parent="{{ $region->region_parent }}" value="{{ $region->id }}" {{ $club->regions->get('municipality') == $region->id ? 'selected' : '' }}>{{ $region->name }}</option>
									@endif
								@endforeach
							</select>
						</div>

						<div class="form-group col-md-4">
							<label for="mjesto"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Mjesto/Grad kluba*</label>
							<input name="city" id="mjesto" class="form-control" placeholder="Unesite mjesto kluba" value="{{ $club->city }}">
						</div>
					</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label for="club-type"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"> Tip kluba*</label>
						<select name="type" class="form-control" id="club-type">
							<option value="" disabled {{ $club->sport == '' ? 'selected' : '' }}>Izaberite tip kluba</option>
							<option value="1" {{ !$club->sport->with_disabilities ? 'selected' : '' }}>Sportski klub</option>
							<option value="2" {{ $club->sport->with_disabilities ? 'selected' : '' }}>Invalidski sportski klub</option>
						</select>
					</div>

					<div class="form-group col-md-4">
						<label for="sport"><img class="flow-icons-013" src="{{asset('images/icons/menu-circular-button.svg')}}"> Sportovi*</label>
						<select name="sport" class="form-control" id="sport" {{ (old('sport') || $club->sport->id) ? '' : 'disabled' }}>
							<option selected disabled>Izaberite sport kluba</option>
							@foreach($sports as $sport)
								<option data-disabled="{{ $sport->with_disabilities }}" value="{{ $sport->id }}" {{ $club->sport->id == $sport->id ? 'selected' : '' }}>{{ $sport->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group col-md-4">
						<label for="club-category"><img class="flow-icons-013" src="{{asset('images/icons/gender-symbols.svg')}}"> Kategorija kluba*</label>
						<select name="category" class="form-control" id="club-category">
							<option selected disabled>Izaberite sport kluba</option>
							@foreach($clubCategories as $category)
								<option value="{{ $category->id }}" {{ $club->category->id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
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
                    <input type="number" name="established_in" id="godina-osnivanja" class="form-control" value="{{$club->established_in}}">
                  </div>

				  <div class="form-group col-md-6">
                    <label for="domaci-teren"><img class="flow-icons-013" src="{{asset('images/icons/stadium-icon.svg')}}"> Domaći teren</label>
                    <input type="text" name="home_field" id="domaci-teren" class="form-control" value="{{$club->home_field}}">
                  </div>

				  <div class="form-group col-md-6">
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"> Takmičenje</label>
                    <input type="text" name="competition" id="takmicenje" class="form-control" value="{{$club->competition}}">
                  </div>

				<div class="form-group col-md-6" id="associations" style="display: {{ $club->regions->has('country') ? 'block' : 'none' }};">
					<label><img class="flow-icons-013" src="{{asset('images/icons/savez.svg')}}"> Savez kojem klub pripada</label>
					<div class="form-group">
						@foreach($associations as $association)
							<label class="radio radio-inline" style="display: {{ $club->regions->get('country') == $association->region_id ? 'inline-block' : 'none' }};">
								<input type="radio" data-region="{{ $association->region_id }}" name="association" value="{{ $association->id }}" {{ ($club->association ? $club->association->id : NULL) == $association->id ? 'checked' : '' }}> {{ $association->name }}
								<span class="radio-indicator"></span>
							</label>
						@endforeach
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
						<input type="number" name="phone_1" id="tel1" class="form-control" value="{{ $club->phone_1 }}">
					</div>

					<div class="form-group col-md-4">
						<label for="tel2"><img class="flow-icons-013" src="{{asset('images/icons/phone-call.svg')}}">  Telefon 2</label>
						<input type="number" name="phone_2" id="tel2" class="form-control" value="{{ $club->phone_2 }}">
					</div>

					<div class="form-group col-md-4">
						<label for="fax"><img class="flow-icons-013" src="{{asset('images/icons/fax-with-phone.svg')}}"> Fax</label>
						<input type="number" name="fax" id="fax" class="form-control" value="{{ $club->fax }}">
					</div>

					<div class="form-group col-md-4">
						<label for="mail"><img class="flow-icons-013" src="{{asset('images/icons/envelope.svg')}}"> E-mail</label>
						<input type="email" name="email" id="mail" class="form-control" value="{{ $club->email }}">
					</div>

					<div class="form-group col-md-4">
						<label for="web"><img class="flow-icons-013" src="{{asset('images/icons/worldwide.svg')}}"> Web stranica</label>
						<input type="text" name="website" id="web" class="form-control" value="{{ $club->website }}">
					</div>

					<div class="form-group col-md-4">
						<label for="adresa"><img class="flow-icons-013" src="{{asset('images/icons/icon.svg')}}"> Adresa (ne prikazuje se)</label>
						<input type="text" name="address" id="adresa" class="form-control" value="{{ $club->address }}">
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
						<input type="text" name="facebook" id="fcb" class="form-control" value="{{ $club->facebook }}">
					</div>

					<div class="form-group col-md-6">
						<label for="twt"><img class="flow-icons-013" src="{{asset('images/icons/twitter.svg')}}"> Twitter profil</label>
						<input type="text" name="twitter" id="twt" class="form-control" value="{{ $club->twitter }}">
					</div>

					<div class="form-group col-md-6">
						<label for="inst"><img class="flow-icons-013" src="{{asset('images/icons/instagram.svg')}}"> Instagram profil</label>
						<input type="text" name="instagram" id="inst" class="form-control" value="{{ $club->instagram }}">
					</div>

					<div class="form-group col-md-6">
						<label for="yt"><img class="flow-icons-013" src="{{asset('images/icons/youtube.svg')}}"> YouTUBE profil</label>
						<input type="text" name="youtube" id="yt" class="form-control" value="{{ $club->youtube }}">
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
						<input type="text" name="video" id="videoprez" class="form-control" value="{{ $club->video }}">
					</div>
					<button type="submit" class="btn btn-default btn-sm btn-block" ><i class="fa fa-plus-circle"></i> Spremi</button>
			</div>

  		</form>
	</div>

        
            <!-- Tab: Općenito / End -->

			<!-- Tab: Ličnosti -->

			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-licnosti">

			@foreach($club->club_staff as $licnost)
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
				<form id="editVremeplov" role="form" action="{{ url('/vremeplov/edit/' . $club->histories[0]->id) }}" method="POST" enctype="multipart/form-data" >
				{!! csrf_field() !!}

			<div class="row">

				
				<div class="row identitet-style">

				 <div class="col-md-12">

				  <div class="form-group col-md-12">
					<label for="opis"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"> Vremeplov</label>
					<textarea class="form-control" rows="20" name="history" id="opis" maxlength="1050">{{$club->histories[0]->content}}</textarea>
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


			@foreach($club->trophies as $trofej)
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
                    <label for="vrsta-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"> Vrsta nagrade</label>
                    <select class="form-control" id="vrsta-nagrade" name="vrsta_nagrade">
                    	<option value="{{$trofej->vrsta_nagrade}}" selected>{{$trofej->vrsta_nagrade}}</option>
						<option value="Medalja">Medalja</option>
						<option value="Trofej">Trofej/Pehar</option>
						<option value="Priznanje">Priznanje</option>
						<option value="Plaketa">Plaketa</option>
  					</select>
                  </div>
				  <div class="form-group col-md-6">
                    <label for="tip-nagrade">< class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"> Tip nagrade</label>
                    <select class="form-control" id="tip-nagrade" name="tip_nagrade">
                    	<option value="{{$trofej->tip_nagrade}}" selected>{{$trofej->tip_nagrade}}</option>
						<option value="Zlato">Zlato (1. mjesto)</option>
						<option value="Srebro">Srebro (2. mjesto)</option>
						<option value="Bronza">Bronza (3. mjesto)</option>
						<option value="Ostalo">Ostalo</option>
  					</select>
                  </div>
				  <div class="form-group col-md-12">
                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"> Nivo takmičenja</label>
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
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"> Naziv takmičenja</label>
                    <input type="text" name="naziv_takmicenja" id="takmicenje" class="form-control" value="{{$trofej->naziv_takmicenja}}" placeholder="{{$trofej->naziv_takmicenja}}">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="sezona"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"> Sezona/Godina</label>
                    <input type="text" name="sezona" id="sezona" class="form-control" value="{{$trofej->sezona}}" placeholder="{{$trofej->sezona}}">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="osvajanja"><img class="flow-icons-013" src="{{asset('images/icons/the-sum-of.svg')}}"> Broj osvajanja</label>
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
<form id="editClubForm" name="editClubsForm" role="form" action="{{ url('/galerija/edit/' . $club->id) }}" method="POST" enctype="multipart/form-data" >
				{!! csrf_field() !!}



				<div class="row dodavanje-slika">
                      <div class="col-md-12 sadrzaj-slike">
						  <p class="dodaj-sliku-naslov">Dodajte slike</p>
						  <p class="dodaj-sliku-call">u Vašu galeriju</p>
						  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
							Odaberi slike... <input type="file" class="galerija_edit" name="galerija[]" accept="image/*" multiple style="display: none;">
						  </label>
						  <div class="info001">
							<p class="info-upload-slike">Preporučena dimenzija za vaše slike:</p>
							<p class="info-upload-slike">1920x1080 px</p>
						  </div>
						</div>
				</div>


				<div class="row form-objavi-klub-01">

					@foreach($club->images as $slika)

					<div class="album__item col-xs-6 col-sm-3" id="galerija_klub">
						<div class="album__item-holder">
							<a href="{{asset('images/galerija_klub'.$slika->image)}}" class="album__item-link mp_gallery">
							<figure class="album__thumb">
								<img src="{{asset('images/galerija_klub/'.$slika->image)}}" alt="">
							</figure>
							<div class="album__item-desc">
								<img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt="">
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
								  <img class="ikona-modal" src="assets/images/icons/save.svg">
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
  CKEDITOR.replace('history');

 
  </script>

@endsection
