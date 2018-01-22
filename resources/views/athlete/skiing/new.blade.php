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
            <h1 class="page-icon-objavi-title"><img src="{{asset('assets/images/icons/skier-going-down-a-hill.svg')}}"></img></h1>
            <h1 class="page-heading__title">Objavi Sportistu</h1>
            <ol class="page-heading__breadcrumb breadcrumb">
              <li class="registracija-podnaslov">Skijaš</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
@if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif
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
            <li role="presentation" class="active"><a href="#tab-opcenito" role="tab" data-toggle="tab"><i class="fa fa-info-circle"></i><small>O sportisti</small>Općenito</a></li>
			<li role="presentation"><a href="#tab-predispozicije" role="tab" data-toggle="tab"><i class="fa fa-bolt"></i><small>Predispozicije</small>Sportiste</a></li>
            <li role="presentation"><a href="#tab-biografija" role="tab" data-toggle="tab"><i class="fa fa-history"></i><small>Biografija</small>Sportiste</a></li>
            <li role="presentation"><a href="#tab-vitrina" role="tab" data-toggle="tab"><i class="fa fa-trophy"></i><small>Trofejna</small>Vitrina</a></li>
			<li role="presentation"><a href="#tab-galerija" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i><small>Foto</small>Galerija</a></li>
          </ul>
           <form id="createNewFootballer" role="form" action="{{ url('/athlete/skiing/create') }}" method="POST" enctype="multipart/form-data" >
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
						  <p class="dodaj-sliku-call">Vaš identitet</p>
						  <label class="btn btn-default btn-xs btn-file dodaj-sliku-button">
							Odaberi sliku... <input type="file" id="slikaprof" name="avatar" style="display: none;" required accept="image/*" onchange="previewFile('slikaprof','slika_upload_klub')">
						  </label>
						  <div class="info001">
							<p class="info-upload-slike">Preporučene dimenzije za sliku:</p>
							<p class="info-upload-slike">Minimalno: 1920x1080 px</p>
						  </div>
						  
					</div>
				 </div>
				 
				 <div class="col-md-6">
				 
				  <div class="form-group col-md-6">
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Ime sportiste</label>
                    <input type="text" name="ime" id="ime-sportiste" class="form-control" placeholder="Unesite ime sportiste" required>
                  </div>
				  <div class="form-group col-md-6">
                    <label for="ime-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Prezime sportiste</label>
                    <input type="text" name="prezime" id="ime-kluba" class="form-control" placeholder="Unesite prezime sportiste" required>
                  </div>
				  <div class="form-group col-md-12">
                    <label for="karakter-kluba"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Karakter sportiste</label>
						<select class="form-control" id="entitet" name="karakter" required>
  						<option value="profesionalac" selected>Profesionalni sportista</option>
						<option value="amater">Sportista amater</option>
    					<option value="rekreativac">Sportista rekreativac</option>
						<option value="vrhunski">Vrhunski sportista</option>
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
                    <label for="kontinent"><img class="flow-icons-013" src="{{asset('images/icons/international-delivery.svg')}}"></img> Kontinent</label>
                    <select class="form-control" id="kontinent" name="kontinent" required>
  						<option value="eu" selected>Evropa</option>
  					</select>
				  </div>
				
				  <div class="form-group col-md-4">
                    <label for="drzava"><img class="flow-icons-013" src="{{asset('images/icons/earth.svg')}}"></img> Država</label>
                    <select class="form-control" id="drzava" name="drzava" required>
  						<option value="bih" selected>Bosna i Hercegovina</option>
  					</select>
				  </div>
				
				  <div class="form-group col-md-4">
                    <label for="entitet"><img class="flow-icons-013" src="{{asset('images/icons/map.svg')}}"></img> Entitet/Distrikt</label>
                    <select class="form-control" id="entitet" name="entitet" required>
  						<option value="" disabled selected>Izaberite entitet/distrikt</option>
						<option value="fbih">Federacija BiH</option>
    					<option value="rs">Republika Srpska</option>
						<option value="distrikt" disabled>Distrikt Brčko</option>
  					</select>
				  </div>
				
				  <div class="form-group col-md-4">
                    <label for="kanton"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"></img> Kanton</label>
                    <select class="form-control" id="kanton" name="kanton">
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
                    <label for="opcine-ks"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"></img> Općine Kantona Sarajevo</label>
                    <select class="form-control" id="opcine-ks" name="opcina">
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
                    <label for="regija"><img class="flow-icons-013" src="{{asset('images/icons/placeholder.svg')}}"></img> Regija</label>
                    <select class="form-control" id="regija" name="kanton">
  						<option value="" disabled selected>Izaberite regiju</option>
						<option value="blk" disabled>Banjalučka</option>
    					<option value="dbj" disabled>Dobojsko-bijeljinska</option>
						<option value="szv">Sarajevsko-zvornička</option>
    					<option value="tbf"disabled>Trebinjsko-fočanska</option>
  					</select>
				  </div>
				  
				  <div class="form-group col-md-4">
                    <label for="opcine-sz-reg"><img class="flow-icons-013" src="{{asset('images/icons/opcina.svg')}}"></img> Općine Sarajevsko-Zvorničke regije</label>
                    <select class="form-control" id="opcine-sz-reg" name="opcina">
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
				  
				  <div class="form-group col-md-4">
                    <label for="mjesto"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"></img> Mjesto/Grad kluba</label>
                    <input type="text" name="grad" id="mjesto" class="form-control" placeholder="Unesite mjesto kluba" required>
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
						<input type="text" name="fb" id="fcb" class="form-control" placeholder="Unesite link službene facebook stranice">
					</div>
					
					<div class="form-group col-md-6">
						<label for="twt"><img class="flow-icons-013" src="{{asset('images/icons/twitter.svg"')}}></img> Twitter profil</label>
						<input type="text" name="twt" id="twt" class="form-control" placeholder="Unesite link službenog twitter profila">
					</div>
					
					<div class="form-group col-md-6">
						<label for="inst"><img class="flow-icons-013" src="{{asset('images/icons/instagram.svg')}}"></img> Instagram profil</label>
						<input type="text" name="instagram" id="inst" class="form-control" placeholder="Unesite link službenog instagram profila">
					</div>
					
					<div class="form-group col-md-6">
						<label for="yt"><img class="flow-icons-013" src="{{asset('images/icons/youtube.svg')}}"></img> YouTUBE pofil</label>
						<input type="text" name="youtube" id="yt" class="form-control" placeholder="Unesite link službenog YouTUBE kanala">
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
						<input type="text" name="video" id="videoprez" class="form-control" placeholder="Unesite link videa (YouTUBE)">
					</div>
					
				
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
				  <div class="form-group col-md-4">
        			<label class="control-label" for="date"><i class="fa fa-calendar-o"></i> Datum rođenja</label>
        			<input class="form-control" id="date" name="dob" placeholder="Izaberite datum rođenja" type="text"/>
      			  </div>
				  
				  <div class="form-group col-md-4">
                    <label for="klub"><img class="flow-icons-013" src="{{asset('assets/images/icons/klubovi-icon.svg')}}"></img> Klub</label>
                    <input type="text" name="klub" id="klub" class="form-control" placeholder="Unesite ime kluba za koji sportista nastupa">
                  </div>
				  
				  <div class="form-group col-md-4">
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('assets/images/icons/trophy.svg')}}"></img> Takmičenje</label>
                    <input type="text" name="takmicenje" id="takmicenje" class="form-control" placeholder="Unesite naziv takmičenja">
                  </div>
				  
			</div>
				
			<div class="row form-objavi-klub-01">
              <header class="card__header">
                <h4><i class="fa fa-info-circle"></i> Predispozicije sportiste</h4>
              </header>
			 </div>
			 <div class="row">
				
					<div class="form-group col-md-4">
						<label for="visina"><img class="flow-icons-013" src="{{asset('assets/images/icons/height.svg')}}"></img> Visina</label>
						<input type="number" name="visina" id="visina" class="form-control" placeholder="Unesite visinu u cm">
					</div>
					
					<div class="form-group col-md-4">
						<label for="tezina"><img class="flow-icons-013" src="{{asset('assets/images/icons/weight.svg')}}"></img> Težina</label>
						<input type="number" name="tezina" id="tezina" class="form-control" placeholder="Unesite težinu u kg">
					</div>
					
					<div class="form-group col-md-4">
						<label for="ski-disciplina"><img class="flow-icons-013" src="{{asset('assets/images/icons/glasses.svg')}}"></img> Skijaška disciplina</label>
						<select class="form-control" id="ski-disciplina" name="disciplina">
							<option value="" selected>Izaberite skijašku disciplinu</option>
							<option value="Slalom">Slalom</option>
							<option value="Veleslalom">Veleslalom</option>
							<option value="Spust">Spust</option>
							<option value="Super-veleslalom">Super-veleslalom</option>
							<option value="Alpska kombinacija">Alpska kombinacija</option>
							<option value="Paralelna natjecanja">Paralelna natjecanja</option>
						</select>
					</div>
				
					<div class="form-group col-md-4">
						<label for="najbolji-rez-ski"><img class="flow-icons-013" src="{{asset('assets/images/icons/ski.svg')}}"></img> Najbolji rezultat</label>
						<input type="text" name="najboljirez" id="najbolji-rez-ski" class="form-control" placeholder="Unesite najbolji rezultat u karijeri">
					</div>
					
					<div class="form-group col-md-4">
						<label for="agent"><img class="flow-icons-013" src="{{asset('assets/images/icons/agent.sv')}}g"></img> Agent</label>
						<input type="text" name="agent" id="agent" class="form-control" placeholder="Unesite ime agenta/firme">
					</div>
					
					
					<div class="row form-objavi-klub-01">
					  <div class="col-md-12">
					  	<header class="card__header">
						<h4><i class="fa fa-info-circle"></i> Klupska historija</h4>
					  </header>
					  </div>
					 </div>
					<div class="row"> 
						  <div class="col-md-12">
						  	<div class="form-group col-md-6">
							<label for="sezona"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"></img> Sezona</label>
							<input type="text" name="sezona_kh[]" id="sezona" class="form-control" placeholder="npr. 2015-2016">
						  </div>
						  
						  <div class="form-group col-md-6">
							<label for="klub"><img class="flow-icons-013" src="{{asset('images/icons/klubovi-icon.svg')}}"></img> Klub</label>
							<input type="text" name="klub_kh[]" id="klub" class="form-control" placeholder="Unesite ime kluba">
						  </div>
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
							
				<div class="row identitet-style">
				 
				 <div class="col-md-12">
				 
				  <div class="form-group col-md-12">
					<label for="opis"><img class="flow-icons-013" src="{{asset('images/icons/edit.svg')}}"></img> Biografija</label>
					<textarea class="form-control" rows="20" id="opis" name="content" maxlength="1050" placeholder="Upišite ukratko informacije vezane za historijat vašeg kluba i njegovu tradiciju..."></textarea>
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
			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-vitrina">
			
				<div class="row obavijesti-racun">
					<div class="alert alert-warning">
					  <strong>PREMIUM račun Vam dozvoljava unos do maksimalnih 24 trofeja/nagrada.</strong>
					</div>
					<div class="alert alert-warning">
					  <button href="premium.php" type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Aktiviraj premium</button>
					  <strong>STANDARDAN račun Vam dozvoljava unos do maksimalno 8 trofeja/nagrada.</strong>
					</div>
				</div>
			
			<div class="row">
			<div class="row form-segment">
			  <header class="card__header">
                <h4><i class="fa fa-plus-circle"></i> Unos osvojenog trofeja/nagrade</h4>
              </header>
			 </div>
				<div class="col-md-6">
				  <div class="form-group col-md-6">
                    <label for="vrsta-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Vrsta nagrade</label>
                    <select class="form-control" id="vrsta-nagrade" name="vrsta_nagrade[]">
  						<option value="" disabled selected>Izaberite vrstu osvojene nagrade</option>
						<option value="medalja">Medalja</option>
						<option value="trofej">Trofej/Pehar</option>
						<option value="priznanje">Priznanje</option>
						<option value="plaketa">Plaketa</option>
  					</select>
                  </div>
				  <div class="form-group col-md-6">
                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Tip nagrade</label>
                    <select class="form-control" id="tip-nagrade" name="tip_nagrade[]"> 
  						<option value="" disabled selected>Izaberite tip nagrade</option>
						<option value="zlato">Zlato (1. mjesto)</option>
						<option value="srebro">Srebro (2. mjesto)</option>
						<option value="bronza">Bronza (3. mjesto)</option>
						<option value="ostalo">Ostalo</option>
  					</select>
                  </div>
				  <div class="form-group col-md-12">
                    <label for="tip-nagrade"><img class="flow-icons-013" src="{{asset('images/icons/medalja.svg')}}"></img> Nivo takmičenja</label>
                    <select class="form-control" id="tip-nagrade" name="nivo_takmicenja[]">
  						<option value="" disabled selected>Izaberite nivo takmičenja</option>
						<option value="intl">Internacionalni nivo</option>
						<option value="regn">Regionalni nivo</option>
						<option value="drzv">Državni nivo</option>
						<option value="entt">Entitetski nivo</option>
						<option value="drg">Drugo</option>
  					</select>
                  </div>
				</div>
				<div class="col-md-6">
				  <div class="form-group">
                    <label for="takmicenje"><img class="flow-icons-013" src="{{asset('images/icons/trophy.svg')}}"></img> Naziv takmičenja</label>
                    <input type="text" name="naziv_takmicenja[]" id="takmicenje" class="form-control" placeholder="Unesite naziv takmicenja za koje je osvojena nagrada">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="sezona"><img class="flow-icons-013" src="{{asset('images/icons/small-calendar.svg')}}"></img> Sezona/Godina</label>
                    <input type="text" name="trofej_sezona[]" id="sezona" class="form-control" placeholder="Unesite Sezonu/Godinu osvajanja trofeja">
                  </div>
				  <div class="form-group col-md-6 col-xs-12">
                    <label for="osvajanja"><img class="flow-icons-013" src="{{asset('images/icons/the-sum-of.svg')}}"></img> Broj osvajanja</label>
                    <input type="number" name="trofej_osvajanja[]" id="osvajanja" class="form-control" placeholder="Unesite broj osvajanja trofeja">
                  </div>
				</div>
			</div>
			
			
			
			
			<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group form-group--submit col-md-4">
                    <a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 2 Dodavanje trofeja </a>
                </div>
				<div class="col-md-4"></div>
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
			<!-- Tab: Vitrina / End -->
			
			<!-- Tab: Foto galerija -->
			<div role="tabpanel" class="tab-pane fade neaktivno" id="tab-galerija">
			
				<div class="row obavijesti-racun">
					<div class="alert alert-warning">
					  <strong>PREMIUM račun Vam dozvoljava unos do maksimalnih 20 slika.</strong>
					</div>
					<div class="alert alert-warning">
					  <button href="premium.php" type="button" class="btn btn-xs btn-default btn-outline alert-btn-right">Aktiviraj premium</button>
					  <strong>STANDARDAN račun Vam dozvoljava unos do maksimalno 12 slika.</strong>
					</div>
				</div>
				
				
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
				
				
				<div class="row form-objavi-klub-01">
					<div class="album__item col-xs-6 col-sm-3">
						<div class="album__item-holder">
							<a href="images/banner-122.jpg" class="album__item-link mp_gallery">
							<figure class="album__thumb">
								<img src="{{asset('images/banner-122.jpg')}}" alt="">
							</figure>
							<div class="album__item-desc">
								<img src="{{asset('images/icons/expand-square.svg')}}" class="pregled-slike" alt=""></img>
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
					<div class="form-group form-group--submit col-md-4">
						<a href="#" class="btn btn-default btn-sm btn-block btn-dodaj"><i class="fa fa-database"></i> 3 Dodavanje fotografije </a>
					</div>
					<div class="col-md-4"></div>
				</div>
				
				<div class="row">
					<div class="form-group form-group--submit col-md-6">
						<a href="#" class="btn btn-default btn-sm btn-block btn-nazad"><i class="fa fa-chevron-left"></i> Nazad</a>
					</div>
					<div class="form-group form-group--submit col-md-6" >
						<button type="submit" class="btn btn-default btn-sm btn-block btn-dalje"><i class="fa fa-plus-circle"></i> Završi i objavi</a>
						</form>
						<!-- Modal -->
						  <div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							
							  <!-- Modal content-->
							  <div class="modal-content">
								<div class="modal-header">
								  <h4 class="modal-title">USPJEŠNO STE KREIRALI KLUB</h4>
								</div>
								<div class="modal-body">
								  <img class="ikona-modal" src="{{asset('images/icons/checked.svg')}}"></img>
								  <p class="bravo-info">Predložak koji ste napravili će biti u najkraćem mogućem vremenskom periodu pregledan od strane naše administracije, te ukoliko bude zadovoljavao sve uvjete koje nalaže Sve Za Sport, biti će i objavljen.</p>
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
			
			</div>
        <!-- Single Product Tabbed Content / End -->
		</div>
		</div>
		</div>
		</div>
		
	  </div>
	  </div>


@endsection